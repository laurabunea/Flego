// Fix the console in IE8.
if (typeof console === 'undefined') {console={}; console.log = function(){};}

/**
* Site JavaScript template.
* ------------------------------------------------------------------------
*/
var FP = (function(window, document) {
    "use strict";

    var site = {
    init: function() {
        
    }
/* Add your site methods here */
};

/**
* Return public methods that you want other objects to be able to access
*/
return {
    init: function() {
    site.init.call(site);
    }
};
})(window, document);

/**
* Bind initialize methods
* ------------------------------------------------------------------------
*/
(function(window, document, siteObject){
    if(window.jQuery || window.Zepto) {
    $(document).ready(function() {
    siteObject.init();
    });
} else if ("addEventListener" in window) {
                window.addEventListener("load", function() {
                        siteObject.init();
                });
        } else {
                window.onload = function() {
                        siteObject.init();
                };
        }
})(window, document, FP);