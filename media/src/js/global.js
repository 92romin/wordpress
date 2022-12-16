import '../css/build.scss';

import { Setup } from './setup';
import { Animations } from './animations';
import { Components } from './components';
import { Partials } from './partials';

(function ($) {
    'use strict';

    const setup = new Setup();
    new Animations();
    new Components();
    new Partials();

    // For Locomotive Scroll
    // setup.scrollTriggerRefresh();

})(jQuery);