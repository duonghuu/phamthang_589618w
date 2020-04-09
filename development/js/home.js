$('.dm-cap-main').on({
      beforeChange: function(event, slick, currentSlide, nextSlide) {
          myLazyLoad.update();
      }
  }).slick({
      lazyLoad: 'ondemand',
      infinite: true,
      accessibility: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 3000,
      speed: 1000,
      arrows: true,
      centerMode: false,
      dots: false,
      draggable: true,
      responsive: [{
          breakpoint: 830,
          settings: {
              slidesToShow: 3
          }
      },{
          breakpoint: 500,
          settings: {
              slidesToShow: 2
          }
      },{
          breakpoint: 330,
          settings: {
              slidesToShow: 1
          }
      }]
  });
  $('.duan-datnen-main').slick({lazyLoad: 'ondemand',
    infinite: true,
    accessibility:false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay:false,
    autoplaySpeed:3000,
    speed:1000,
    arrows:true,
    centerMode:false,
    dots:false,
    draggable:true,
  });
  $('.tinnb-main').on({
        beforeChange: function(event, slick, currentSlide, nextSlide) {
            myLazyLoad.update();
        }
    }).slick({
        lazyLoad: 'ondemand',
        infinite: true,
        accessibility: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        centerMode: false,
        dots: false,
        draggable: true,
        responsive: [{
            breakpoint: 830,
            settings: {
                slidesToShow: 2
            }
        },{
            breakpoint: 500,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    $('.camnhan-main').on({
          beforeChange: function(event, slick, currentSlide, nextSlide) {
              myLazyLoad.update();
          }
      }).slick({
          lazyLoad: 'ondemand',
          infinite: true,
          accessibility: false,
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: false,
          autoplaySpeed: 3000,
          speed: 1000,
          arrows: false,
          centerMode: false,
          dots: true,
          draggable: true,
          responsive: [{
              breakpoint: 430,
              settings: {
                  slidesToShow: 1
              }
          }
          ]
      });
  
