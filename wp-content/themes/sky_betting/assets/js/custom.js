// sticky header

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    document.getElementById("header_area").classList.add("sticky")
  } else {
    document.getElementById("header_area").classList.remove("sticky")
  }
}

// nav
const body = document.querySelector('body');
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.navbar-area-menu');
const navLinks = document.querySelectorAll('.site-navbar a');

allEventListners();
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  // navLinks.forEach(elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  body.classList.toggle('no-scroll');
  navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
  if (navMenu.classList.contains('open')) {
    navToggler.click();
  }
}



jQuery(document).ready(function () {

  // nav
  $(".site-navbar li").has("ul").addClass("li-sub-menu-wrap");

  $('.site-navbar li').click(function () {
    $('.site-navbar li').not(this).find('> ul').slideUp("slow");
    $(this).find('> ul').slideToggle("slow");
    $('.site-navbar li').not(this).removeClass('open-submenu')
    $(this).toggleClass('open-submenu');
  });

  $('.nav-toggler').click(function () {
    $('.site-navbar li ul').removeClass('open-submenu').hide();
    $('.site-navbar li').removeClass('open-submenu');
  });

});





// Slick SLider JS

$('#seclicenseSlider').slick({
  slidesToShow: 1, slidesToScroll: 1, infinite: true, loop: true, dots: true, arrows: false, autoplay: true, autoplaySpeed: 5000,
  prevArrow: $(".seclicenseSliderPrev"),
  nextArrow: $(".seclicenseSliderNext"),
  responsive: [
    {
      breakpoint: 1300,
      settings: { slidesToShow: 1, }
    },
    {
      breakpoint: 992,
      settings: { slidesToShow: 1, }
    },
    {
      breakpoint: 768,
      settings: { slidesToShow: 1, }
    },
    {
      breakpoint: 480,
      settings: { slidesToShow: 1, }
    }
  ]

});



// Blog Details Slider JS

$('#secBlogDetailsSlider').slick({
  slidesToShow: 3, slidesToScroll: 1, infinite: true, loop: true, dots: false, arrows: false, autoplay: true, autoplaySpeed: 4000,
  prevArrow: $(".secBlogDetailsSliderPrev"),
  nextArrow: $(".secBlogDetailsSliderNext"),
  responsive: [
    {
      breakpoint: 1300,
      settings: { slidesToShow: 3, }
    },
    {
      breakpoint: 992,
      settings: { slidesToShow: 2, }
    },
    {
      breakpoint: 768,
      settings: { slidesToShow: 2, }
    },
    {
      breakpoint: 576,
      settings: { slidesToShow: 1, }
    }
  ]

});




// faq
$('.faq_sec summary').on('click', function () {
  $('.faq_sec summary').not(this).parent('details').removeAttr('open');
});