# v1.3.4
## 07-08-2019

1. [](#improved)
  * Markdown notices integration
  * Cards images `alt-text`
  * Assets event now `onAssetsInitialized`
2. [](#bugfix)
  * Featured image css missing

# v1.3.3
## 03-08-2019

1. [](#improved)
  * Theme css minified and compressed
  * Light colors are more accessible
2. [](#bugfix)
  * Blueprints fix

# v1.3.2
## 01-08-2019

1. [](#new)
  * Added `item.text_align` theme option
  * Added support for lastfm and sharer plugins
2. [](#improved)
  * Renamed skills template to bars
3. [](#bugfix)
  * Fixed a SASS compile error
  * Fixed charset lang error in latest Grav version

# v1.3.1
## 25-6-2019

1. [](#improved)
  * Footer now is always aligned to the bottom of viewport
2. [](#bugfix)
  * Related pages summary broke HTML markup on truncating
  * Masonry only-text items classnames spacing

# v1.3
## 24-6-2019

1. [](#new)
  * Added pagination template. Disable `built_in_css` plugin option to render it properly.
  * Fluid container option
2. [](#improved)
  * Moved Twig macros to SASS functions to ease theme extending and understanding.
  * Added new colors (expert mode)
3. [](#bugfix)
  * Language typo error

# v1.2
## 15-6-2019

1. [](#new)
  * Added `container_fluid` and `item.featured_image` theme options
2. [](#improved)
  * Updated [Bootstrap 4.3.1](https://blog.getbootstrap.com/2019/02/11/bootstrap-4-3-0/)
  * SCSS improvements
  * Better responsive layouts
3. [](#bugfix)
  * Login status template desalignment


# v1.1.12
## 30-3-2019

1. [](#new)
  * Implement assets rendering using **Deferred Block** Twig extension
2. [](#bugfix)
  * Fixed a bug in macro button when site is under a subdomain

# v1.1.11
## 24-2-2019

1. [](#new)
  * Added support for [readingtime](https://github.com/getgrav/grav-plugin-readingtime) plugin
2. [](#improved)
  * Breadcrumb style now from Bootstrap

# v1.1.10
## 24-1-2019

1. [](#new)
  * Related pages at bottom items
2. [](#bugfix)
  * Some styles buttons didn't have background animation
3. [](#improved)
  * Css improvements
  * Updated masonry and cards responsive layouts

# v1.1.9
## 24-12-2018

1. [](#bugfix)
  * Fixed js [Popper](https://popper.js.org/) dependency

# v1.1.8
## 24-12-2018

1. [](#bugfix)
  * Fixed show_more translation (blog modular template)
2. [](#improved)
  * Assets css/js in collection named `bootstrap-blog`
  * Showcase parameter `image_filters` renamed to `image_actions`
  * Dropdown menu can be splitted using `split_menu: true`

# v1.1.7
## 26-11-2018

1. [](#bugfix)
  * Fixed navbar style color

# v1.1.6
## 19-11-2018

1. [](#bugfix)
  * Fixed navbar macro

# v1.1.5
## 17-11-2018

1. [](#improved)
  * Navbar color change from item headers
  * Added new colors to blueprints
  * Icon in dropdown menus
2. [](#bugfix)
  * Fixed disqus bug when title has quotes
  * Carousel controls id broken

# v1.1.4
## 10-11-2018

1. [](#new)
  * Carousel modular template
  * Skills modular template
2. [](#bugfix)
  * JQuery slim no worked with CDN files

# v1.1.3
## 24-10-2018

1. [](#improved)
  * Supported new styles in blueprints (no forms)
2. [](#bugfix)
  * Fixed style in cards layout

# v1.1.2
## 21-10-2018

1. [](#new)
  * New bootstrap colors
2. [](#bugfix)
  * Fixed pagination

# v1.1.1
## 23-09-2018

1. [](#new)
  * Added taxonomy selectors
2. [](#improved)
  * Updated Bootstrap 4.1 and FontAwesome [5.1.3](https://github.com/FortAwesome/Font-Awesome/releases/tag/5.3.1)
  * Css fixes

# v1.1
## 15-07-2018

1. [](#new)
  * Added go to top button
2. [](#improved)
  * Merge portfolio and blog layouts
  * Added info style
  * Now dateformat comes from Grav System Config
  * Removed portfolio templates. Use blog instead
3. [](#bugfix)
  * Fixed navbar image

# v1.0
##  02-06-2018

1. [](#new)
    * Initial version
