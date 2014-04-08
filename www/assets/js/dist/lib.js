window.Browser = (function(window){
    /**
     * Browser helper library for common things we need to know.
     * Access via get method: Browser.get("clickEvent");
     * ----------------------------------------------------------------------------
     */
    var BrowserHelpers = {
        clickEvent: function() {
            return "ontouchstart" in window ? "touchend" : "click";
        },
        cssPrefix: function() {
            var el = document.createElement( "div" ),
            prefixes = ["Webkit", "Moz", "O", "ms"];
            for ( var i = 0; i < prefixes.length; i++ ) {
                if ( prefixes[i] + "Transition" in el.style ) {
                    return prefixes[i];
                }
            }
            return "transition" in el.style ? "" : false;
        },
        getPrefixedCssProp: function(baseProp) {
            var str = this.cssPrefix();
            if (!str) return false;
            str = str.replace(/([A-Z])/g, function(str,m1){ return '-' + m1.toLowerCase(); }).replace(/^ms-/,'-ms-');
            return str;
        },
        transitionEvent: function() {
            var prefix = this.cssPrefix(),
                cssProp = this.getPrefixedCssProp(prefix),
                transitionEvent;

            switch(prefix) {
                case "Moz":
                    transitionEvent = "transitionend";
                    break;
                case "Webkit":
                    transitionEvent = "webkitTransitionEnd";
                    break;
                case "O":
                    transitionEvent = "oTransitionEnd";
                    break;
                case "ms":
                    transitionEvent = "MSTransitionEnd";
                    break;
                case "":
                    transitionEvent = "transitionend";
                    break;
            }
            return transitionEvent;
        },
        animationEvent: function() {
            var prefix = this.cssPrefix(),
                cssProp = this.getPrefixedCssProp(prefix),
                animationEvent;

            switch(prefix) {
                case "Moz":
                    animationEvent = "animationend";
                    break;
                case "Webkit":
                    animationEvent = "webkitAnimationEnd";
                    break;
                case "O":
                    animationEvent = "oAnimationEnd";
                    break;
                case "ms":
                    animationEvent = "MSAnimationEnd";
                    break;
                case "":
                    animationEvent = "animationend";
                    break;
            }
            return animationEvent;
        },
        _getHelper: function(key) {
            if (!arguments.length) {
                return false;
            }
            var self = this,
                helperFunc;
            helperFunc = self[key];
            if (typeof(helperFunc) === "function") {
                return helperFunc.call(self);
            }
            return false;
        }
    };

    /**
     * Default tests
     * ----------------------------------------------------------------------------
     */
    var DefaultTests = {
        modern: function(){
            return 'querySelector' in document && 'localStorage' in window && 'addEventListener' in window;
        }
    };

    /**
     * Browser object
     * ----------------------------------------------------------------------------
     */
    var Browser = {
        tests: {},
        results: {},
        init: function(tests) {
            var self = this;
            if (!arguments.length) {
                self.addTests(DefaultTests);
            } else {
                self.addTests(Tests);
            }
        },
        _getResult: function(key) {
            if (!arguments.length) {
                return false;
            }
            var self = this;
            return self.results[key];
        },
        _run: function(testName) {
            var self = this;
            var testFunc = self.tests[testName];
            if (typeof(testFunc) === "function") {
                self.results[testName] = testFunc();
            }
        },
        _remove: function(testName) {
            var self = this;
            var _test = self.tests[testName];
            var _result = self.results[testName];
            if (_test) {
                _test = undefined;
            }
            if (_result) {
                _result = undefined;
            }
        },
        addTests: function(object) {
            if (!arguments.length) {
                return false;
            }
            var self = this,
                testFunc;
            switch (typeof(object)) {
                case "object":
                    for (var testName in object) {
                        testFunc = object[testName];
                        self.addTest(testName, testFunc);
                    }
                    break;
                case "function":
                    this.addTest("userTest", object);
                    break;
                default:
                    return false;
            }

            return this;
        },
        runTests: function(){
            var self = this;
            if (!self.tests) {
                return false;
            }
            for (var testName in self.tests) {
                self._run(testName);
            }
            self.updateHtml();
            return self.results;
        },
        updateHtml: function() {
            var self = this;
            for (var res in self.results) {
                if (self.results[res]) {
                    document.documentElement.className += " " + res;
                }
            }
            document.documentElement.className = document.documentElement.className.replace("no-js", "js");
        },
        runTest: function(testName){
            var self = this;
            self._run(testName);
        },
        addTest: function(testName, testFunc){
            var self = this;
            if (!self.tests[testName]) {
                self.tests[testName] = testFunc;
            }
        },
        removeTest: function(testName){
            var self = this;
            self._remove(testName);
            return true;
        },
        removeTests: function() {
            var self = this;
            self.tests = {};
            self.results = {};
            return true;
        }
    };

    /**
     * Run the test package
     */
//    Browser.init();
//    Browser.runTests();

    /**
     * Expose the Browser object to the window
     */
    return {
        features: function() {
            return Browser.results;
        },
        is: function(key) {
            return Browser._getResult(key);
        },
        has: function(key) {
            return Browser._getResult(key);
        },
        supports: function(key) {
            return Browser._getResult(key);
        },
        get: function(key) {
            return BrowserHelpers._getHelper(key);
        },
        removeTest: function(testName){
            return Browser.removeTest(testName);
        },
        removeTests: function(){
            return Browser.removeTests();
        },
        addTest: function(testName, testFunc){
            return Browser.addTest();
        },
        addTests: function(tests){
            return Browser.addTests(tests);
        },
        runTest: function(testName){
            return Browser.runTest(testName);
        },
        runTests: function(){
            return Browser.runTests();
        },
        init: function(tests){
            return Browser.init(tests);
        }
    };

})(window);


/**
 * Your feature tests
 * ----------------------------------------------------------------------------
 */
var Tests = (function(window, Browser){

    // Define your test suite here. For more tests, visit the exhaustive list:
    // http://diveintohtml5.info/everything.html
    var Tests = {
        responsive: function() {
            return typeof(window.matchMedia) === "function" ? true : false;
        },
        modern: function(){
            return 'querySelector' in document && 'localStorage' in window && 'addEventListener' in window;
        },
        touchEvents: function() {
            return "ontouchstart" in window;
        },
        noTouchEvents: function() {
            return "ontouchstart" in window ? false : true;
        },
        placeholders: function() {
            return ('placeholder' in document.createElement('input'));
        },
        nativeOverflowScrolling: function() {
            var el = document.createElement('div');
            el.setAttribute('style', '-webkit-overflow-scrolling: touch;');
            return el.style.webkitOverflowScrolling == 'touch' ? true : false;
        },
        mobile: function() {
            var userAgent = navigator.userAgent.toLowerCase();
            return userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/) ? true : false;
        },
        fixed: function() {
            var test = document.createElement('div');
            var root = document.documentElement;
            test.style.cssText = 'position:fixed;top:0;';
            root.appendChild(test);
            var hasFixed = test.offsetTop === 0 ? true : false;
            root.removeChild(test);
            return hasFixed;
        },
        sticky: function() {
            var test = document.createElement('div');
            var root = document.documentElement;
            var hasSticky = false;
            var vendors = ["webkit","moz","o",""];
            for (var vendor in vendors) {
                var val = (vendors[vendor] == "") ? "sticky" : "-"+vendors[vendor]+"-sticky";
                test.style.position = val;
                root.appendChild(test);
                if(test.style.position === val) {
                    hasSticky = true;
                    break;
                }
                root.removeChild(test);
            }
            return hasSticky;
        },
        windowsPhoneMango: function() {
            return navigator.userAgent.match(/IEMobile9.0/) ? true : false;
        },
        retina: function() {
            var mediaQuery = "(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-resolution: 1.5dppx)";
            if (window.devicePixelRatio > 1) {
                return true;
            }
            if (window.matchMedia && window.matchMedia(mediaQuery).matches) {
                return true;
            }
            return false;
        },
        history: function() {
            return window.history && window.history.pushState ? true : false;
        },
        tel: function() {
            var i = document.createElement('input');
            i.setAttribute('type', 'tel');
            return i.type !== 'text';
        },
        postMessage: function() {
            return !!window.postMessage;
        },
        fileApi: function() {
            return typeof FileReader != 'undefined';
        },
        localStorage: function() {
            try {
              return 'localStorage' in window && window['localStorage'] !== null;
            } catch(e) {
              return false;
            }
        }
    };

    return Tests;

})(window, Browser);

// Run the test package
Browser.init(Tests);
Browser.runTests();

var Fancy = (function(document,window){

    var emptyFormElem = function($elem) {

        // Selects (set to top item)
        if ($elem.prop("tagName") === "SELECT") {
            $elem.children("option").attr("selected", false);
            $elem.children("option:first-child").attr("selected", true);
            $elem.trigger("change");
        }

        // Textareas
        else if ($elem.prop("tagName") === "TEXTAREA") {
            $elem.html("");
            $elem.trigger("change");
        }

        // Everything else
        else if ($elem.prop("tagName") === "INPUT") {
            // Everything else
            if ($elem.attr("type") !== "checkbox" && $elem.attr("type") !== "radio") {
                $elem.val("");
            } else {
                $elem.attr("checked", false);
            }
            $elem.trigger("change");
        }

        // Make it recursive
        var $children = $elem.children();
        if ($children.size() > 0) {
            $children.each(function(index, elem){
                emptyFormElem($(elem));
            });
        }

        return;
    };


    var FancyInput = (function(){

        var hasJS = function() {
            var root = document.documentElement;
            root.className = root.className.replace(/\bno-js\b/,'') + ' js';
        };

        var Fancy = function(options){
            var self = this;
            this.element = "";
            this.input = "";
            this.triggerElement = "";
            if (arguments.length) {
                $.extend(self, options);
            }
            return self;
        };

        Fancy.prototype = {
            init: function(){
                var self = this,
                    $inputs = $(self.element);

                $inputs.each(function(i) {
                    var $domEl = $(this);
                    var $inputEl = $domEl;
                    if (self.input) {
                        $inputEl = $(this).find(self.input);
                    }
                    $inputEl.on("change keyup", function(e){

                        var target = e.target,
                            $target = $(target);
                        self.updateState($target, $domEl);
                    });

                    if (self.triggerElement) {
                        $(self.triggerElement, $domEl).on("click", function(e) {
                            $inputEl.trigger("click");
                        });
                    }

                    if (self.onInputInitialize) {
                        self.onInputInitialize.call(self, $domEl, $inputEl);
                    }

                    if (!$domEl.data("ignore-onload")) {
                        self.updateState($inputEl, $domEl);
                    }

                });

                if (self.onInitialize) {
                    self.onInitialize.call(self);
                }
            },
            updateState: function($el, $domEl) {
                var self = this;
                if(self.onInputChange) {
                    self.onInputChange.call(self, $el, $domEl);
                }
            }
        };
        hasJS();
        return Fancy;
    })();

    /**
     * SelectBoxes
     * Update an arbitrary label element based on the selectedIndex.
     */
    var FancySelects = (function(FancyInput) {
        var Selects = new FancyInput({
            element: "[data-select]",
            input: "select",
            activeClass: "select--loaded",
            debug: "foo",
            onInputInitialize: function($domEl, $inputEl) {
                $domEl.parent().addClass(self.activeClass);
                $domEl.find("[data-select-label]").on("click", function(){
                    $inputEl.focus();
                });
            },
            onInputChange: function($inputEl, $domEl) {
                var self = this,
                    $self = $inputEl,
                    domEl = $self.get(0),
                    index = $self.prop("selectedIndex"),
                    labelText = "",
                    newLabelText = "&nbsp;";

                var labelEl = $inputEl.siblings("[data-select-label]").get(0);

                if(domEl.options.length) {
                    var optionText = domEl.options[index].text;
                    if (optionText !== "") {
                        newLabelText = optionText;
                    }
                }

                labelText = newLabelText;
                labelEl.innerHTML = labelText;
            }
        });
        return Selects;
    })(FancyInput);


    /**
     * Pretty checkboxes
     */
    var FancyCheckboxes = (function(FancyInput){
        var Checkboxes = new FancyInput({
            element: "[data-checkbox]",
            input: "input",
            triggerElement: ".field_checkbox__fancy",
            activeClass: "field_checkbox--checked",
            onInputChange: function($el) {
                var self = this,
                    el = $el.get(0),
                    $parent = $el.parent();
                if (el.checked) {
                    $parent.addClass(self.activeClass);
                } else {
                    $parent.removeClass(self.activeClass);
                }
            }
        });
        return Checkboxes;
    })(FancyInput);


    /**
     * Pretty radio buttons
     */
    var FancyRadios = (function(FancyInput){
        var Radio = new FancyInput({
            element: "[data-radio]",
            input: "input",
            triggerElement: ".field_radio__fancy",
            activeClass: "field_radio--checked",
            onInputChange: function($el) {
               var self = this;
               $group = $("input:radio[name='"+$el.attr("name")+"']");
               $group.each(function( index ) {
                  el = $(this).get(0),
                  $parent = $(this).parent();
                  if (el.checked) {
                      $parent.addClass(self.activeClass);
                  } else {
                      $parent.removeClass(self.activeClass);
                  }
               });
            }
        });
        return Radio;
    })(FancyInput);


    var FancyConditionals = (function(FancyInput){
        var showHide = new FancyInput({
            element: "[data-additional-trigger]",
            input: "select, input",
            debug: "bar",
            onInitialize: function() {
                var self = this;
                var $links = $(self.element).not("[data-additional-value]");

                $links.on("click change", function(e) {

                    var target = e.currentTarget;
                    var $target = $(target);
                    if ($target.data("hide-self")) {
                        $target.hide();
                    }

                    self.onInputChange.call(self, null, $target);
                });
            },
            onInputChange: function($inputEl, $domEl){
                var self = this;
                var validationCondition = $domEl.data("additional-value");
                var additionalTrigger = $domEl.data("additional-trigger");
                var hasInput = $inputEl ? true : false;
                if (hasInput) {

                    var show = false;
                    // different operators

                    // less than
                    if (validationCondition.toString().substring(0,1) == "<") {
                        if ($.isNumeric($inputEl.val()) && parseInt($inputEl.val()) < parseInt(validationCondition.substring(1))) {
                            show = true;
                        }
                        // greater than
                    } else if ($.isNumeric($inputEl.val()) && validationCondition.toString().substring(0,1) == ">") {
                        if ($inputEl.val() > validationCondition.substring(1)) {
                            show = true;
                        }
                        // equal to
                    } else if ($inputEl.val() == validationCondition) {
                        show = true;
                    }
                } else {
                    show = true;
                }

                if (show) {
                    self.showAdditional(additionalTrigger);
                } else {
                    self.hideAdditional(additionalTrigger);
                }
                // Fire an event in case we need to do other stuff
                $(document).trigger("inputChange" + additionalTrigger);
            },
            showAdditional: function(formElementName) {
                $("[data-additional='" + formElementName + "']").removeAttr("data-additional-hide");
            },
            hideAdditional: function(formElementName) {
                var $elem = $("[data-additional='" + formElementName + "']");
                $elem.attr("data-additional-hide", "true");
                this.emptyValues($elem);
            },
            emptyValues: function($elem) {
                emptyFormElem($elem);
            }
        });
        return showHide;
    })(FancyInput);

    $(document).ready(function() {
        FancySelects.init();
        FancyCheckboxes.init();
        FancyRadios.init();
        FancyConditionals.init();
    });

})(document,window);

/* onMediaQuery | http://springload.co.nz/love-the-web/ | Released under the MIT license. | Fri 21 June, 2013 */
(function(b,a){"function"===typeof define&&define.amd?define(function(){return b.MQ=a(b,b.MQ||{})}):b.MQ=a(b,b.MQ||{})})(this,function(b){b.init=function(a){this.callbacks=[];this.new_context=this.context="";if("undefined"!==typeof a)for(i=0;i<a.length;i++)this.addQuery(a[i]);this.addEvent(window,"resize",b.listenForChange,b);this.listenForChange()};b.listenForChange=function(){var a;document.documentElement.currentStyle&&(a=document.documentElement.currentStyle.fontFamily);window.getComputedStyle&&
(a=window.getComputedStyle(document.documentElement,null).getPropertyValue("font-family"));null!==a&&(a=a.replace(/['",]/g,""),a!==this.context&&(this.new_context=a,this.triggerCallbacks(this.context,"unmatch"),this.triggerCallbacks(this.new_context,"match")),this.context=this.new_context)};b.addQuery=function(a){if(null!==a&&void 0!==a)return this.callbacks.push(a),"string"==typeof a.context&&(a.context=[a.context]),"boolean"!==typeof a.call_for_each_context&&(a.call_for_each_context=!0),""!==this.context&&
this._inArray(this.context,a.context)&&a.match(),this.callbacks[this.callbacks.length-1]};b.removeQuery=function(a){if(null!==a&&void 0!==a)for(var e=-1;-1<(e=b._indexOf(a,this.callbacks));)this.callbacks.splice(e,1)};b.triggerCallbacks=function(a,b){var c,d;for(c=0;c<this.callbacks.length;c++)!1===this.callbacks[c].call_for_each_context&&("match"===b&&this._inArray(this.context,this.callbacks[c].context)||"unmatch"===b&&this._inArray(this.new_context,this.callbacks[c].context))||(d=this.callbacks[c][b],
this._inArray(a,this.callbacks[c].context)&&void 0!==d&&d())};b.addEvent=function(a,b,c,d){null!==a&&void 0!==a&&(a.addEventListener?a.addEventListener(b,function(){c.call(d)},!1):a.attachEvent?a.attachEvent("on"+b,function(){c.call(d)}):a["on"+b]=function(){c.call(d)})};b.getPreviousContext=function(){return this.context};b.getContext=function(){return this.new_context};b._inArray=function(a,b){for(var c=b.length,d=0;d<c;d++)if(b[d]==a)return!0;return!1};b._indexOf=function(a,b,c){var d;if(b){if(b.indexOf)return b.indexOf(a,
c);d=b.length;for(c=c?0>c?Math.max(0,d+c):c:0;c<d;c++)if(c in b&&b[c]===a)return c}return-1};return b});

var QuickTube = (function(){

    // Mobile Safari exhibits a number of documented bugs with the
    // youtube player API. User agent detection, but you'll live, my boy!
    // https://groups.google.com/forum/#!topic/youtube-api-gdata/vPgKhCu4Vng
    var isMobileSafari = function() {
        return (/Apple.*Mobile.*Safari/).test(navigator.userAgent);
    };

    var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Export this to window directly.
    window.onYouTubeIframeAPIReady = function() {
        $(document).ready(function() {
            QuickTube.init();
        });
    };

    var QT = {
        _settings: "?autoplay=1&showinfo=0&autohide=1&color=white&enablejsapi=1&playerapiid=ytplayer&wmode=transparent",
        _domain: "http://www.youtube.com/embed/",
        _players: {},
        className: "quicktube__iframe",
        activeClass: "quicktube--playing",
        pausedClass: "quicktube--paused",
        posterFrameHiddenClass: "quicktube__poster--hidden",
        supportsTransitions: ('transition' in document.body.style || 'webkitTransition' in document.body.style || 'MozTransition' in document.body.style || 'msTransition' in document.body.style || 'OTransition' in document.body.style),
        setExplicitFrameHeight: false,
        init: function() {
            var self = this;
            $("[data-quicktube-play]").on("click", function() {
                self.onClick.call(self, $(this));
            });
            $("[data-quicktube-stop]").on("click", function() {
                var videoId = $(this).data("quicktube-stop");
                self.stopVideo.call(self, videoId);
            });
            return this;
        },
        onClick: function($el) {
            var self = this;
            var parentId = $el.data("quicktube-play");
            var $parent = $("[data-quicktube=\"" + parentId + "\"]");
            var $videoContainer = $parent.find("[data-quicktube-video]");
            var $video = $("iframe." + self.className, $videoContainer);
            var videoId = $videoContainer.data("quicktube-video");
            var $poster = $parent.find("[data-quicktube-poster]");

            var onPlayerStateChange = function(e) {
                if (e.data == YT.PlayerState.ENDED) {
                    self.stopVideo.call(self, parentId);
                }
            };

            var onPlayerReady = function(e) {
                if (!isMobileSafari()) {
                    if ($parent.data("video-playing")) {
                        self.stopVideo.call(self, parentId);
                    } else {
                        $parent.data("video-playing", true);
                       e.target.playVideo();
                    }
                }
            };

            if (!$video.length) {
                $video = self.getIframePlayer(videoId, $parent, parentId);
                $videoContainer.html($video);
                this.jamesPlayer = new YT.Player(parentId, {
                    events: {
                        'onStateChange': onPlayerStateChange,
                        'onReady': onPlayerReady
                    }
                });
            }

            if (!isMobileSafari()) {
                if (this.jamesPlayer.playVideo) {
                    this.jamesPlayer.playVideo();
                }
            }

            if (self.setExplicitFrameHeight) {
                $video.height($parent.outerHeight());
            }

            if (!$parent.data("video-playing")) {
                self.hidePosterFrame($poster);
                self._players[parentId] = $parent;
                $parent.addClass(self.activeClass).removeClass(self.pausedClass);
                $(window).trigger("quicktube:play", parentId, $parent);
            }
        },

        hidePosterFrame: function($poster) {
            var self = this;
            $poster.addClass(self.posterFrameHiddenClass);
            if (!self.supportsTransitions) {
                $poster.fadeOut(300);
            }
        },

        showPosterFrame: function($poster) {
            var self = this;
            $poster.removeClass(self.posterFrameHiddenClass);
            if (!self.supportsTransitions) {
                $poster.fadeIn(300);
            }
        },

        getIframePlayer: function(id, parent, parentId) {
            var self = this;
            var src = self._domain + src + self._settings;
            var iframe = document.createElement("iframe");
            iframe.src = self._domain + id + self._settings;
            iframe.width = "100%";
            iframe.id = parentId;
            iframe.className = this.className;
            return $(iframe);
        },

        stopVideo: function(parentId) {
            var self = this;
            var $parent = $("[data-quicktube=\"" + parentId + "\"]");
            var frame = $parent.find("iframe");
            var func = "pauseVideo";

            this.jamesPlayer.pauseVideo();
            $parent.removeClass(self.activeClass).addClass(self.pausedClass);
            self.showPosterFrame($parent.find("[data-quicktube-poster]"));
            $parent.data("video-playing", false);
            self._players[parentId] = false;
            $(window).trigger("quicktube:pause", parentId, $parent);
        }
    };
    return QT;
})();

(function(window, document){

    "use strict";

    window.ShowHide = (function(){

        // Constructor
        var showHide = function($container, $triggers, options) {
            var self = this;
            this.$container = $container;
            this.$triggers = $triggers;
            this.activeClass = "showhide-open";
            this.triggerClass = "showhide-active";
            this.animInClass = false;
            this.animOutClass = false;
            this.autoHeight = false;
            this.activateModal = false;
            this.animEvent = Browser.get("animationEvent");

            // Pass in extra attributes
            $.extend(self, options);

            this.isOpen = $container.hasClass(this.activeClass) ? true : false;

            if (this.$triggers) {
                 // Event handlers
                this.$triggers.on("click", $.proxy(self.onClick, self));
            }
        };

        showHide.prototype = {
            onClick: function(e) {
                e.preventDefault();
                var self = this;
                if (self.isOpen) {
                    self.close(e);
                } else {
                    self.open(e);
                }
            },
            open: function(e) {
                var self = this;
                var shouldOpen = this.$container.hasClass(this.activeClass) ? false : true;
                var group = this.$container.attr("data-showhide-group");
                var isDismissible = this.$container.attr("data-showhide-dismissible");
                var $others;
                var $doc =  $(document);

                self.$container.removeClass(self.animOutClass);
                self.$container.addClass(self.activeClass);

                if (self.autoHeight) {
                    self.$container.addClass("autoheight");
                    self.$container.css("height", "auto");
                    self.realHeight = self.$container.outerHeight();
                    var height = self.realHeight + "px";
                    self.$container.css("height", height);
                    // Very important for responsiveness.
                    $(window).one("resize", function() {
                        self.$container
                            .css("height", "auto")
                            .removeClass("autoheight")
                            .off(Browser.get("transitionEvent"));
                    });
                }

                if (self.animInClass && self.animEvent) {
                    self.$container.one(this.animEvent, function() {
                        self.$container.removeClass(self.animInClass);
                    });
                    self.$container.addClass(self.animInClass);
                }

                this.$triggers.each(function() {
                   var $this = $(this);
                    $this.addClass(self.triggerClass);
                    if (typeof $this.attr("data-hide-self") !== "undefined") {
                        $this.hide();
                    }
                });

                if (group) {
                    $doc.trigger("showHide:closeGroup", [group, self.alias]);
                }

                if (typeof(isDismissible) !== "undefined") {
                    e.stopPropagation();
                    this.$container.on("click", function(e) {
                        e.stopPropagation();
                    });
                    $doc.one("click", function(e) {
                        self.close.call(self);
                    });
                }

                // Fire an event that other things can bind to
                $doc.trigger("showHide:open", [self]);

                this.isOpen = true;
                return shouldOpen;
            },
            close: function() {
                var self = this, $document = $(document);
                var shouldClose = this.$container.hasClass(this.activeClass) ? true : false;


                if (self.animOutClass && this.animEvent) {
                    this.$container.one(this.animEvent, function() {
                        self.$container.removeClass(self.animOutClass);
                        self.$container.removeClass(self.activeClass);
                    });
                    self.$container.removeClass(self.animInClass);
                    self.$container.addClass(self.animOutClass);
                } else if (self.autoHeight) {
                    if (self.$container.hasClass("autoheight")) {
                        self.$container.css("height", "0px");
                        self.$container.one(Browser.get("transitionEvent"), function() {
                            self.$container.removeClass(self.activeClass);
                        });
                    } else {
                        self.$container.removeClass(self.activeClass);
                    }
                } else {
                    self.$container.removeClass(self.activeClass);
                }


                this.$triggers.each(function() {
                    var $this = $(this);
                    $this.removeClass(self.triggerClass);
                    if (typeof $this.attr("data-hide-self") !== "undefined") {
                        $this.show();
                    }
                });

                // Fire an event that other things can bind to
                $document.trigger("showHide:close", [self]);

                this.$container.off("click", function(e) {
                    e.stopPropagation();
                });

                $document.off("click", function(e) {
                    self.close.call(self);
                });

                this.isOpen = false;
                return shouldClose;
            },
            remove: function() {
                var self = this;
                this.$container = null;
                this.$triggers.off("click", $.proxy(self.onClick, self));
            }
        };

        return showHide;
    })();

    window.ShowHideController = (function(){
        return {
            showHides : {
            },
            // Find anything that should be a ShowHide and damn right make it a ShowHide
            init : function() {
                var self = this;
                self.add($("[data-showhide-container]"));
                $(document).on("showHide:closeGroup", function(e, group, exclude) {
                    self.closeGroup.call(self, group, exclude);
                });
            },
            add: function($selector) {
                var self = this;
                $selector.each(function(index, elem){
                    var options;
                    var $showHideContainer = $(elem);
                    var name = $showHideContainer.data("showhide-container");
                    var group = $showHideContainer.data("showhide-group");
                    var $showHideTriggers = $("[data-showhide-trigger='" + name + "']");
                    var activeClass = $showHideContainer.data("showhide-activeclass");
                    var animInClass = $showHideContainer.data("showhide-in");
                    var animOutClass = $showHideContainer.data("showhide-out");
                    var triggerClass = $showHideContainer.data("showhide-triggerclass");
                    var autoHeight = typeof($showHideContainer.data("showhide-autoheight")) !== "undefined";

                    options = {
                        alias: name,
                        group: group,
                        activeClass: activeClass,
                        triggerClass: triggerClass,
                        animInClass: animInClass,
                        animOutClass: animOutClass,
                        autoHeight: autoHeight
                    };

                    self.showHides[name] = new ShowHide($showHideContainer, $showHideTriggers, options);
                });
            },
            closeGroup: function(groupName, exclude) {
                var self = this, obj;
                for (var key in self.showHides) {
                    obj = self.showHides[key];
                    if (obj.group === groupName && obj.alias !== exclude) {
                        obj.close();
                    }
                }
            }
        };
    })();

    $(document).ready(function() {
        ShowHideController.init();
    });

})(window, document);

var Teflon = (function(){

    /**
     * Carousel Controller
     */
    var Controller = {
        selector: "[data-teflon]",
        carousels: [],
        init: function() {
            var self = this;
            var $selectors = $(self.selector);
            $selectors.each(function() {
                self.add($(this));
            });
            $selectors = null;
            $(window).on("teflon:next", $.proxy(self.delegateMethod, self));

        },
        add: function($el) {
            var self = this;
            //var items = $.parseJSON($el.data('teflon'));
            var items = $el.data('teflon');

            // Call render to show the first item
            var carousel = new Carousel(
                {
                    $el: $el,
                    items: items,
                    id: self.carousels.length
                }
            );
            self.carousels.push(carousel);
            items = null;
            return carousel;
        },
        remove: function($el) {
            var self = this;
            var removeAll = false;
            if (!$el) {
                removeAll = true;
            }
            for (var i = 0; i < self.carousels.length; i++) {
                var carousel = self.carousels[i];
                if (removeAll || carousel.$el === $el) {
                    carousel.remove();
                }
                // This will remove ref to the element.
                self.carousels.splice(i, 1);
            }
        },
        delegateMethod: function(e, id) {
            var self = this;
            var method = e.type ? e.type.replace("teflon:", "") : "next";
            for (var i = 0; i < self.carousels.length; i++) {
                var carousel = self.carousels[i];
                if (carousel.domId === id) {
                    carousel[method]();
                }
            }
        }
    };


    /**
     * Utility for loading images
     *
     * @param $element      A jQuery element
     * @param src           String - image source
     * @param done          Callback function
     * @param error         Error function
     * @returns {*}         jQuery
     */
    var loadImage = function($element, src, done, error) {

        return $element.bind("load error onreadystatechange", function(e) {
            if (e.type !== "error") {
                if (done) {
                    done();
                }
            } else {
                if (error) {
                    error();
                }
            }
            // Watch out for zombies...
            $element.off("load error onreadystatechange");
        }).attr("src", src);
    };


    /**
     * getImageSize
     *
     * Update this with your logic for determining the image size!
     *
     * @param $item {Object}
     * @returns {String}
     */
    var getImageSize = function($item) {
        var $img;

        var innerWidth = window.innerWidth || false;

        if (oMQ.getContext() === "skinny") {
            if (window.devicePixelRatio > 1 || innerWidth > 800) {
                $img = $item.large;
            } else {
                $img = $item.medium;
            }
        } else if (oMQ.getContext() === "mobile") {
            if (window.devicePixelRatio > 1 || innerwidth > 400) {
                $img = $item.medium;
            } else {
                $img = $item.small;
            }
        } else {
            if (window.devicePixelRatio > 1) {
                $img = $item.xlarge;
            } else {
                $img = $item.large;
            }
        }
        return $img;
    };


    /**
     * Hash of handy transitions. Make sure the fallbacks return the $.animate() method,
     * so that they can be processed in a deferred.
     */
    var TransitionDuration = 600;
    var Transitions = {
        slideRight: {
            inbound: {
                className: "slideInRight",
                fallback: function($el) {
                    $el.css({
                        left: "15px",
                        opacity: 0
                    });

                    return $el.animate({
                        left: "0",
                        opacity: 1
                    }, TransitionDuration);
                }
            },
            outbound: {
                className: "slideOutLeft",
                fallback: function($el) {
                    $el.css({
                        left: "0"
                    });
                    return $el.animate({
                        left: "-15px"
                    }, TransitionDuration);
                }
            }
        },
        slideLeft: {
            inbound: {
                className: "slideInLeft",
                fallback: function($el) {
                    $el.css({
                        left: "-15px",
                        opacity: 0
                    });
                    return $el.animate({
                        left: "0",
                        opacity: 1
                    }, TransitionDuration);
                }
            },
            outbound: {
                className: "slideOutRight",
                fallback: function($el) {
                    $el.css({
                        left: "0"
                    });
                    return $el.animate({
                        left: "15px"
                    }, TransitionDuration);
                }
            }
        }
    };


    /**
     * Data provider for Carousels
     *
     * @param  {Object} options [description]
     * @return {Object}         [description]
     */
    var DataSource = function(options) {
        var self = this;
        self._index = 0;
        self._lastIndex = 0;
        if (options) {
            self._hash = options.data;
            self._hasData = true;
        }
        return this;
    };

    DataSource.prototype = {
        reset: function() {
            var self = this;
            self._hash = false;
            self._hasData = false;
            self._index = 0;
        },
        getIndex: function() {
            var self = this;
            return self._index;
        },
        setIndex: function(index) {
            var self = this,
                total = self.getLength();
            if (index > total-1) {
                index = total-1;
            }
            if (index <= 0) {
                index = 0;
            }
            self._lastIndex = self._index;
            self._index = index;
            return self._index;
        },
        getLastIndex: function() {
            var self = this;
            return self._lastIndex;
        },
        getLength: function() {
            var self = this;
            return self._hash.length;
        },
        getItem: function(index) {
            var self = this;

            if (!arguments.length) {
                index = self.getIndex();
            }

            if (index < 0) {
                return self._hash[self.getLength()-1];
            }

            if (index > self.getLength()-1) {
                return self._hash[0];
            }

            return self._hash[index];
        },
        render: function(item) {
            if (!item) return false;
            return this.renderMethod(item);
        },
        renderMethod: function(item) {
            return $(document.createElement("img"));
        }
    };

    /**
     * The Carousel
     * ------------------------------------------------------------------------
     * @param  {{$el: *, items: *}} options [description]
     * @return {[type]}         [description]
     */
    var Carousel = function(options) {
        var self = this;
        var $window = $(window);
        self.$el = options.$el;
        self.el = self.$el.get(0);

        // $el already has a carousel, so close this one.
        if (self.$el.data("isNonStick")) {
            return self.remove();
        }

        self.domId = self.$el.attr("data-teflon-id");

        // Let the element know it has a carousel.
        self.$el.data("isNonStick", true);

        // Use CSS transforms if supported, otherwise use marginLeft jquery.
        self.useTransform = Browser.get("cssPrefix");
        self.transformProperty = self.useTransform ? Browser.get("getPrefixedCssProp") + "-transform" : "marginLeft";
        self.transitionProperty = Browser.get("getPrefixedCssProp") + "-transition";
        self.transitionEvent = Browser.get("animationEvent");

        // When we render a slide, grab the contents of the next one as well
        self.preloadNextItems = true;

        $parent = self.$el.parent();
        $nav_parent = $(document.getElementById("nav_" + $parent.attr("id")));
        self.$arrowNext = $nav_parent.find(self.arrowNext);
        self.$arrowBack = $nav_parent.find(self.arrowBack);
        self.$list = self.$el.find(self.listSelector);
        self.getFirst();
        self.getLast();

        self.touch = Browser ? Browser.has("touchEvents") : false;

        if (options.items && options.items.length > 1 && self.touch) {
            self.$el.on("drag", $.proxy(self.onDrag, self));
            self.$el.on("dragstart", $.proxy(self.onDragStart, self));
            self.$el.on("dragend dragleave release", $.proxy(self.onDragEnd, self));
        }

        // Requires hammer.js!!
        self.$el.hammer();

        self.$arrowNext.on("click", $.proxy(self.onTap, self));
        self.$arrowBack.on("click", $.proxy(self.onTap, self));
        self.$el.on("click", $.proxy(self.onTap, self));
        self.container = {};

        if (options.items) {
            self.dataSource = new DataSource({
                data: options.items
            });
            var index = self.$first.data('index');
            if (index) {
                self.dataSource.setIndex(index-1);
            }
        }

        if (options.itemRenderMethod) {
            self.dataSource.renderMethod = options.itemRenderMethod;
        }

        if (options.animationDuration) {
            self.animationDuration = options.animationDuration;
        }

        if (typeof(self.$el.attr("data-teflon-clickable")) !== "undefined") {
            self.canNavigate = true;
            self.$el.addClass("teflon--clickable");
        }

        self.render();

        if (options.items) {
            $window.trigger("teflon:initComplete", [ self.dataSource.getItem(0), self.$first.parent() ]);
        }

        self.$el.on("teflon:beforeImageLoad", $.proxy(this.onBeforeImageLoad, this));
        self.$el.on("teflon:imageLoaded", $.proxy(this.onNewImageLoaded, this));

        return self;
    };

    Carousel.prototype = {

        arrowNext: "[data-teflon-next]",
        arrowBack: "[data-teflon-back]",
        listSelector: "[data-teflon-list]",
        itemSelector: ".teflon_image",
        itemLoadingClass: "teflon__item--loading",
        dragVelocityThreshold:.5,
        dragScreenPercentage: 20,
        dragStart: 0,
        dragCurrent: 0,
        itemsToShow: 1,
        debug: false,
        animationDuration: TransitionDuration,

        /**
         * Event handlers to check we're interacting with a carousel.
         */
        onTap: function(e) {
            var target = e.target,
                self = this;

            if (target === self.$arrowBack.get(0)) {
                self.back();
            } else if (target === self.$arrowNext.get(0)) {
                self.next();

            // Prevent falling through!
            } else if (target.hasAttribute("data-teflon-preventdefault")) {
                e.preventDefault();
                e.stopPropagation();
                return false;
            } else if (self.canNavigate) {
                var item = self.dataSource.getItem();
                if (item.url) {
                    $(window).trigger("teflon:beforeRedirect", [ item ]);
                    window.location = item.url;
                }
            }

            e.preventDefault();
        },

        onDragStart: function(e) {
            var self = this;
            if (self.isAnimating) {
                return;
            }
            if (self.dragStartTime) return;
            if (self.debug) console.log("dragStart: ", e);
            self.dragStartTime = +new Date();
            self.getDeltaThreshold();
            self.isAnimating = false;
            self.lastDelta = 0;
            self.wasSwapped = false;
            self.wasRendered = false;
            self.shouldTransition = false;
            self.lockWindow();
            self.dragEnded = false;

            // Prevent the carousel from dragging around if the pointer device leaves the window
            $("body").one("mouseleave", function(e) {
                if (e.relatedTarget === document.querySelector("html") || e.currentTarget === document) {
                    self.onDragEnd();
                }
            });

            e.stopPropagation();

        },

        lockWindow: function() {
            $(document).on("touchmove", false);
        },

        unlockWindow: function() {
           $(document).off("touchmove", false);
        },

        /**
         * When dragged slowly to previous image.
         */
        onDrag: function(e) {
            var self = this,
                delta = 0,
                index = self.dataSource.getIndex(),
                startLeft = 0,
                dragWidth,
                deltaPercent,
                newLeft;

            e.stopPropagation();
            if (!e.gesture) {
                self.onDragEnd();
                return false;
            }

            if (!self.dragStartTime) {
                self.$el.trigger("mouseup");
                return false;
            }

            if (self.isAnimating) {
                return;
            }

            if (e.gesture) {
                delta = e.gesture.deltaX;
            }

            if (self.debug) console.log("onDrag: lastDelta", self.lastDelta, "delta: ", delta);

            // Show next image in the last container
            if (delta < 0) {
//                startLeft = 0;
//
//                if (self.lastDelta >= 0) {
//                    newIndex = index + 1;
//                    if (self.debug) console.log("onDrag: Should show item " + newIndex + " in last <li>");
//
//                    // Swap back if we're see-saw dragging
//                    if (self.wasSwapped) {
//                        self.swapContainerOrder();
//                    }
//
//                    self.container = self.getLast();
//                } else {
//                    //console.log("set container false");
//                    self.container = false;
//                }

            // Show prev image in the first container
            } else if (delta > 0) {
//                startLeft = -100;
//
//                if (self.lastDelta <= 0) {
//                    newIndex = index - 1;
//                    if (self.debug) console.log("onDrag: Should show item " + newIndex + " in first <li>");
//
//                    self.swapContainerOrder();
//                    self.wasSwapped = true;
//                    self.container = self.getFirst();
//                } else {
//                    self.container = false;
//                }
            }
//
//            self.lastDelta = delta;
//
//            if (self.container) {
//                if (self.debug) console.log('onDrag: Rendering item', newIndex);
//                self.render(
//                    self.container,
//                    newIndex
//                );
//            }
//
//            dragWidth = self.dragWidth;
//            deltaPercent = (delta / dragWidth ) * self.dragScreenPercentage;
//            newLeft = startLeft + deltaPercent;

            //self.moveTo(newLeft);
        },

        onDragEnd: function(e) {
            var self,
                deltaX,
                shouldTransition;

            self = this;
            deltaX = 0;

            if (e && e.gesture) {
                deltaX = e.gesture.deltaX;
            }

            if (self.dragEnded) {
                return false;
            }
            self.dragEnded = true;


            shouldTransition = self.shouldTransitionAfterDrag(deltaX);

            if (self.isAnimating) {
                return;
            }

            if (shouldTransition) {
//                alert(shouldTransition + "should trans?");
                self.go(shouldTransition);
            } else {
                //self.snap();
            }

            if (self.debug) console.log("DRAG END");

            self.dragStartTime = false;
            self.unlockWindow();
            e.stopPropagation();
            e.preventDefault();
            return shouldTransition;
        },


        reallyGreaterThanZero: function(index, deltaX) {
            if (index === 0) {
                if (deltaX < 0) {
                    return true;
                }
            } else if (index + 1 > 0 ) {
                return true;
            }
            return false;
        },

        shouldTransitionAfterDrag: function(delta) {
            var self = this,
                now = +new Date(),
                time = now - self.dragStartTime,
                v = delta / time,
                index = self.dataSource.getIndex(),
                total = self.dataSource.getLength(),
                greaterThanZero = self.reallyGreaterThanZero(index, delta),
                lessThanTotal = (index - 1 < total) ? 1 : 0;

            if (self.dragThreshold) {

                if (self.debug) console.log("delta", delta, "dragThreshold", self.dragThreshold, self.dragVelocityThreshold, v);

                if (delta > 0 && delta >= self.dragThreshold || v > self.dragVelocityThreshold) {
                    //console.log("shouldTransitionAfterDrag: Back");
                    self.shouldTransition = -1;

                } else if (delta < 0 && delta <= -self.dragThreshold || v < -self.dragVelocityThreshold) {
                    //if (self.debug) console.log("shouldTransitionAfterDrag: Next");
                    self.shouldTransition = 1;
                }

                if (self.shouldTransition ) {
                    return self.shouldTransition;
                }

                return false;
            }

            self.shouldTransition = false;
            return false;
        },

        getDeltaThreshold: function() {
            var self = this,
                thresh,
                dragWidth = self.$el.width();
            thresh = dragWidth / 2.5;
            self.dragThreshold = thresh;
            self.dragWidth = dragWidth;
        },

        next: function(e, param1) {
            this.go(1);
        },

        back: function() {
            this.go(-1);
        },

        go: function(direction) {
            var self = this,
                index = self.dataSource.getIndex(),
                total = self.dataSource.getLength()-1,
                newIndex = index;

            if (self.isAnimating) {
                return;
            }

            if (direction > 0) {
                newIndex = index + 1;
                if (newIndex > total) {
                    newIndex = 0;
                }
            } else if (direction < 0) {
                newIndex = index - 1;
                if (newIndex < 0) {
                    newIndex = total;
                }
            }

            console.log(newIndex);

            this.showItem(newIndex, direction);
        },

        snap: function(){
            var self = this,
                index = self.dataSource.getIndex();
            this.showItem(index, 0);
        },

        showItem: function(index, direction, skipAnimation) {
            var self = this,
                newLeft = 0,
                container,
                total = self.dataSource.getLength()-1;

            if (self.isAnimating) {
                return;
            }

            if (direction > 0) {
                if (index <= total) {
                    newLeft = -100;
                    container = self.getLast();
                } else {
                    newLeft = 0;
                }
            } else if (direction < 0) {
                //if (index >= 0) {
                    newLeft = 0;
                    if (self.currentX === 0 || self.currentX === -100) {
                        self.moveTo(-100);
                    }
                    if (!self.wasSwapped) {
                        self.swapContainerOrder();
                    }
                    container = self.getFirst();

            } else {
                if (self.lastDelta > 0 && self.wasSwapped) {
                    self.shouldSwapBackAtEnd = true;
                    newLeft = -100;
                } else {
                    newLeft = 0;
                }
            }

            if (self.debug) console.log("showItem: newLeft", newLeft, "wasRendered", self.wasRendered);

            // Display the off-screen container
            if (container && container.length) {
                if (self.debug) console.log("showItem: rendering item");
                self.render(
                    container,
                    index
                );
                self.wasRendered = true;
            }

            self.newLeft = newLeft;
            self.newIndex = index;
            self.newDirection = direction;

            self.dataSource.setIndex(self.newIndex);
        },

        onBeforeImageLoad: function() {
            var self = this;
            self.$el.addClass("teflon--loading");
        },

        onNewImageLoaded: function() {
            var self = this;
            self.$el.removeClass("teflon--loading");
            self.animateTo(self.newLeft, self.newIndex, self.newDirection);
            self.dataSource.setIndex(self.newIndex);
        },

        moveTo: function(offset) {
            var self = this,
                $list = self.$list;
            self.currentX = offset;
        },

        animateTo: function(offset, index, direction) {
            var self = this,
                repaint,
                $list = self.$list,
                transition;

            $(window).trigger("teflon:beforeAnimationStart", [ self.dataSource.getItem(index), $list ]);

            self.isAnimating = true;

            if (direction > 0) {
                transition = Transitions["slideRight"];
            } else {
                transition = Transitions["slideLeft"];
            }

            self.currentX = offset;

            // Attempt to use CSS transitions if supported.
            if (self.useTransform) {

                animationEvent = this.transitionEvent;
                self.getFirst()
                    .one(animationEvent, function() {
                        $.proxy(self.onAnimationComplete(index, direction, $list, transition), self);
                    });

                if (direction > 0) {
                    self.getFirst().addClass(transition.outbound.className);
                    self.getLast().addClass(transition.inbound.className);
                } else {
                    self.getFirst().addClass(transition.inbound.className);
                    self.getLast().addClass(transition.outbound.className);
                }

                // Force a window repaint
                return document.body.offsetLeft;
            }

            // Use jQuery animate() if CSS transitions aren't supported.
            if (direction > 0) {
                var anims = [
                    transition.outbound.fallback(self.getFirst()),
                    transition.inbound.fallback(self.getLast())
                ];

            } else {
                var anims = [
                    transition.inbound.fallback(self.getFirst()),
                    transition.outbound.fallback(self.getLast())
                ];
            }

            $.when.apply($, anims).done(function(){
                $.proxy(self.onAnimationComplete(index, direction, $list, transition), self);
            });


        },

        onAnimationComplete: function(index, direction, $list, transition) {
            var self = this,
                $list = self.$list,
                last = self.dataSource.getLength();

            if (!self.isAnimating) {
                return;
            }

            if (self.useTransform) {
                self.$first
                    .add(self.$last)
                    .removeClass(transition.outbound.className + " " + transition.inbound.className);
            } else {
                self.$first.attr("style","");
                self.$last.attr("style","");
            }

            if (self.debug) console.log('onAnimationComplete:');

            // Reset the `list` position after transition
            self.wasContainerOrderSwapped = false;
            self.$list.css(self.transformProperty, "");

            if (direction > 0 && index !== last || self.shouldSwapBackAtEnd) {
                if (self.debug) console.log('onAnimationComplete: swap list elements');
                self.swapContainerOrder();
                self.shouldSwapBackAtEnd = false;
            }

            // Reset things for the next time around

            self.getLast()
                .html("")
                .attr("data-index", "");
                //.addClass(self.itemLoadingClass);

            $list.off(self.transitionEvent);

            if (self.transitionProperty) {
                $list.css(self.transitionProperty, "");
            }

            self.isAnimating = false;
            self.wasSwapped = false;

            $(window).trigger("teflon:animationComplete", [ self.dataSource.getItem(index), $list ]);

            console.log("indexAtEnd " + self.dataSource.getIndex() + " / " + self.newIndex + " / ");

            return $list;
        },

        getFirst: function() {
            var self = this;
            self.$first = self.$list.find("li").first();
            return self.$first;
        },

        getLast: function() {
            var self = this;
            self.$last = self.$list.find("li").last();
            return self.$last;
        },

        swapContainerOrder: function() {
            var self = this,
                $first = self.getFirst(),
                $last = self.getLast();
            $first.before($last);
            self.wasContainerOrderSwapped = true;
            if (self.debug) console.log("swapContainerOrder: Swapped");

        },

        render: function($container, index) {
            var self = this;

            if (!self.dataSource) {
                return;
            }

            if (!$container) {
                $container = self.$first;
            }

            if (index === undefined) {
                index = self.dataSource.getIndex();
            }

            self.renderItem(
                $container,
                index
            );

            return self;
        },

        // Renders the current item, and optionally the next item too.
        renderItem: function($container, index) {
            var self = this;
            var $item = self.dataSource.getItem(index);
            var $nextItem = self.dataSource.getItem(index+1);
            var $el = self.$el;
            var $list = self.$list;
            var $newEl, $nextEl;
            var currentIndex = self.$el.attr("data-teflon-index") || 0;

            if (currentIndex !== index) {

                $newEl = self.dataSource.render($item);
                $nextEl = self.dataSource.render($nextItem);

                $container
                    .html($newEl);

                self.$el
                    .attr("data-teflon-index", index);

                try {
                    self.$el.trigger("teflon:beforeImageLoad");

                    loadImage($newEl, getImageSize($item), function() {
                        var $parent =  $newEl.parents("."+self.itemLoadingClass);
                        $parent.removeClass(self.itemLoadingClass);
                        self.$el.trigger("teflon:imageLoaded");

                        if (self.preloadNextItems) {
                            var $prevItem = self.dataSource.getItem(index-1);
                            var $prevEl = self.dataSource.render($prevItem);

                            loadImage($nextEl, getImageSize($nextItem), function() {

                            });

                            loadImage($prevEl,  getImageSize($prevItem), function() {

                            });
                        }

                    });

                } catch (e) {

                }

            } else {
                return false;
                // Item already rendered...
            }
           return $item;
        },

        /**
         * Clean up (important for one page appy memory management)
         */
        remove: function() {
            this.$list.off();
            this.$first.off();
            this.$last.off();
            this.$el.off();
            this.onAnimationComplete = null;
            this.$list = null;
            this.$arrowNext = null;
            this.$arrowBack = null;
            this.dataSource = null;
            this.$first = null;
            this.$last = null;
            this.$el = null;
            this.el = null;
            return false;
        }
    };

    return Controller;
})();
