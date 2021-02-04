var Flickity = require('flickity');

// deklarowanie obiektu
const newsslider = {
  init() {
    this.newsslider = new Flickity('.news-carousel', {
      prevNextButtons: true,
      pageDots: false,
      wrapAround: true,
      autoPlay: false,
      cellAlign: 'left',
    });
     this.resize();
  },

  resize() {
    window.onload = () => {
      this.newsslider.resize();
    };
  },
};

export default newsslider;
