import $ from 'jquery';

class SlickSlider {
  constructor() {
    this.els = $(".slick-slider");
    this.initSlickSlider();

  }
  
  initSlickSlider() {
    $('.slick-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });
  } 
}

export default SlickSlider;