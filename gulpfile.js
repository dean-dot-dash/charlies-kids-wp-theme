require("dotenv").config();
// Built with this tutorial: https://www.cssigniter.com/use-sass-gulp-wordpress-theme-plugin-development-workflow/
// Updated to Gulp 4 Standards (gulp.series)
const gulp = require("gulp");
const plumber = require("gulp-plumber");
const sass = require("gulp-sass");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
// const sourcemaps = require("gulp-sourcemaps");
const groupmq = require("gulp-group-css-media-queries");
const bs = require("browser-sync");

const SASS_SOURCES = [
  "./*.scss", // This picks up our style.scss file at the root of the theme
  "css/**/*.scss", // All other Sass files in the /css directory
];

/**
 * Compile Sass files
 */
gulp.task("compile:sass", function compileSass() {
  return gulp
    .src(SASS_SOURCES, { base: "./" })
    .pipe(plumber()) // Prevent termination on error
    .pipe(
      sass({
        indentType: "tab",
        indentWidth: 1,
        outputStyle: "expanded", // Expanded so that our CSS is readable
      })
    )
    .on("error", sass.logError)
    .pipe(
      postcss([
        autoprefixer({
          browsers: ["last 2 versions"],
          cascade: false,
        }),
      ])
    )
    .pipe(groupmq()) // Group media queries!
    .pipe(gulp.dest(".")) // Output compiled files in the same dir as Sass sources
    .pipe(bs.stream());
}); // Stream to browserSync

/**
 * Watch Sass files for changes
 */
gulp.task(
  "watch:sass",
  gulp.series("compile:sass", function watchSass() {
    bs.init({
      proxy: process.env.LOCAL_WP_HOST,
    });

    gulp.watch(SASS_SOURCES, gulp.series("compile:sass"));
  })
);

/**
 * Default task executed by running `gulp`
 */
gulp.task("default", gulp.series("watch:sass"));
