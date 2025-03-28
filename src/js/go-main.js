
// HEader fixed

  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }
  });

setTimeout(
 function() {
    //get the images
    let images = document.querySelectorAll("img"); 
     
    //loop through all images
    for (let i = 0; i < images.length; i++) {
        //add alt text if missing (but title is present)
        if (!images[i].alt) {
            images[i].alt = 'test';
		 images[i].setAttribute('alt', 'Dowlegal Adwokaci');
        }
    }
}, 1000);
let lastScrollY = window.scrollY;
let isFixed = false;

function handleScroll() {

    const nav = document.querySelector(".h-nav");
     const mainWrap = document.querySelector('#main');
    const navHeight = document.querySelector(".h-middle").offsetHeight;
    const previousElement = nav.previousElementSibling;

    const navTop = nav.getBoundingClientRect().top;
    const previousElementBottom = previousElement ? previousElement.getBoundingClientRect().bottom : 0;
    if (navTop <= 0 && previousElementBottom <= 0 && !isFixed) {
        isFixed = true;
        // mainWrap.style.marginTop = `${navHeight}px`;
        nav.classList.add("fixed");
    } else if (previousElementBottom > 0 && isFixed) {
        isFixed = false;
        nav.classList.remove("fixed");
        // mainWrap.style.marginTop = "0px";
    }
  }
    lastScrollY = window.scrollY;


let debounceTimeout;
document.addEventListener("scroll", function () {
    clearTimeout(debounceTimeout);
    debounceTimeout = setTimeout(handleScroll, 10); // Dodajemy opóźnienie 50ms
});


const calaps = document.querySelectorAll(".calaps");
for (let i = 0; i < calaps.length; i++) {
  calaps[i].querySelector(".calaps__opener").addEventListener("click", function () {
    calaps[i].classList.toggle("active");
  });
}


if (jQuery(window).width() > 500) {
  jQuery('.go-parallex').paroller({
      factor: -0.3, // multiplier for scrolling speed and offset, +- values for direction control  
      // factorLg: 0.4, // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
      type: 'foreground', // background, foreground  
      direction: 'vertical', // vertical, horizontal  
      transition: 'translate 0.1s ease' // CSS transition, added on elements where type:'foreground' 
  });
}

document.addEventListener('DOMContentLoaded', function () {
  const bounce = document.querySelector('.bounce');
  const close = document.querySelector('.close');
  const wrap = document.querySelector('.sticker');

  if (bounce && close && wrap) {
      bounce.addEventListener('click', function () {
          wrap.classList.add('active');
          bounce.classList.add('active');
      });

      close.addEventListener('click', function () {
          wrap.classList.remove('active');
          bounce.classList.remove('active');
      });
  }
});

document.addEventListener('DOMContentLoaded', function() {
  const toggle = document.getElementById('consent-toggle');
  const more = document.getElementById('consent-more');

  if (toggle && more) {
      toggle.addEventListener('click', function(e) {
          e.preventDefault();
          const isHidden = more.style.display === 'none';
          more.style.display = isHidden ? 'inline' : 'none';
          toggle.textContent = isHidden ? 'Zwiń' : 'Rozwiń';
      });
  }

  const toggleSticky = document.getElementById('consent-sticky');
  const moreSticky = document.getElementById('consent-more-sticky');

  if (toggleSticky && moreSticky && more) {
      toggleSticky.addEventListener('click', function(e) {
          e.preventDefault();
          const isHidden = more.style.display === 'none';
          moreSticky.style.display = isHidden ? 'inline' : 'none';
          toggleSticky.textContent = isHidden ? 'Zwiń' : 'Rozwiń';
      });
  }
});
