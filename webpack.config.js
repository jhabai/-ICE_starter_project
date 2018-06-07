// webpack v4

const webpack = require('webpack');
const path = require('path');

// pour créer le fichier CSS on utilise extractText
const ExtractTextWebpackPlugin = require("extract-text-webpack-plugin");

// pour minifier le CSS
const OptimizeCSSAssets = require("optimize-css-assets-webpack-plugin");
new OptimizeCSSAssets();




var nodePath = path.resolve(__dirname, 'node_modules');

module.exports = {
    entry: { main: './src/index.js' },
    output: {
        path: path.resolve(__dirname, './public/assets'),
        filename: 'bundle.js'
    },
    module: {
        rules: [
            // babel converts ES6 JS into old-browser friendly JS, see .babelrc for more details
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: "babel-loader"
                }
            },
            // allow SCSS to be compiled in CSS
            {
                test: /\.scss$/,
                use: ExtractTextWebpackPlugin.extract({
                    fallback: 'style-loader',
                    use: [
                        { loader: "css-loader" },
                        {
                            loader: "sass-loader"
                        },
                        { loader: "postcss-loader" }
                    ],
                })
            }

        ]
    },
    plugins: [
        new ExtractTextWebpackPlugin("app.css"),
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery'
        })
    ],
};

// minify CSS for production
if (process.env.NODE_ENV === 'production') {
    module.exports.plugins.push(new OptimizeCSSAssets());
}