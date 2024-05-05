// Desktop Nav Bar
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
      document.getElementById('navbar_top').classList.add('fixed-top');
      // add padding top to show content behind navbar
      navbar_height = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
    } else {
      document.getElementById('navbar_top').classList.remove('fixed-top');
      // remove padding top from body
      document.body.style.paddingTop = '0';
    }
  });
});

// Mobile Nav Bar
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
      document.getElementById('mobile_navbar_top').classList.add('fixed-top');
      // add padding top to show content behind navbar
      navbar_height = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
    } else {
      document.getElementById('mobile_navbar_top').classList.remove('fixed-top');
      // remove padding top from body
      document.body.style.paddingTop = '0';
    }
  });
});

// back-to-top

$(document).ready(function () {
  // hide on top position
  $('.back-to-top').hide()

  // Show or hide the "up" button based on scroll position
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) { // You can adjust the scroll position threshold as needed
      $('.back-to-top').fadeIn();
    } else {
      $('.back-to-top').fadeOut();
    }
  });

  // Scroll to top when the button is clicked
  $('.back-to-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 800);
    return false;
  });
});


// Categories Part

$('.categories').owlCarousel({
  loop: true,
  dots: false,
  autoplay: true,
  nav: false,
  margin: 0,
  autoplayTimeout: 3000,
  responsiveClass: true,
  responsive: {
    0: {
      items: 4,
    },
    600: {
      items: 6,
    },
    1000: {
      items: 6,
    },
    1200: {
      items: 6,
    },
    1600: {
      items: 7,
    }
  }
})

// Products Part

jQuery(".products").owlCarousel({
  autoplay: true,
  rewind: true,
  margin: 5,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  dots: false,
  nav: true,
  responsive: {
    0: {
      items: 2
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});

// Featured Brands Part

$('.featured-brands').owlCarousel({
  loop: true,
  dots: false,
  autoplay: true,
  nav: false,
  margin: 10,
  autoplayTimeout: 5000,
  responsiveClass: true,
  responsive: {
    0: {
      items: 2,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
    1200: {
      items: 4,
    },
    1600: {
      items: 5,
    }
  }
})


// Video Player Part
$(function() {
  $('.popup-youtube, .popup-vimeo').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
  });
});


// Pagination Part

document.addEventListener("DOMContentLoaded", function () {
  const pages = document.querySelectorAll(".page");
  const btns = document.querySelectorAll(".num__btn");
  const btnsContainer = document.querySelector(".num__btns");
  const indicator = document.querySelector(".active__indicator");
  const prevButton = document.getElementById("prevPage");
  const nextButton = document.getElementById("nextPage");
  let currentPage = 0;

  function showPage(pageNumber) {
      pages.forEach((page, index) => {
          if (index === pageNumber) {
              page.style.display = "block";
          } else {
              page.style.display = "none";
          }
      });

      btns.forEach((btn, index) => {
          if (index === pageNumber) {
              setTimeout(() => btn.classList.add('num__btn--active'), 250);
          } else {
              setTimeout(() => btn.classList.remove('num__btn--active'), 250);
          }
      });

      indicator.style.transform = `translateX(${pageNumber * 3}rem)`
  }

  function updateButtons() {
      prevButton.disabled = currentPage === 0;
      nextButton.disabled = currentPage === pages.length - 1;
  }

  prevButton.addEventListener("click", function () {
      if (currentPage > 0) {
          currentPage--;
          showPage(currentPage);
          updateButtons();
      }
  });

  nextButton.addEventListener("click", function () {
console.log(currentPage);
console.log(pages.length);
      if (currentPage < pages.length - 1) {
          currentPage++;
          showPage(currentPage);
          updateButtons();
      }
  });

  btnsContainer.addEventListener("click", function(e) {
      const clicked = e.target;
      if(!clicked.classList.contains("num__btn")) return;
      const i = Number(clicked.textContent) - 1;
      currentPage = i;
      showPage(i);
      updateButtons();
  })

  showPage(currentPage);
  updateButtons();
});


// 

var buttonPlus  = $(".qty-btn-plus");
var buttonMinus = $(".qty-btn-minus");

var incrementPlus = buttonPlus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  $n.val(Number($n.val())+1 );
});

var incrementMinus = buttonMinus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  var amount = Number($n.val());
  if (amount > 0) {
    $n.val(amount-1);
  }
});