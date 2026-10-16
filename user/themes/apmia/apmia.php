<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use Twig\TwigFilter;

/**
 * APMIA theme.
 *
 * Adds the `albumize` Twig filter: runs of two or more consecutive images in page content
 * become a photo grid with resized thumbnails that opens in the album popup; a lone image
 * becomes a single click-to-zoom photo. Works on whatever the editor writes in Markdown.
 */
class Apmia extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigInitialized' => ['onTwigInitialized', 0],
        ];
    }

    public function onTwigInitialized()
    {
        $this->grav['twig']->twig()->addFilter(
            new TwigFilter('albumize', [$this, 'albumize'], ['is_safe' => ['html']])
        );
    }

    /**
     * @param mixed $html  Rendered page content
     * @param mixed $page  Page whose media folder holds the images
     * @param int   $min   Minimum number of consecutive images that form a grid
     */
    public function albumize($html, $page = null, int $min = 2)
    {
        if (!is_string($html) || stripos($html, '<img') === false) {
            return $html;
        }

        $media = ($page && method_exists($page, 'media')) ? $page->media() : null;

        // A paragraph that contains nothing but images (optionally wrapped in links).
        $pattern = '#<p>\s*((?:(?:<a\b[^>]*>\s*)?<img\b[^>]*>(?:\s*</a>)?\s*(?:<br\s*/?>\s*)?)+)</p>#i';
        if (!preg_match_all($pattern, $html, $matches, PREG_SET_ORDER | PREG_OFFSET_CAPTURE)) {
            return $html;
        }

        // Group paragraphs that follow each other with only whitespace in between.
        $groups = [];
        $cur = null;
        foreach ($matches as $m) {
            $start = $m[0][1];
            $end = $start + strlen($m[0][0]);
            if ($cur && trim(substr($html, $cur['end'], $start - $cur['end'])) === '') {
                $cur['end'] = $end;
                $cur['blocks'][] = $m[1][0];
            } else {
                if ($cur) {
                    $groups[] = $cur;
                }
                $cur = ['start' => $start, 'end' => $end, 'blocks' => [$m[1][0]]];
            }
        }
        if ($cur) {
            $groups[] = $cur;
        }

        for ($g = count($groups) - 1; $g >= 0; $g--) {
            $group = $groups[$g];
            $images = [];
            foreach ($group['blocks'] as $block) {
                if (preg_match_all('#<img\b[^>]*>#i', $block, $tags)) {
                    foreach ($tags[0] as $tag) {
                        $images[] = $tag;
                    }
                }
            }
            if (!$images) {
                continue;
            }

            $out = count($images) >= $min
                ? $this->grid($images, $media)
                : $this->single($images, $media);
            $html = substr_replace($html, $out, $group['start'], $group['end'] - $group['start']);
        }

        return $html;
    }

    private function grid(array $tags, $media): string
    {
        $figures = '';
        foreach ($tags as $tag) {
            $i = $this->resolve($tag, $media, 700, 1800);
            $figures .= '<figure class="photo"><a href="' . $i['full'] . '">'
                . '<img src="' . $i['thumb'] . '" alt="' . $i['alt'] . '" loading="lazy"'
                . ($i['w'] && $i['h'] ? ' width="' . $i['w'] . '" height="' . $i['h'] . '"' : '')
                . '></a></figure>';
        }
        return '<div class="album" data-lightbox data-count="' . count($tags) . '">' . $figures . '</div>';
    }

    private function single(array $tags, $media): string
    {
        $out = '';
        foreach ($tags as $tag) {
            $i = $this->resolve($tag, $media, 1100, 1800);
            $out .= '<figure class="photo-single" data-lightbox><a href="' . $i['full'] . '">'
                . '<img src="' . $i['thumb'] . '" alt="' . $i['alt'] . '" loading="lazy"'
                . ($i['w'] && $i['h'] ? ' width="' . $i['w'] . '" height="' . $i['h'] . '"' : '')
                . '></a></figure>';
        }
        return $out;
    }

    /**
     * Work out thumbnail + full-size URLs for an <img> tag. Images that live in the page folder get
     * resized copies (kept in Grav's image cache); anything else is used as-is.
     */
    private function resolve(string $tag, $media, int $thumbWidth, int $fullWidth): array
    {
        $src = '';
        $alt = '';
        if (preg_match('#\ssrc=("|\')(.*?)\1#i', $tag, $m)) {
            $src = $m[2];
        }
        if (preg_match('#\salt=("|\')(.*?)\1#i', $tag, $m)) {
            $alt = $m[2];
        }

        $result = ['full' => $src, 'thumb' => $src, 'alt' => $alt, 'w' => 0, 'h' => 0];
        if (!$media || $src === '') {
            return $result;
        }

        $name = rawurldecode(basename((string)parse_url(html_entity_decode($src), PHP_URL_PATH)));
        $medium = $media[$name] ?? null;
        if (!$medium || !($medium instanceof \Grav\Common\Page\Medium\ImageMedium)) {
            return $result;
        }

        try {
            $thumb = $medium->copy()->cropResize($thumbWidth, $thumbWidth * 3)->quality(80);
            $full = $medium->copy()->cropResize($fullWidth, $fullWidth * 3)->quality(86);
            $result['thumb'] = $thumb->url();
            $result['full'] = $full->url();
            $result['w'] = (int)$thumb->get('width');
            $result['h'] = (int)$thumb->get('height');
        } catch (\Throwable $e) {
            // keep the original URLs
        }

        return $result;
    }
}
