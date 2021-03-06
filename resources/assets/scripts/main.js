// import external dependencies
import 'jquery';
import 'fancybox';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
// import AOS from 'aos';

import hamburger from './components/hamburger';
// import hero from './components/hero';
import tabs from './components/tabs';
//import TabsSlider from './components/tabs-slider';
//import realizations from './components/realizations';
import gmap from './components/gmap';
import cats from './components/cats';
import checkbox from './components/checkbox';
import header from './components/header';
//import slider from './components/slider';
import newsslider from './components/news-slider';
import videoslider from './components/video-slider';
import preloader from './components/preloader';
import raports from './components/raports';
//import countDate from './components/count-date';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
$(document).ready(function () {
  preloader.init();
  routes.loadEvents();
  hamburger.init();
 // hero.init();
  //hero.resize();
  tabs.init();
  //TabsSlider.init();
  //realizations.init();
  gmap.init();
  cats.init();
  //slider.init();
  checkbox.init();
  header.init();
  raports.init();
  //countDate.init();


  // window.addEventListener('scroll', () => {
  //   skrollr.init();
  // });

  if($('.news-carousel').length) {
    newsslider.init();
  }


  if($('.video-carousel').length) {
    videoslider.init();
  }
});
