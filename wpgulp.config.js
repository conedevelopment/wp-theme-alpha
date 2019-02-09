/**
 * WPGulp Configuration File
 *
 * 1. Edit the variables as per your project requirements.
 * 2. In paths you can add <<glob or array of globs>>.
 *
 * @package WPGulp
 */

module.exports = {

	// Project options.
	projectURL: 'localhost/alpha/', // Local project URL of your already running WordPress site. Could be something like wpgulp.local or localhost:3000 depending upon your local WordPress setup.
	productURL: './', // Theme/Plugin URL. Leave it like it is, since our gulpfile.js lives in the root folder.
	browserAutoOpen: false,
	injectChanges: true,

	// Style options.
	styleSRC: './assets/scss/style.scss', // Path to main .scss file.
	styleDestination: './', // Path to place the compiled CSS file. Default set to root folder.
	outputStyle: 'expanded', // Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
	errLogToConsole: true,
	precision: 10,

	// Gutenberg Editor Style options.
	gutenbergStyleSRC: './assets/scss/style-editor.scss', // Path to main .scss file.
	gutenbergStyleDestination: './', // Path to place the compiled CSS file. Default set to root folder.
	gutenbergOutputStyle: 'expanded', // Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
	gutenbergErrLogToConsole: true,
	gutenbergPrecision: 10,

	// Tiny Mce Editor Style options.
	tinyMceStyleSRC: './assets/scss/style-editor-tiny-mce.scss', // Path to main .scss file.
	tinyMceStyleDestination: './', // Path to place the compiled CSS file. Default set to root folder.
	tinyMceOutputStyle: 'expanded', // Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
	tinyMceErrLogToConsole: true,
	tinyMcePrecision: 10,

	// JS Vendor options.
	jsVendorSRC: './assets/js/vendor/*.js', // Path to JS vendor folder.
	jsVendorDestination: './assets/dist/', // Path to place the compiled JS vendors file.
	jsVendorFile: 'vendor', // Compiled JS vendors file name. Default set to vendors i.e. vendors.js.

	// JS Custom options.
	jsCustomSRC: './assets/js/custom/*.js', // Path to JS custom scripts folder.
	jsCustomDestination: './assets/dist/', // Path to place the compiled JS custom scripts file.
	jsCustomFile: 'custom', // Compiled JS custom file name. Default set to custom i.e. custom.js.

	// Images options.
	imgSRC: './assets/img/raw/*', // Source folder of images which should be optimized and watched. You can also specify types e.g. raw/**.{png,jpg,gif} in the glob.
	imgDST: './assets/img/', // Destination folder of optimized images. Must be different from the imagesSRC folder.

	// Watch files paths.
	watchStyles: './assets/scss/**/*.scss', // Path to all *.scss files inside css folder and inside them.
	watchJsVendor: './assets/js/vendor/*.js', // Path to all vendor JS files.
	watchJsCustom: './assets/js/custom/*.js', // Path to all custom JS files.
	watchPhp: './**/*.php', // Path to all PHP files.

	// Translation options.
	textDomain: 'pine-alpha', // Your textdomain here.
	translationFile: 'pine-alpha.pot', // Name of the translation file.
	translationDestination: './languages', // Where to save the translation files.
	packageName: 'pine-alpha', // Package name.
	bugReport: 'https://pineco.de/about/', // Where can users report bugs.
	lastTranslator: 'Pine <hello@pineco.de>', // Last translator Email ID.
	team: 'Pine <hello@pineco.de>', // Team's Email ID.

	// Browsers you care about for autoprefixing. Browserlist https://github.com/ai/browserslist
	// The following list is set as per WordPress requirements. Though, Feel free to change.
	BROWSERS_LIST: [
		'last 2 version',
		'> 1%',
		'ie >= 11',
		'last 1 Android versions',
		'last 1 ChromeAndroid versions',
		'last 2 Chrome versions',
		'last 2 Firefox versions',
		'last 2 Safari versions',
		'last 2 iOS versions',
		'last 2 Edge versions',
		'last 2 Opera versions'
	],

	sourceMaps: false
};
