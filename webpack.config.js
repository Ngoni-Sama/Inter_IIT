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

module.exports = [
	{
		entry: './login.scss',
		output: {
			// This is necessary for webpack to compile, but we never reference this js file.
			filename: 'temp/style-bundle-login.js'
		},
		module: {
			rules: [
				{
					test: /login.scss$/,
					use: getStyleUse('bundle-login.css')
				}
			]
		}
	},
	{
		entry: ['./home.scss'],
		output: {
			// This is necessary for webpack to compile, but we never reference this js file.
			filename: 'temp/style-bundle-home.js'
		},
		module: {
			rules: [
				{
					test: /home.scss$/,
					use: getStyleUse('bundle-home.css')
				}
			]
		}
	},
	{
		entry: './login.js',
		output: {
			filename: 'dist/bundle-login.js'
		},
		module: {
			loaders: [
				{
					test: /login.js$/,
					loader: 'babel-loader',
					query: { presets: ['env'] }
				}
			]
		}
	},
	{
		entry: './home.js',
		output: {
			filename: 'dist/bundle-home.js'
		},
		module: {
			loaders: [
				{
					test: /home.js$/,
					loader: 'babel-loader',
					query: { presets: ['env'] }
				}
			]
		}
	}
];
