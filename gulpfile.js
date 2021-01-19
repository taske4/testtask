const {src, dest, watch, series} = require('gulp'),
    sass = require('gulp-dart-sass'),
    browsersync = require('browser-sync').create();

const inputSass = './src/assets/sass/**/*.scss',
    outputCss = './dist/assets/css';

function sassTask() {
    return src(inputSass)
        .pipe(sass())
        .pipe(dest(outputCss))
}

function browsersyncServe(cb) {
    browsersync.init({
        server: {
            baseDir: '.'
        }
    });
    cb();
}

function browsersyncReload(cb) {
    browsersync.reload();
    cb();
}

function watchTask() {
    watch('./**/*.html', browsersyncReload);
    watch([inputSass], series(sassTask, browsersyncReload));
}

exports.default = series(
    sassTask,
    browsersyncServe,
    watchTask
);

