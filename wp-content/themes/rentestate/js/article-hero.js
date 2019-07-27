var articleHeroSlider = document.getElementsByClassName('article-hero__slides');
if (articleHeroSlider.length > 0) {
  // elements with class "article-hero__slides" exist
  var slider = tns({
    container: '.article-hero__slides',
    items: 1,
    center: true,
    loop: true,
    swipeAngle: false,
    speed: 1300,
    autoplay: true,
    controls: 'false',
    nav: 'true',
    navPosition: 'bottom'
  });
}
