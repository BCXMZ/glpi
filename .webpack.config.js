const webpack = require('webpack');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const MonacoWebpackPlugin = require('monaco-editor-webpack-plugin');
const RtlCssPlugin = require('rtlcss-webpack-plugin');
const { globSync } = require('glob');
const path = require('path');

const libOutputPath = 'public/lib';
const scssOutputPath = 'css/lib';

const config = {
    entry: function () {
        const entries = {};

        for (const ext of ['.js', '.scss']) {
            const files = globSync(path.resolve(__dirname, 'lib/bundles') + '/!(*.min)' + ext);
            for (const file of files) {
                const entry_name = path.basename(file, ext);
                if (entry_name in entries) {
                    throw new Error(`Duplicate bundle entry: '${entry_name}'.`);
                }
                entries[entry_name] = file;
            }
        }

        return entries;
    },
    output: {
        path: path.resolve(__dirname, libOutputPath),
        publicPath: '',
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                include: [
                    path.resolve(__dirname, 'node_modules/@fullcalendar'),
                    path.resolve(__dirname, 'node_modules/cystoscape'),
                    path.resolve(__dirname, 'node_modules/cytoscape-context-menus'),
                    path.resolve(__dirname, 'node_modules/jquery-migrate'),
                    path.resolve(__dirname, 'node_modules/rrule'),
                    path.resolve(__dirname, 'lib/blueimp/jquery-file-upload'),
                ],
                use: ['script-loader', 'strip-sourcemap-loader'],
            },
            {
                test: /\.json$/,
                type: 'json',
            },
            {
                test: path.resolve(__dirname, 'node_modules/jquery.fancytree/dist/modules/jquery.fancytree.ui-deps.js'),
                use: 'null-loader',
            },
            {
                test: /\.css$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader'],
            },
            {
                test: /\.((gif|png|jp(e?)g)|(eot|ttf|svg|woff2?))$/,
                type: 'asset/resource',
                generator: {
                    filename: function (pathData) {
                        let sanitizedPath = path.relative(__dirname, pathData.filename);
                        sanitizedPath = sanitizedPath.replace(/[^\\/\w-.]/, '');
                        sanitizedPath = sanitizedPath.split(path.sep)
                            .filter((part, index) => {
                                return '' != part && index != 0;
                            }).join('/');
                        return sanitizedPath;
                    },
                },
            },
            {
                test: /\.scss$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
            },
        ],
    },
    plugins: [
        new webpack.optimize.LimitChunkCountPlugin({
            maxChunks: 1,
        }),
        new webpack.ProvidePlugin({
            process: 'process/browser',
        }),
        new CleanWebpackPlugin({
            cleanOnceBeforeBuildPatterns: [
                path.join(process.cwd(), libOutputPath + '/**/*'),
                path.join(process.cwd(), scssOutputPath + '/**/*'),
            ],
        }),
        new MiniCssExtractPlugin(),
        new MonacoWebpackPlugin({
            languages: ['html', 'javascript', 'typescript', 'json', 'markdown', 'twig', 'css', 'scss', 'shell'],
        }),
        new RtlCssPlugin('[name].rtl.css'),
    ],
    resolve: {
        fallback: {
            path: require.resolve('path-browserify'),
        },
        mainFields: ['main'],
        alias: {
            '@tiptap/pm/commands': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/commands/index.cjs'),
            '@tiptap/pm/dropcursor': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/dropcursor/index.cjs'),
            '@tiptap/pm/gapcursor': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/gapcursor/index.cjs'),
            '@tiptap/pm/history': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/history/index.cjs'),
            '@tiptap/pm/keymap': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/keymap/index.cjs'),
            '@tiptap/pm/model': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/model/index.cjs'),
            '@tiptap/pm/schema-list': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/schema-list/index.cjs'),
            '@tiptap/pm/state': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/state/index.cjs'),
            '@tiptap/pm/tables': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/tables/index.cjs'),
            '@tiptap/pm/transform': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/transform/index.cjs'),
            '@tiptap/pm/view': path.resolve(__dirname, 'node_modules/@tiptap/pm/dist/view/index.cjs'),
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
};

const filesToCopy = [
    {
        package: '@fullcalendar/core',
        from: 'locales/*.js',
    },
    {
        package: 'flatpickr',
        context: 'dist',
        from: 'l10n/*.js',
    },
    {
        package: 'flatpickr',
        context: 'dist',
        from: 'themes/*.css',
    },
    {
        package: 'select2',
        context: 'dist',
        from: 'js/i18n/*.js',
    },
    {
        package: 'tinymce',
        from: 'skins/**/*',
    },
    {
        package: 'tinymce-i18n',
        from: 'langs7/*.js',
    },
    {
        package: 'rfs',
        from: 'scss.scss',
        to: scssOutputPath,
    },
    {
        package: 'select2',
        from: 'dist/css/select2.css',
        to: scssOutputPath,
    },
    {
        package: 'tinymce',
        from: 'skins/ui/oxide*/skin.css',
        to: scssOutputPath,
    },
    {
        package: 'swagger-ui-dist',
        from: 'oauth2-redirect.html',
    },
    {
        package: '@glpi-project/illustrations',
        context: 'dist',
        from: '*.svg',
    },
    {
        package: '@glpi-project/illustrations',
        context: 'dist',
        from: '*.json',
    },
];

const copyPatterns = [{
    from: path.resolve(__dirname, 'node_modules/flatpickr/dist/l10n/cat.js'),
    to: path.resolve(__dirname, libOutputPath + '/flatpickr/l10n/ca.js'),
    toType: 'file',
}];

for (const specs of filesToCopy) {
    const to = (specs.to || libOutputPath) + '/' + specs.package.replace(/^@/, '');
    let context = 'node_modules/' + specs.package;
    if (Object.prototype.hasOwnProperty.call(specs, 'context')) {
        context += '/' + specs.context;
    }
    const copyParams = {
        context: path.resolve(__dirname, context),
        from: specs.from,
        to: path.resolve(__dirname, to),
        toType: 'dir',
    };
    if (Object.prototype.hasOwnProperty.call(specs, 'ignore')) {
        copyParams.ignore = specs.ignore;
    }
    copyPatterns.push(copyParams);
}

config.plugins.push(new CopyWebpackPlugin({ patterns: copyPatterns }));

module.exports = config;
