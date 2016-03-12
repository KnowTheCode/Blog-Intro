# Blog Intro

This plugin is for the [Insert Content from Editor into Blog Page](https://knowthecode.io/labs/insert-content-editor-blog-page) Lab on [KnowTheCode.io](https://KnowTheCode.io).

Introduce Your Blog Page - Add an introduction to the site's blog page using the WordPress editor on the page_for_posts page.Introduction your blog (page_for_posts) page to your audience.

## What does it do?
Out-of-the-box WordPress does not display the contents on the page set for page_for_posts (set in Settings > Reading and static > Posts page).  The editor in the admin area is disabled for this reason.

This plugin and lab walks you through how to:

1. Build a custom plugin
2. Enable the editor on the Blog post
3. Get the contents from the database
4. And the render (display) the contents on the front-end

## Lab Notes

1. The plugin is currently configured for the Genesis framework, but could easily be adapted for any theme.
2. If you use this plugin on another theme, you will need to make some adjustments with the events, particularly `genesis_before_loop`, which is used to trigger the render callback.

## FAQ

### Why not use a template to do this?
You could easily take this plugin and place the functionality into the `home.php` template with your theme.  The intent with this lab is to show you how to build more modular code that you can port from project-to-project without having to copy/paste into the theme itself. However, the choice is yours where you want to put the functionality.

### Why not use a widget?
The editor gives much more flexibility.  Clients are used to the editor.  It allows them to style and set their content the way they want without having to know HTML or CSS.

## Features

This plugin includes the following features:

1. [Composer](https://getcomposer.org/) - Dependency Manager for PHP
2. [Kint](http://raveren.github.io/kint/) - Awesome package that helps you to debug - forget `var_dump` and `print_r`. You are going to love Kint.
3. [Whoops](https://github.com/filp/whoops) - Oh man, you will wonder why this isn't built into PHP. When an error occurs, this displayer replaces out the PHP orange table and gives you information you can actually use.

## Installation

1. Download it.
2. Put into your `wp-content/plugins/` folder
3. Extract it
4. Go into the new folder
5. Run `composer install` in terminal to bring in the dependencies and install Composer locally.

Installation from GitHub is as simple as cloning the repo onto your local machine.  To clone the repo, do the following:

1. Using PhpStorm, open your project and navigate to `wp-content/plugins/`. (Or open terminal and navigate there).
2. Then type: `git clone https://github.com/KnowTheCode/WordPress-Starter-Plugin-Lab`.
3. Go into the new folder
4. Run `composer install` in terminal to bring in the dependencies and install Composer locally.

## Contributions

All feedback, bug reports, and pull requests are welcome.