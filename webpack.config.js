const path = require('path');

module.exports = {
  entry: path.join(__dirname, 'wp-content/themes/portfolio/src/js/app.js'),
  output: {
    path: path.join(__dirname, 'wp-content/themes/portfolio/assets/js'),
    filename: 'app.js'
  },
  module: {
    loaders: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
        query: {
          presets: ['env']
        }
      }
    ]
  },
  resolve: {
    modules: [path.join(__dirname, 'src'), 'node_modules'],
    extensions: ['.js'],
    alias: {
      vue: 'vue/dis/vue.esm.js'
    }
  }
};