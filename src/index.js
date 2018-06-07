require("../src/app.scss");

/* ===========================================================================
 Foundation
 =========================================================================== */

import 'foundation-sites'

import 'foundation-sites/js/foundation.core';
import 'foundation-sites/js/foundation.accordion';
import 'foundation-sites/js/foundation.sticky';
import 'foundation-sites/js/foundation.util.mediaQuery';
import 'foundation-sites/js/foundation.offcanvas.js';
import 'foundation-sites/js/foundation.responsiveMenu';
import 'foundation-sites/js/foundation.util.triggers';
import 'foundation-sites/js/foundation.util.keyboard';
import 'foundation-sites/js/foundation.util.box';
import 'foundation-sites/js/foundation.util.nest';
import 'foundation-sites/js/foundation.abide';
import 'foundation-sites/js/foundation.util.motion';
import 'foundation-sites/js/foundation.toggler';
import 'foundation-sites/js/foundation.drilldown';



// Require
 import $ from 'jquery';

$(document).foundation();

$(function () {
    console.log('ready');
});