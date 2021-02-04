var Flickity = require('flickity');

// deklarowanie obiektu
const videoslider = {
  init() {
    this.videoslider = new Flickity('.video-carousel', {
      prevNextButtons: true,
      pageDots: false,
      wrapAround: true,
      autoPlay: false,
      draggable: false,
      cellAlign: 'left',
      adaptiveHeight: true,
    });

  },

  resize() {
    window.onload = () => {
      this.videoslider.resize();
    };
  },
};

export default videoslider;
