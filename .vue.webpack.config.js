const webpack = require('webpack');
const path = require('path');
const fs = require('fs');
const VueLoaderPlugin = require('vue-loader').VueLoaderPlugin;

module.exports = {
    entry: {
        vue: './js/src/vue/app.js',
    },
    output: {
        filename: 'app.js',
        chunkFilename: '[name]-[chunkhash].js',
        path: path.resolve(__dirname, 'public/build/vue'),
        publicPath: '/build/vue',
        asyncChunks: true,
        clean: true,
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                use: ['vue-loader'],
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader'],
            },
            {
                test: /\.scss$/,
                use: ['style-loader', 'css-loader', 'sass-loader'],
            },
        ],
    },
    plugins: [
        new webpack.BannerPlugin(fs.readFileSync(path.resolve(__dirname, 'tools/HEADER'), 'utf8').trim()),
        new VueLoaderPlugin(),
        new webpack.ProvidePlugin({
            process: 'process/browser',
        }),
        new webpack.DefinePlugin({
            __VUE_OPTIONS_API__: true,
            __VUE_PROD_DEVTOOLS__: false,
            __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: false,
        }),
    ],
    resolve: {
        fallback: {
            'process/browser': require.resolve('process/browser.js'),
        },
    },
    mode: 'none',
    devtool: 'source-map',
    stats: {
        all: false,
        errors: true,
        errorDetails: true,
        warnings: true,
        entrypoints: true,
        timings: true,
    },
    devServer: {
        hot: true,
        liveReload: false,
        port: 9637,
        devMiddleware: {
            writeToDisk: true,
        },
    },
};
