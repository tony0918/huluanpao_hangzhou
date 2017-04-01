module.exports = function (grunt) {
  'use strict';
  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        //        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      production: {
        src: 'js/*.js',
        dest: 'dist/js/main.min.js'
      }
    },
    watch: {
      files: ['less/**/*.less'],
      tasks: ['less', 'autoprefixer']
    },
    less: {
      development: {
        options: {
          paths: ["less/parts"]
        },
        files: {
          'css/main.css': 'less/main.less'
        }
      }
    },
    autoprefixer: {
      options: {
        browsers: ['last 8 versions']
      },
      development: {
        src: 'css/main.css'
      }
    },
    cssmin: {
      production: {
        files: {
          'css/main.min.css': 'css/main.css'
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['less:development', 'autoprefixer:development', 'watch']);
  grunt.registerTask('deploy', ['default', 'uglify', 'cssmin']);

};