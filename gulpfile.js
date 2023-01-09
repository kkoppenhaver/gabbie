'use strict';
var gulp = require('gulp');
var concat = require('gulp-concat');
const sass = require('gulp-sass')(require('node-sass'));
var uglify = require('gulp-uglify');

gulp.task('sass', function () {
   return gulp.src('./assets/scss/**/*.scss')
   .pipe(concat('app.scss'))
   .pipe(sass().on('error', sass.logError))
   .pipe(gulp.dest('./dist/'));
});

gulp.task('scripts', function() {
  return gulp.src('./assets/js/**/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('./dist'))
});

gulp.task('watch', function(){
  gulp.watch('assets/scss/**/*.scss', gulp.series('sass'));
  gulp.watch('assets/js/**/*.js', gulp.series('scripts')); 
});

