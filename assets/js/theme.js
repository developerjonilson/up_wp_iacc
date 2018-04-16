jQuery( document ).ready( function ( $ ) {
  $('.main-slide-show').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    speed: 3000,
    autoplay: true,
    autoplaySpeed: 3000
  });

  $('.slide-show-about').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    speed: 6000,
    autoplay: true,
    autoplaySpeed: 6000
  });

  $('.partners-slide').slick({
    variableWidth: true,
    arrows: false,
    dots: true,
    speed: 3000,
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    autoplaySpeed: 3000,
    autoplay: true,

    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
          arrows: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          centerMode: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          arrows: false,
          dots: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          arrows: false,
          dots: false
        }
      }
    ]
  });
} );
