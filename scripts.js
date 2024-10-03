var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

// Automatic slideshow
var slideTimer = setInterval(function() {
  plusSlides(1);
}, 5000);

// Pause slideshow on hover
var slider = document.querySelector('.slider');
slider.addEventListener('mouseover', function() {
  clearInterval(slideTimer);
});

slider.addEventListener('mouseout', function() {
  slideTimer = setInterval(function() {
    plusSlides(1);
  }, 5000);
});

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  var modal = document.getElementById("modal");
  var modalImg = document.getElementById("modal-image");
  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
  
  // Open modal on click
  slides[slideIndex-1].addEventListener('click', function() {
    modal.style.display = "block";
    modalImg.src = this.src;
  });
  
  // Close modal on click
  var closeBtn = document.getElementsByClassName("close")[0];
  
  closeBtn.onclick = function() {
    modal.style.display = "none";
  }
  
  // Close modal on outside click
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}
