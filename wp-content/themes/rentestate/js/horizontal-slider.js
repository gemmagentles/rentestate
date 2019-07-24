var articleHeroSlider = document.getElementsByClassName('horizontal-slider__slides');
if (articleHeroSlider.length > 0) {
  // elements with class "horizontal-slider__slides" exist
  var slider = tns({
    container: ".horizontal-slider__slides",
    autoplay: false,
    controls: 'false',
    nav: 'true',
    navPosition: 'bottom',
    controlsPosition: 'bottom',
    items: 1,
    gutter: 40,
    center: true,
    loop: false,
    swipeAngle: false,
    speed: 400,
    responsive: {
      768: {
        items: 2
      }
    }
  });
}
