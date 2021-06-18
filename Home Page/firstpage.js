// function SubmitFunction() {
//     const name = document.getElementById('name').value ;
//     const name = document.getElementById('email').value ;


// }


window.addEventListener('load', () => {

   
    let div = document.createElement('div');
    div.classList.add('preloader');
    
      document.body.appendChild(div)
     

      document.getElementById("overlay").style.display = "block";
      document.getElementById("spinner").style.display = "block";


      setTimeout(function(){
             document.getElementById("overlay").style.display = "none"; 
             document.getElementById("spinner").style.display = "none";
           }, 4000);
           convertHtmlToText(str)
           {
              str = str.toString();
             return str.replace(/<[^>]*(>|$)|&nbsp;|&zwnj;|&raquo;|&laquo;|&gt;/g, ' ');
           }
      
  
   
  })
  var timeOutValue = 100;      
  var setTimeToHide_ID, mItem;

  function showmenu(obj) {
      if (mItem) mItem.style.display = 'none';

      mItem = document.getElementById(obj);
      mItem.style.display = 'block';
  }
  // SET TIME TO HIDE MENU LIST.
  function setTimeToHide() { 
      setTimeToHide_ID = window.setTimeout(HideMenu, timeOutValue); 
  }

  function HideMenu() { 
      if (mItem) mItem.style.display = 'none'; 
  }       // HIDE THE MENU LIST AFTER A SPECIFIED TIME.

  function ReSetTimer() {
      if (setTimeToHide_ID) {
          window.clearTimeout(setTimeToHide_ID);
          setTimeToHide_ID = 0;
      }
  };
  
//   swiperJS // 
var swiper1 = new Swiper(".mySwiper-one", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper2 = new Swiper('.mySwiper-two', {
  spaceBetween: 0,
  
  slidesPerView: '5',
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  centeredSlides: false,

  
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  }, })
  // $(document).ready(function(){
  //   // Add smooth scrolling to all links
  //   $("a").on('click', function(event) {
  
  //     // Make sure this.hash has a value before overriding default behavior
  //     if (this.hash !== "") {
  //       // Prevent default anchor click behavior
  //       event.preventDefault();
  
  //       // Store hash
  //       var hash = this.hash;
  
  //       // Using jQuery's animate() method to add smooth page scroll
  //       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
  //       $('html, body').animate({
  //         scrollTop: $(hash).offset().top
  //       }, 800, function(){
     
  //         // Add hash (#) to URL when done scrolling (default click behavior)
  //         window.location.hash = hash;
  //       });
  //     } // End if
  //   });
  // });
  const btnScrolltop = document.querySelector("#btn-scrolltop");
  btnScrolltop.addEventListener("click",function() {
    window.scrollTo({
      top:0,
      left:0,
      behavior: "smooth"

    });

  });

  const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');

// Display Mobile Menu
  const mobileMenu = () => {
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
};

menu.addEventListener('click', mobileMenu);