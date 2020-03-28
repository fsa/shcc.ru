'use strict';

const {src, dest, watch, series, parallel} = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    bs = require('browser-sync').create();

function scssTask() {
    return src('../src/scss/**/*.+(scss|sass)')
            .pipe(sass(
//                    {
//                        outputStyle: 'expanded',
//                        includePaths: ["node_modules/bootstrap/scss/"]
//                    }
            ))
            .pipe(autoprefixer(['last 15 versions', '>1%', 'ie 8']))
//    .pipe(cssnano())
            .pipe(dest('../htdocs'))
            .pipe(bs.stream());
};

function watchTask() {
    bs.init({
        proxy: "shcc.ru.localhost"
    });
    watch('../src/scss/**/*.+(scss|sass)', scssTask);
    watch('../htdocs/**/*.+(php|html|css|js)', bs.reload);
};

exports.scss = scssTask;
exports.watch = watchTask;