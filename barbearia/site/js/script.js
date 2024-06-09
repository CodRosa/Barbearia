document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector('.carousel');
    const container = carousel.querySelector('.carousel-container');
    const slides = container.querySelectorAll('.slide');
    let index = 0;
  
    function updateSlide() {
      container.style.transform = `translateX(-${index * 100}%)`;
    }
  
    function goToSlide(idx) {
      index = idx;
      updateSlide();
    }
  });