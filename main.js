const hamburger = document.querySelector('.hamburger');
const mobile_menu_items = document.querySelectorAll('.m_m_item');
const mobile_menu = document.querySelector('.mobile-menu');

function toggleMenu ()
{
    hamburger.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-open');
}

hamburger.addEventListener('click', function() {
    toggleMenu();
});

for(var i = 0; i < mobile_menu_items.length; i++)
{
    mobile_menu_items[i].addEventListener('click', function(){
        toggleMenu();
    });
}

$(document).ready(function () {
    for (var i = 1; i <= $(".slider__slide").length; i++) {
      $(".slider__indicators").append(
        '<div class="slider__indicator" data-slide="' + i + '"></div>'
      );
    }
    setTimeout(function () {
      $(".slider__wrap").addClass("slider__wrap--hacked");
    }, 1000);
  });
  
  function goToSlide(number) {
    $(".slider__slide").removeClass("slider__slide--active");
    $(".slider__slide[data-slide=" + number + "]").addClass(
      "slider__slide--active"
    );
  }

  setInterval(function() {
    var currentSlide = Number($(".slider__slide--active").data("slide"));
    var totalSlides = $(".slider__slide").length;
    currentSlide++;
    if (currentSlide > totalSlides) {
      currentSlide = 1;
    }
    goToSlide(currentSlide);
  }, 8000);
  
  $(".slider__next, .go-to-next").on("click", function () {
    var currentSlide = Number($(".slider__slide--active").data("slide"));
    var totalSlides = $(".slider__slide").length;
    currentSlide++;
    if (currentSlide > totalSlides) {
      currentSlide = 1;
    }
    goToSlide(currentSlide);
  });
  
    $(".slider__next, .go-to-previous").on("click", function () {
    var currentSlide = Number($(".slider__slide--active").data("slide"));
    var totalSlides = $(".slider__slide").length;
    currentSlide--;
    if (currentSlide < 1) {
      currentSlide = totalSlides;
    }
    goToSlide(currentSlide);
  });