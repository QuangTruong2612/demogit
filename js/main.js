window.addEventListener("load", () => {
  /*
  Page loader
  ----*/
  document.querySelector(".js-page-loader").classList.add("fade-out");
  setTimeout(() => {
  document.querySelector(".js-page-loader").style.display= "none";
  }, 50);

  });



  function headerMenu() {
    const menu = document.querySelector(".js-header-menu"),
      backdrop = document.querySelector(".js-header-backdrop"),
      menuCollapseBreakpoint = 991;
  
   //mở nav bar ra
      function toggleMenu() {
        menu.classList.toggle("open");
        backdrop.classList.toggle("active");
        document.body.classList.toggle("overflow-hidden");
      }
    document.querySelectorAll(".js-header-menu-toggler").forEach((item) => {
      item.addEventListener("click", toggleMenu);
    });
  
  
    backdrop.addEventListener("click", toggleMenu);
  
  
  
    //remove active class
    function collapse(){
      menu.querySelector(".active .js-sub-menu").removeAttribute("style");
      menu.querySelector(".active").classList.remove("active");
    }
  
    menu.addEventListener("click", (event) => {
      const { target } = event;
      if (target.classList.contains("js-toggle-sub-menu") &&
        window.innerWidth <= menuCollapseBreakpoint) {
        // prevent default anchor click behavior
        event.preventDefault();
        //click lần 2, thì thu gọn cái đang mở
  
        if(target.parentElement.classList.contains("active")){
          collapse();
          return;
        }  
  
        // thu gọn cái menu item khác
        if(menu.querySelector(".active")){
          collapse();
        }
        // mở cái menu item mới ra
        target.parentElement.classList.add("active");
        target.nextElementSibling.style.maxHeight =
        target.nextElementSibling.scrollHeight + "px";
      }
    });
  
  }
  
  headerMenu();
  


/*--------------------------- 
24. =testimonials slide
---------------------------*/
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
  changeImage(n); // Thêm hàm changeImage để thay đổi hình ảnh
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
function changeImage(n) {
  let image = document.querySelector(".js-testimonial-img");
  image.src = `img/testimonial/${n}.png`; // Thay đổi đường dẫn hình ảnh tương ứng
}









