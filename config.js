module.exports = {
	config: {
		tailwindjs: "./tailwind.config.js",
		port: 9050,
	},
	paths: {
		root: "./",
		src: {
			base: "./src",
			css: "./src/scss",
			cssExt: "./src/scss/external",
			js: "./src/js",
			jsExt: "./src/js/external",
			img: "./src/img",
		},
		dist: {
			base: "./dist",
			css: "./dist/css",
			cssExt: "./dist/css/external",
			js: "./dist/js",
			jsExt: "./dist/js/external",
			img: "./dist/img",
		},
		build: {
			base: "./build",
			css: "./build/css",
			js: "./build/js",
			img: "./build/img",
		},
	},
};