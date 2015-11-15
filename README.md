![Architecture Screenshot](https://www.dropbox.com/s/0xufdordo14cg0k/architecture.png?raw=1)

# Architecture - A website built with [Kirby](http://getkirby.com/) a file-based CMS. 

## Structure

- A Home page
- A paginated Projects page (6 projects per page)
- A Team page
- A Contact page

## Features

- The [Kirby web interface](http://getkirby.com/docs/panel) to administrate the website right in the browser
- [Bootstrap](http://getbootstrap.com/) responsive layout
- [Bootstrap Carousel](http://getbootstrap.com/javascript/#carousel) to display the multiple images of a project
- Touch Gestures on the Carousel thanks to [Hammer.js](http://hammerjs.github.io/)

## Quick Start Install

$ git clone --recursive https://github.com/aurerua/architecture.git

## Kirby Requirements

- Apache 2 with URL rewriting (mod_rewrite) or nginx
- PHP 5.3+
- PHP mbstring extension for proper UTF-8 support

More information can be found in the [Kirby documentation](http://getkirby.com/docs/installation)
