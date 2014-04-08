// Generated on <%= (new Date).toISOString().split('T')[0] %> using <%= pkg.name %> <%= pkg.version %>
'use strict';

module.exports = function(grunt) {

    var pkg = grunt.file.readJSON( __dirname +'/package.json');
    var path = require('path');

    // Project configuration.
    grunt.initConfig({

        pkg: pkg,

        /**
         * Set up the project environment
         */
        paths: {
            site: 'www',
            assets: 'www/assets',
            javascript: 'www/assets/js',
            minifiedJavascript: 'www/assets/js/dist/',
            sprites: 'www/assets/images/sprites',
            images: 'www/assets/images',
            css: 'www/assets/css',
            sass: 'www/assets/sass'
        },

        /**
         * Concat
         */
        concat: {

            lib: {
                src: '<%= paths.javascript %>/lib/**/*.js',
                dest: '<%= paths.minifiedJavascript %>lib.js'
            },

            static_mappings: {
                src: '<%= paths.javascript %>/site.js',
                dest: '<%= paths.minifiedJavascript %>site.js'
            }

        },

        /**
         * Blast generated CSS and JS files.
         */
        clean: {
            js: [
                "<%= paths.minifiedJavascript %>**/*.js",
                "!<%= paths.minifiedJavascript %>.svn"
            ],
            server: '.tmp',

            // Expect fred to live at _fred.scss!
            fred: [
                "www/assets/sass/lib/fred.scss"
            ]
        },

        /**
         * Minify images and svgs
         */
        //imagemin: {
        //    dist: {
        //        files: [{
        //            expand: true,
         //           cwd: '<%= paths.assets %>/images/',
         //           src: '{,*/}*.{gif,jpeg,jpg,png}',
        //            dest: '<%= paths.assets %>/images/'
         //       }]
         //   }
        //},
        //svgmin: {
        //    dist: {
         //       files: [{
         //           expand: true,
         //           cwd: '<%= paths.assets %>/images/',
         //           src: '{,*/}*.svg',
        //            dest: '<%= paths.assets %>/images/'
        //        }]
        //    }
        //},

        /**
         * Minify the production Javascript
         */
        uglify: {
            options: {
                banner: "/*! <%= pkg.name %> <%= grunt.template.today(\"yyyy-mm-dd\") %> */\n",
                mangle: {
                    except: ["jQuery", "Backbone", "FP"]
                },
                files: [
                    {
                        expand: true,
                        flatten: true,   // remove all unnecessary nesting
                        src: "<%= paths.minifiedJavascript %>/*.js",  // source files mask
                        dest: "<%= paths.minifiedJavascript %>",    // destination folder
                        ext: '.min.js'   // replace .js to .min.js
                    }
                ]
            },
            dev: {
                options: {
                    beautify: true

                },
                files: "<%= uglify.options.files %>"
            },
            dist: {
                options: {
                    beautify: false
                },
                files: "<%= uglify.options.files %>"
            }
        },

        /**
         * Lint the JS and hurt all the feelings!
         */
        jshint: {
            options: {
                force: true,
                curly: true,
                eqeqeq: true,
                eqnull: true,
                browser: true,
                globals: {
                    jQuery: true
                },
                // Ignore specific warnings - would be good to fix them instead of ignoring them...testing testing testing.
                //'-W061': true,  // Eval can be harmful -
                //'-W083': true,   // Don't make functions within a loop
                ignores: [
                    "<%= paths.minifiedJavascript %>/*.js",
                    "<%= paths.javascript %>/lib/**/*.js",
                    "/**/*.min.js",
                    "/**/*.mini.js",
                    "/**/jquery.js",
                    "/**/jquery.*.js"
                ]
            },
            all: ['<%= paths.javascript %>/{.*,*}/*.js']
        },

        /**
         * Copy Bower dependencies
         */
        copy: {
            bower: {

            }
        },

        sass: {
            dist: {
                files: [
                    {
                        expand: true,     // Enable dynamic expansion.
                        cwd: '<%= paths.assets %>/sass/',      // Src matches are relative to this path.
                        src: ['**/*.scss', "!**/_*.scss"], // Actual pattern(s) to match.
                        dest: '<%= paths.assets %>/css/',   // Destination path prefix.
                        ext: '.css'   // Dest filepaths will have this extension.
                    }
                ]
            }
        },

        crawl: {
            css: {
                paths: ["<%= paths.css %>/lib/**/*.css"],
                output: "<%= paths.css %>/css-assets.md"
            },
            sass: {
                paths: ["<%= paths.sass %>/lib/**/*.scss"],
                output: "<%= paths.sass %>/scss-assets.md"
            }
        },

        shell: {
            bowerInstall: {
                command: "bower list --paths",
                options: {
                    callback: function log(err, stdout, stderr, cb) {
                        var output = JSON.parse(stdout);

                        var getOutput = function(path) {

                            var fileType = path.split('.').pop();
                            var dest = grunt.config("paths.assets") + "/lib";

                            switch(fileType) {
                                case "js":
                                    dest = grunt.config("paths.javascript");
                                    break;
                                case "css":
                                    dest = grunt.config("paths.css");
                                    break;
                                case "scss":
                                    dest = grunt.config("paths.sass");
                                    break;
                            }

                            var filename = /([^\/]+)$/.exec(path)[1];

                            return {
                                src: path,
                                dest: dest + '/lib/' + filename
                            };
                        };

                        var fileList = [];

                        if ( grunt.util.kindOf(output) === "object") {
                            for (var key in output) {
                                var path = output[key];
                                if (typeof(path) === "object") {
                                    for (var i = 0; i < path.length; i++) {
                                        if (grunt.file.isFile(path[i])) {
                                            fileList.push(getOutput(path[i]));
                                        }
                                    }
                                } else {
                                    if (grunt.file.isFile(path)) {
                                        fileList.push(getOutput(path));
                                    }
                                }
                            }
                        } else {
                            return true;
                        }

                        for (var n = 0; n < fileList.length; n++) {
                            var item = fileList[n];
                            grunt.file.copy(item.src, item.dest);
                            grunt.log.writeln(item.dest);
                        }

                        cb();
                    }
                }
            },

            
        },


        /**
         * Watch
         */
        watch: {

            css: {
                files: '<%= paths.assets %>/sass/{,*/}*.scss',
                tasks: ['sass'],
                options: {
                    livereload: true,
                    atBegin: true
                }
            },

            js: {
                files: [
                    "<%= paths.javascript %>/{,*/}*.js",
                    "!<%= paths.javascript %>/dist/*.js"
                ],
                tasks: ['js'],
                options: {
                    livereload: true,
                    atBegin: true
                }
            },

            //sprites: {
            //    files: [
            //        "<%= paths.sprites %>/**/*.png"
            //    ],
            //    tasks: ['sprites'],
            //    options: {
            //        livereload: true,
            //        atBegin: true
            //    }
            //},

            livereload: {
                options: {
                    livereload: 35729
                },
                files: [
                    '<%= paths.site %>/*.html',
                    '.tmp/styles/{,*/}*.css',
                    '{.tmp,<%= paths.javascript %>}/{,*/}*.js',
                    '<%= paths.assets %>/images/{,*/}*.{gif,jpeg,jpg,png,svg,webp}'
                ]
            }
        },
        subgrunt: {
            fred: {
                projects: {
                    // For each of these projects, the specified grunt task will be executed:
                    'bower_components/fred': 'default'
                }
            }
        } 
    });

    // The cool way to load your grunt tasks
    Object.keys( pkg.dependencies ).forEach( function( dep ){
        if( dep.substring( 0, 6 ) === 'grunt-' ) grunt.loadNpmTasks( dep );
    });

    /**
     * Creates a file with all CSS imports
     * --------------------------------------------------------------------
     */
    grunt.registerMultiTask("crawl", "Create a file with all CSS assets", function() {
        var paths = grunt.file.expand( this.data.paths ),
            out = this.data.output,
            contents = "", contentsCss = "", contentsCssImport = "";
        paths.forEach(function( path ) {
            contentsCss += '<link rel="stylesheet" type="text/css" href="' + path + '" />\n';
            contentsCssImport += '@import url("' + path + '");\n';
        });
        contents += contentsCssImport + "\n\n" + contentsCss;
        grunt.file.write( out, contents );
    });

    // Register tasks

    grunt.registerTask("js", [
        "clean:js",
        "jshint",
        "concat"
    ]);

    //grunt.registerTask("images", [
    //    "imagemin",
    //    "svgmin"
    //]);

    var installTasks = [
        "shell:bowerInstall",
        "crawl",
        "clean:fred","subgrunt:fred",
        "build"
    ];

    

    
    grunt.registerTask("fred", "subgrunt:fred");
    

    grunt.registerTask("install", installTasks);


    grunt.registerTask("default", [
        "sass",
        "js:static_mappings"
    ]);

    grunt.registerTask("bower", [
        "shell:bowerInstall"
    ]);

    grunt.registerTask("build", [
        "clean",
        //"sprites",
        //"images",
        "sass",
        "js",
        "uglify:dist"
    ]);

};

