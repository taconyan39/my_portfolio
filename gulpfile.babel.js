import gulp from 'gulp';
import webpackConfig from './webpack.config.js'
import webpack from 'webpack-stream';
import browserSync from 'browser-sync';
import notify from 'gulp-notify';
import plumber from 'gulp-plumber';
import eslint from 'gulp-eslint';
import rename from 'gulp-rename';
import sass from 'gulp-sass';
// Sassでワイルドカードを使えるようにするプラグイン
import sassGlob from 'gulp-sass-glob';

gulp.task('js-build', function(){
  gulp.src('wp-content/themes/portfolio/src/js/app.js')
  .pipe(plumber({
    errorHandler: notify.onError("Error: <%= error.message %>")
  }))
  .pipe(webpack(webpackConfig))
  .pipe(gulp.dest("wp-content/themes/portfolio/assets/js"));
});

gulp.task('sass-build', function(){
  gulp.src('wp-content/themes/portfolio/src/scss/style.scss')
  .pipe(sassGlob()) // Sassの@importにおけるglobを有効にする
  .pipe(plumber({
    errorHandler: notify.onError("Error: <%= error.message %>")
  }))
  .pipe(sass())
  .pipe(rename({extname: '.css'}))
  .pipe(gulp.dest("wp-content/themes/portfolio/assets/css"));
});

gulp.task('browser-sync', function() {
  browserSync.init({
    server: {
      // baseDir: "./",
      // index: "photo/album.html"
      baseDir: "localhost:8888/",
      index: "photo/"
    }
  });
});
gulp.task('bs-reload', function(){
  browserSync.reload();
});

gulp.task('eslint', function() {
  return gulp.src(['wp-content/themes/portfolio/src/**/*.js'])
    .pipe(plumber({
      errorHandler: function(error){
        const taskName = 'eslint';
        const title = '[task]' + taskName + ' ' + error.plugin;
        const errormsg = 'error:' + error.message;
        console.error(title + '\n' + errormsg);
        notify.onError({
          title: title,
          message: errormsg,
          time: 3000
        });
      }
    }))
    .pipe(eslint({ useEslintrc: true}))
    .pipe(eslint.format())
    .pipe(eslint.failOnError())
    .pipe(plumber.stop())
});

gulp.task('default', ['eslint', 'js-build','sass-build', 'browser-sync'], function(){
  gulp.watch('./wp-content/themes/portfolio/src/**/*.js', ['js-build']);
  gulp.watch('./wp-content/themes/portfolio/src/**/*.css',['css-build']);
  gulp.watch('./wp-content/themes/portfolio/src/**/*.scss', ['sass-build']);
  gulp.watch('./*.html', ['bs-reload']);
  gulp.watch('./wp-content/themes/portfolio/assets/**/*.+(js|css)', ['bs-reload']);
})