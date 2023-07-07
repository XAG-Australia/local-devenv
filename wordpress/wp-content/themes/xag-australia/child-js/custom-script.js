jQuery(function () {
    jQuery(".testimonials-content").owlCarousel({
        dots:false,
        nav:false,
        loop: true,
        slideSpeed: 500,
        autoPlay: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1,
            },
            800:{
                items:1,
            },
            1500:{
                items:1,
            }
        }
    });
});

/**
 * Current version.
 * @return {string} major.minor.patch.
 */
function version() {};

/**
 * Available transitions.
 * @return {Array} of transitions.
 */
 function transitions() {};

/**
 * Creates and returns a Slidr.
 * Calling create on the same element twice returns the already instantiated Slidr.
 * @param {string} id The element id to turn into a Slidr.
 * @param {Object=} opt_settings Settings to apply.
 */
 function create(id, opt_settings) {};

 /**
 * Start the Slidr!
 * Automatically finds slides to create if nothing was added prior to calling start().
 * @param {string} opt_start `data-slidr` id to start on.
 * @return {this}
 */
 function start(opt_start) {};

/**
 * Check whether we can slide.
 * @param {string} next a direction ('up', 'down', 'left', 'right') or a `data-slidr` id.
 * @return {boolean}
 */
 function canSlide(next) {};

/**
 * Slide!
 * @param {string} next a direction ('up', 'down', 'left', 'right') or a `data-slidr` id.
 * @return {this}
 */
 function slide(next) {};

/**
 * Adds a set of slides.
 * @param {string} direction `horizontal || h` or `vertical || v`.
 * @param {Array} ids A list of `data-slidr` id's to add to Slidr. Slides must be direct children of the Slidr.
 * @param {string=} opt_transition The transition to apply between the slides, or uses the default.
 * @param {boolean=} opt_overwrite Whether to overwrite existing slide mappings/transitions if conflicts occur.
 * @return {this}
 */
 function add(direction, ids, opt_transition, opt_overwrite) {};

/**
 * Automatically advance to the next slide after a certain timeout. Calls start() if not already called.
 * @param {int=} opt_msec The number of millis between each slide transition. Defaults to 5000 (5 seconds).
 * @param {string=} opt_direction 'up', 'down', 'left', or 'right'. Defaults to 'right'.
 * @param {string=} opt_start The `data-slidr` id to start at (only works if auto is called to start the Slidr).
 * @return {this}
 */
 function auto(opt_msec, opt_direction, opt_start) {};

/**
 * Stop auto transition if it's turned on.
 * @return {this}
 */
 function stop() {};

/**
 * Set custom animation timings.
 * @param {string|Object} transition Either a transition name (i.e. 'cube'), or a {'transition': 'timing'} object.
 * @param {string=} opt_timing The new animation timing (i.e "0.5s ease-in"). Not required if transition is an object.
 * @return {this}
 */
 function timing(transition, opt_timing) {};

/**
 * Toggle breadcrumbs.
 * @return {this}
 */
 function breadcrumbs() {};

/**
 * Toggle controls.
 * @param {string=} opt_scheme Toggle on/off if not present, else change layout. 'border', `corner` or `none`.
 * @return {this}
 */
 function controls(opt_scheme) {};