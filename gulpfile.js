var gulp = require('gulp'),
    concat = require('gulp-concat')
    minCSS = require('gulp-clean-css'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create(),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('serve', ['sass'], function(){

    gulp.watch('assets/app/sass/**/*.sass', ['sass']);
    /* gulp.watch('app/*html').on('change', browserSync.reload); */
});

gulp.task('sass', function(){
    return gulp.src(['assets/app/sass/_common/*.sass', 'assets/app/sass/default/*.sass', 'assets/app/sass/sections/*.sass', 'assets/app/sass/media/*.sass'])
        .pipe(concat( 'style.sass' ))
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe( gulp.dest( 'assets/stylesheet' ))
        /* .pipe(browserSync.stream()); */
});

gulp.task('js', function(){
	return gulp.src('assets/app/lib/*.js')
		.pipe(sourcemaps.init())
    	.pipe(concat('main.min.js'))
    	.pipe(sourcemaps.write())
    	.pipe(gulp.dest('assets/lib'))
});

gulp.task('default', ['serve']);