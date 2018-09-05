# Changelog
This project adheres to semantic versioning.

## v3.0.2 (2018-01-20)
- support click listeners in html-markup-only variant (#17)

## v3.0.1 (2018-01-19)
- add typescript type definitions (#12)

## v3.0.0 (2017-12-13)
- rename sidebar `options.id` to `options.container`, accepting a DOM Node or ID
- fix sidebar `remove()`

### breaking changes
- prefixed all CSS classes with `leaflet-` to avoid conflicts with bootstrap (#13)
- `remove()` now destroys the sidebar container for consistency with other leaflet controls

## v2.0.0 (2017-11-13)
- added `title` option for `addPanel()`: autocreates a header with close button
- added `closeButton` option for sidebar constructor: defaults to true

### breaking changes
- sidebar div is now moved into the map container, may break your layout ([#8](https://github.com/nickpeihl/leaflet-sidebar-v2/issues/8))
- sidebar constructor only accepts option object, `id` param moved to `opts.id`

## v1.1.1 (2017-11-13)
- shrink package size

## v1.1.0 (2017-11-13)
- add autopan feature
- allow to add buttons with URLs or click handlers as tabs
- restructure examples & readme

## v1.0.2 (2017-11-13)
- fix build files in package

## v1.0.1 (2017-11-13)
- hide scrollbar when collapsed
- add support for L.Evented for leaflet 1.2.0+
- fix chrome css bug
- all URLs in tab href

## v1.0.0 (2016-10-31)
### Added
- New API functions, `addPanel`, `removePanel`, `enablePanel`, `disablePanel`

### Changed
- Only compatible with Leaflet

### Removed
- Remove OpenLayers support
- Remove Google Maps support


## v0.3.0 (2016-01-19)

- ol2: move scale line control too when sidebar opens/closes
- hide scrollbars when collapsed ([#21](https://github.com/Turbo87/sidebar-v2/issues/21))
- fix tab clicking on devices with touch screen *and* mouse ([#34](https://github.com/Turbo87/sidebar-v2/issues/35))
- new `.sidebar-header` CSS class for styled headings
- new `.sidebar-close` CSS class for close buttons in headings
- fix broken Google Maps code (until Google changes things again...)
- allow `.disabled` on `<li>` elements in `.sidebar-tabs` element
- allow second tabbar at the bottom
- new `position: 'right'` option


## v0.2.1 (2014-09-29)

- ol2, ol3: fixed sidebar content scrolling


## v0.2.0 (2014-09-29)

- jQuery API and events


## v0.1.0 (2014-09-12)

- first beta release
