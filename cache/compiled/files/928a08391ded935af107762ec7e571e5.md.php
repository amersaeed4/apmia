<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/Users/amer/Sites/apmia/user/pages/04.news/news.md',
    'modified' => 1792151585,
    'size' => 170,
    'data' => [
        'header' => [
            'title' => 'News',
            'menu' => 'News',
            'content' => [
                'items' => '@self.children',
                'filter' => [
                    'type' => 'newsitem'
                ],
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'url_taxonomy_filters' => true
            ]
        ],
        'frontmatter' => 'title: "News"
menu: "News"
content:
  items: "@self.children"
  filter:
    type: "newsitem"
  order:
    by: "date"
    dir: "desc"
  url_taxonomy_filters: true',
        'markdown' => ''
    ]
];
