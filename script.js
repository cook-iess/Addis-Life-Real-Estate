const burger = document.querySelector("#burger");
const nav = document.querySelector("#nav");
const navs = document.querySelectorAll("nav");
let lastScrollY;
let lastScrollY2;

// nav scroll
window.addEventListener("scroll", () => {
  if (window.scrollY < lastScrollY) {
    navs.forEach((nav) => {
      nav.classList.add("fixed");
      console.log(nav);
    });
  }
  lastScrollY = window.scrollY;
});
window.addEventListener("scroll", () => {
  if (window.scrollY > lastScrollY2) {
    navs.forEach((nav) => {
      if (nav.classList.contains("fixed")) nav.classList.remove("fixed");

      console.log(nav);
    });
  }
  lastScrollY2 = window.scrollY;
});
//nav scroll ends


// Image slider code

const initSlider = () => {
  const imageList = document.querySelector(".slider-wrapper .image-list");
  const slideButtons = document.querySelectorAll(
    ".slider-wrapper .slide-button"
  );
  const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
  const sliderScrollbar = document.querySelector(
    ".slider-container .slider-scrollbar"
  );
  const scrollbarThumb = document.querySelector(
    ".slider-container .slider-scrollbar .scrollbar-thumb"
  );

  // handle scrollbar thumb drag
  scrollbarThumb.addEventListener("mousedown", (e) => {
    const startX = e.clientX;
    const thumbPosition = scrollbarThumb.offsetLeft;

    //update thumb position on mouse move
    const handleMouseMove = (e) => {
      const deltaX = e.clientX - startX;
      const newThumbPostion = thumbPosition + deltaX;
      const maxThumbPosition =
        sliderScrollbar.getBoundingClientRect().width -
        scrollbarThumb.offsetWidth;
      const boundedPosition = Math.max(
        0,
        Math.min(maxThumbPosition, newThumbPostion)
      );
      const scrollPostion =
        (boundedPosition / maxThumbPosition) * maxScrollLeft;
      scrollbarThumb.style.left = `${boundedPosition}px`;
      imageList.scrollLeft = scrollPostion;
    };

    const handleMouseUp = () => {
      document.removeEventListener("mousemove", handleMouseMove);
      document.removeEventListener("mouseup", handleMouseUp);
    };
    //add event listeners for drag interactions
    document.addEventListener("mousemove", handleMouseMove);
    document.addEventListener("mouseup", handleMouseUp);
  });

  // slide images according to the slide button clicks
  slideButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const direction = button.id === "prev-slide" ? -1 : 1;
      const scrollAmount = imageList.clientWidth * direction;
      imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
    });
  });
  const handleSlideButtons = () => {
    slideButtons[0].style.display =
      imageList.scrollLeft <= 0 ? "none" : "block";
    slideButtons[1].style.display =
      imageList.scrollLeft >= maxScrollLeft ? "none" : "block";
  };
  // update scrollbar thumb position based on image scroll
  const updateScrollThumbPosition = () => {
    const scrollPostion = imageList.scrollLeft;
    const thumbPosition =
      (scrollPostion / maxScrollLeft) *
      (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
    scrollbarThumb.style.left = `${thumbPosition}px`;
  };
  imageList.addEventListener("scroll", () => {
    handleSlideButtons();
    updateScrollThumbPosition();
  });
};

window.addEventListener("load", initSlider);
// Image slider code ends here!!

// // Image slider toggle
const interiorBtn = document.querySelector("#interior-btn");
const sliderContainer = document.querySelector("#slider-container");

interiorBtn.addEventListener("click", () => {
  sliderContainer.style.display = "block";
});
//## counter code
// Get a reference to the counter element
const counterElement = document.getElementById("counter");

// Initialize the counter value
let count = 0;

// Function to update the counter
function updateCounter() {
  count++;
  counterElement.textContent = count;
}

// Listen for the scroll event
window.addEventListener("scroll", () => {
  const scrollY = window.scrollY;
  const windowHeight = window.innerHeight;

  // Adjust this value to control when the counter starts incrementing
  if (scrollY > windowHeight / 2) {
    updateCounter();
  }
});
