const pages = ['index', 'home', 'login', 'signup'];

function getStyleUse(bundleFilename) {
	return [
		{
			loader: 'file-loader',
			options: {
				name: 'dist/' + bundleFilename
			}
		},
		{ loader: 'extract-loader' },
		{ loader: 'css-loader' },
		{
			loader: 'sass-loader',
			options: {
				includePaths: ['./node_modules'],
				implementation: require('dart-sass'),
				fiber: require('fibers')
			}
		}
	];
}

function getStyleEntry(pageName) {
	return {
		entry: './' + pageName + '.scss',
		output: {
			// This is necessary for webpack to compile, but we never reference this js file.
			filename: 'temp/style-bundle-' + pageName + '.js'
		},
		module: {
			rules: [
				{
					test: new RegExp(pageName + '.scss$'),
					use: getStyleUse('bundle-' + pageName + '.css')
				}
			]
		}
	};
}

function getJSEntry(pageName) {
	return {
		entry: './' + pageName + '.js',
		output: {
			filename: 'dist/bundle-' + pageName + '.js'
		},
		module: {
			loaders: [
				{
					test: new RegExp(pageName + '.js$'),
					loader: 'babel-loader',
					query: { presets: ['env'] }
				}
			]
		}
	};
}

let config = [];

pages.forEach(page => {
	config.push(getStyleEntry(page));
	config.push(getJSEntry(page));
});

module.exports = config;
