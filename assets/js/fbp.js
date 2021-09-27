var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlidess(n) {
  showSlidess(slideIndex += n);
}

// Thumbnail image controls
function currentSlides(n) {
  showSlidess(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("fbpSlides");
  var dots = document.getElementsByClassName("fbpdemo");
  var captionText = document.getElementById("fbpcaption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  captionText.innerHTML = dots[slideIndex-1].alt;
}