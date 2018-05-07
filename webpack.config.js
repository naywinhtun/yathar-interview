let webpack = require('webpack');
let path = require('path');

module.exports = {

	entry: './resources/assets/js/login.js',

	output: {
		path: path.resolve(__dirname,'public/js'),
		filename:'login.js',
		publicPath:'./public'
	},

	resolve: {
		alias: {
          'vue$': 'vue/dist/vue.esm.js' // 'vue/dist/vue.common.js' for webpack 1
        }
    }
};