'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('src/includes/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('src/build/stylesheets'));
});

gulp.task('sass:watch', function() {
    gulp.watch('src/includes/*.scss', gulp.series('sass'));
});