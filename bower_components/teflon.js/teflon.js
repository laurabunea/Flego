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
