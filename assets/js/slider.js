var currentSlide = 0;
showSlide(currentSlide);

function nextSlide() {
  currentSlide++;
  if (currentSlide >= document.getElementsByClassName("slider").length) {
    currentSlide = 0;
  }
  showSlide(currentSlide);
}

function prevSlide() {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = document.getElementsByClassName("slider").length - 1;
  }
  showSlide(currentSlide);
}

function showSlide(index) {
  var slides = document.getElementsByClassName("slider");
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[index].style.display = "block";
}
