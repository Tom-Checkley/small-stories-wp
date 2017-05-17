var gulp = require('gulp'),
		sass = require('gulp-sass'),
		plumber = require('gulp-plumber'),
		autoprefix = require('gulp-autoprefixer'),
		maps = require('gulp-sourcemaps'),
		rename = require('gulp-rename');

gulp.task('compileSass', function() {
	return gulp.src([
			'scss/app.scss'
		])
		.pipe(plumber())
		.pipe(maps.init({loadMaps: true}))
		.pipe(sass()).on('error', sass.logError)
		.pipe(autoprefix('last 2 versions', 'ie 8', 'ie 9'))
		.pipe(maps.write('./'))
		.pipe(gulp.dest('css/'));
});

gulp.task('watchFiles', function() {
	gulp.watch(['scss/**/*'], ['compileSass']);
});

gulp.task('default', ['compileSass', 'watchFiles']);