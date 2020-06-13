'use strict';

const {src, dest, watch, series, parallel} = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    bs = require('browser-sync').create();

function scssTask() {
    return src('scss/**/*.+(scss|sass)')
            .pipe(sass())
            .pipe(autoprefixer(['last 15 versions', '>1%', 'ie 8']))
            .pipe(cssnano())
            .pipe(dest('../webroot'))
            .pipe(bs.stream());
};

function watchTask() {
    bs.init({
        proxy: "shcc.ru.localhost"
    });
    watch('scss/**/*.+(scss|sass)', scssTask);
    watch('../webroot/**/*.+(php|html|css|js)', bs.reload);
};

exports.scss = scssTask;
exports.watch = watchTask;