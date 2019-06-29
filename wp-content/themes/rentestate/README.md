# Prcyxpress - wordpress skeleton theme for rapid development powered by webpack + html5blank

####  current version: 1.0

## Features

- Babel polyfill for writing es5, es6 JS
- BrowserSync ( you can use webpack-dev server if you want, i use AMPPS)
- SASS ( change in webpack.config.js if you want to use another preprocessor)
- CSS, JS optimization and minify. 
- Well structured theme files and functions (thanks to html5blank)
- JQUERY included - if you like feeling old (commented out by default in ./src/app.js)

That is just starting point, if you need something crazy from webpack , just include it into your theme :)

## How to install

> 1. copy this theme into wp-content/themes/
> 2. npm install
> 4. setup config in webpack.config.js (proxy or port if you are using browsersync option)
> 3. run "npm run ---'script name' " from options bellow
> 4. enjoy yourself

## NPM build options

|        Usage          |              Script name      |
|-----------------------|-------------------------------|
|Development    		|build          				|
|Development + watch    | watch  						|
|Production        		|production						|

### Having some crazy ideas ?

send pull request :)