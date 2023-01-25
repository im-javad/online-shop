(function($) {
  "use strict";
  const tabs = document.querySelectorAll('[data-tab-target]')
  const tabContents = document.querySelectorAll('[data-tab-content]')
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = document.querySelector(tab.dataset.tabTarget)
      tabContents.forEach(tabContent => {
        tabContent.classList.remove('active')
      })
      tabs.forEach(tab => {
        tab.classList.remove('active')
      })
      tab.classList.add('active')
      target.classList.add('active')
    })
  });
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".menu-list");
  hamburger.addEventListener("click", mobileMenu);
  function mobileMenu() {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("responsive");
  }
  const navLink = document.querySelectorAll(".nav-link");
  navLink.forEach(n => n.addEventListener("click", closeMenu));
  function closeMenu() {
      hamburger.classList.remove("active");
      navMenu.classList.remove("responsive");
  }
  $(document).ready(function(){
    Chocolat(document.querySelectorAll('.image-link'), {
        imageSize: 'contain',
        loop: true,
    })
    $('#header-wrap').on('click', '.search-toggle', function(e) {
      var selector = $(this).data('selector');
      $(selector).toggleClass('show').find('.search-input').focus();
      $(this).toggleClass('active');
      e.preventDefault();
    });
    $(document).on('click touchstart', function (e){
      if (!$(e.target).is('.search-toggle, .search-toggle *, #header-wrap, #header-wrap *')) {
        $('.search-toggle').removeClass('active');
        $('#header-wrap').removeClass('show');
      }
    });
    $('.main-slider').slick({
        autoplay: false,
        autoplaySpeed: 4000,
        fade: true,
        dots: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
    }); 
    $('.product-grid').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        responsive: [
          {
            breakpoint: 1400,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 999,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 660,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });
    AOS.init({
      duration: 1200,
      once: true,
    })
    jQuery('.stellarnav').stellarNav({
      theme: 'plain',
      closingDelay: 250,
    });
  });
})(jQuery);