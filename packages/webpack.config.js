/**
 * Some code removed to keep work private.
 */

const path = require('path')

const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const Dotenv = require('dotenv-webpack');
const webpack = require('webpack');
require('dotenv').config();

module.exports = {

    /**
     * Show Source Map
     */
    devtool: 'source-map',

    /**
     * Production is minified.
     */
    mode: 'development',

    /**
     * Show minimal output in terminal.
     */
    stats: 'minimal',

    /**
     * Where is the js files are.
     */
    entry: {
        global: {
            import: '../media/src/js/global.js',
            dependOn: [
                'vendor',
                'greensock'
            ],
        },
        vendor: [
            'flickity',
        ],
        greensock: {
            import: [
                'gsap',
                'gsap/SplitText',
                'gsap/ScrollTrigger',
                'vue',
                'axios'
            ],
            dependOn: 'vendor',
        },
    },

    /**
     * Resolovers.
     */
    resolve: {
        modules: [
            path.resolve(__dirname, 'node_modules'), 'node_modules'
        ],
        extensions: ['.tsx', '.ts', '.js', '.vue',],
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js'
        }
    },

    /**
     * Export js to the output.
     */
    output: {
        path: path.resolve(__dirname, '../media/dist/js'),
        filename: '[name].min.js',
    },

    /**
     * Loaders.
     */
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            {
                test: /\.scss$/,
                exclude: /node_modules/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            importLoaders: 1,
                            url: false
                        },
                    },
                    'sass-loader',
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                config: path.resolve(__dirname, 'postcss.config.js'),
                            }
                        },
                    },
                    'postcss-loader',
                ],
            },
        ],
    },

    /**
     * Split chunks.
     */
    optimization: {
        splitChunks: {
            chunks: 'all',
        },
    },

    /**
     * Plugins.
     */
    plugins: [
        new Dotenv(),
        new webpack.DefinePlugin({
            __VUE_OPTIONS_API__: true,
            __VUE_PROD_DEVTOOLS__: true,
        }),
        new MiniCssExtractPlugin({
            filename: '../css/style.css'
        }),
        new CleanWebpackPlugin(),
    ],
}
