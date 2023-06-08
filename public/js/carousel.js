let slideIndex = 1;
showSlide(slideIndex);

function changeSlide(n) {
  showSlide(slideIndex += n);
}

function showSlide(n) {
  const slides = document.getElementsByClassName("slide");
  
  // Wrap around to the first slide if at the end
  if (n > slides.length) {
    slideIndex = 1;
  } else if (n < 1) {
    slideIndex = slides.length;
  }
  
  // Hide all slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  // Display the current slide
  slides[slideIndex - 1].style.display = "block";
}
