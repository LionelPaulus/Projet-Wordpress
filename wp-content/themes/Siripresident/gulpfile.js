var gulp = require('gulp'),
sass = require('gulp-sass');
sync = require('browser-sync').create();
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');

var processors = [
autoprefixer
];

gulp.task('scss', function() {
return gulp.src('scss/app.scss')
.pipe(sass())
.pipe(postcss(processors))
.pipe(gulp.dest('css'))
});

gulp.task('sync', ['scss'], function(){
		gulp.watch("scss/**/*.scss", ['scss']);
});