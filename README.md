[![Build Status](https://travis-ci.org/BulletsFramework/bullets_starter_theme.svg?branch=master)](https://travis-ci.org/BulletsFramework/bullets_starter_theme)

Bullets Starter Theme
=======

Bullets is a free WordPress skeleton theme. It contains just about enough Sass to get you started on your next project - but without being a highly comprehensive frame work such as Foundation or Bootstrap.

If you need a frame work with all the bells and whistles - Bullets is not the tool for you. There are no carousels, no complex variations to serve every possible need. Bullets does not come with much in the way of styling.

If you find yourself removing 80% of what comes with a frame work - give Bullets a try.

### Basic Docs

- Get started by tweaking the settings in settings.scss
- You can remove or add the mixins in the style.scss file to only include what you need.
- Bullets has a 12 column grid with column classes for mobile, tablet and desktop, with the breakpoints of these controllable seperate to your media queries (though using the mqs by default).
- The JavaScript is bundled using webpack. Add your own custom JS into assets/app/app.js.
- If you need to import other ES6 node modules, exclude them from the exclude option in webpack.config.js

### Getting Started With Gulp
- Run `npm install` to install the dependancies
- Run `gulp` to confirm everything is working
- Run `gulp browsersync` to watch and compile, make sure you edit the browsersync proxy in gulpfile.js to match your sites local URL

### Contribute

If you want to contribute - feel free. All pull requests considered. However, the aim of Bullets is to be light weight and skinny, so feature requests will always bare this in mind.

### Sites built with Bullets

- TBU