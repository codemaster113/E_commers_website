let Navbar = document.querySelector('.navbar');
let FaBars = document.querySelector('.fa-bars');



FaBars.onclick = () =>{
    Navbar.classList.toggle('active')
}

var swiper = new Swiper(".row", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop:true,
});


var swiper = new Swiper(".review-slider", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      "0": {
        slidesPerView: 1,
        autoplay:{
            delay:700,
            disableOnInteraction:false,
        },
      },
      "768": {
        slidesPerView: 2,
        
      },
      "1020": {
        slidesPerView: 3,
        
      },
    },
  });
  
