# APMIA website: editing guide

The site runs on **Grav 2** (flat-file CMS, no database) with a custom theme in `user/themes/apmia`.
Everything is edited from the admin panel at **`/admin`** (sign in with your existing admin account).

## What is where

| To change… | Go to |
|---|---|
| Any page's text, images, files | Admin → **Pages** → click the page |
| Home page sections (slider, stats, vision/mission, objectives, office bearers, news, call-to-action) | Admin → Pages → **Home** → each `_section` underneath it |
| Top bar, logo, footer links, contact details, copyright, news categories | Admin → **Themes** → **APMIA** (or Configuration → Theme) |
| Contact form messages | Saved as text files in `user/data/apmia-contact/` |
| Where the contact form emails go | `user/config/plugins/email.yaml` (`from` / `to` and mail engine) |

## Page types (choose in the *Advanced* tab → Page Template)

| Template | Use it for |
|---|---|
| **Standard Page** (`default`) | Normal text pages. Has an optional subtitle and banner image. Child pages are listed as an archive. |
| **Section** | A landing page that shows its child pages as cards (About, Elections). |
| **People Listing** + **Person** | Office bearers, CEC members, X-Chairmen. Add a person by adding a child page with the *Person* template and uploading a photo. Order = folder number. |
| **News Listing** + **News Item** | News. Add an item under *News*: set the date, categories (`press-releases`, `events-activities`, `cec-meetings`, `meeting-with-government-officials`, `elections`, `sros`, `general`) and drop images into the text. |
| **Document** | A PDF/Word/Excel download page with an inline PDF viewer (election notices, voter lists, member lists). Upload the file, then pick it in the *Document* tab. |
| **Galleries** + **Photo Gallery** | The Gallery landing page and each photo gallery (upload images, then add them with titles in the *Photos* tab). |
| **Contact Page** | Contact details, map embed, links box, and the form. |

## Common tasks

- **Add a news item:** Pages → *News* → *Add* → Template *News Item* → fill title, date, categories → write the text.
- **Add/replace a PDF (e.g. a new voters list):** open the Document page → upload the new file → select it in the *Document* tab.
- **Add a menu item:** create a page at the top level with a number prefix on its folder (the *Visible* toggle in *Advanced* does the same). Sub-menu items are visible children of a top-level page.
- **Hide a page from the menu:** switch *Visible* off (or remove the number prefix from the folder).
- **Unpublish a page:** switch *Published* off. (Eight 2017 news posts whose images no longer existed on the old site are kept this way as drafts: re-upload the images and publish.)
- **Reorder home sections:** drag the `_section` pages in the tree.

## Redirects

Old WordPress URLs (e.g. `/top-office-bearers/`, `/news-category/sros/`) redirect to their new addresses. They are listed under `redirects:` in `user/config/site.yaml`.

## Not included (by request)

The old `/dashboard/`, `/dashboard/membership/` and `/register/` pages and all login/registration functionality were left out. The informational **Membership** page (documents required, fees, payment details) is kept at `/membership`.
