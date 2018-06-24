// sidebar handlers

const bars    = document.querySelector('#bars');
const overlay = document.querySelector('.overlay-sidebar');
const body    = document.querySelector('body');
const sidebar = document.querySelector('#sidebar');
const close   = document.querySelector('#close-btn-sidenav');
const smallP  = document.querySelector('.small-particles');
const tinyP   = document.querySelector('.tiny-particles');
const heading = document.querySelector('.heading-parallax');
const mainSection = document.querySelector('#home');

if(document.body.contains(mainSection)) {
  heading.classList.add('slideDown');

  setTimeout(()=> {
    tinyP.classList.add('fadeInSlow');
  }, 1000);

  setTimeout(()=> {
    smallP.classList.add('fadeInSlow');
  }, 2000);
} 

// display sidebar and overlay

bars.addEventListener('click', (e)=> {

  // overlay fadeIn
  overlay.classList.add('fadeIn');

  bodyAddOverflow();

  // sidebar slide from right
  sidebar.classList.add('moveRight');

  e.preventDefault();
});

// close sidebar and overlay

close.addEventListener('click', (e)=> {

  overlay.classList.remove('fadeIn');

  bodyRemoveOverflow();

  sidebar.classList.remove('moveRight');

  e.preventDefault();
}); 

// parallax 

window.addEventListener('scroll', ()=>{
  let scroll = (this.pageYOffset);
  smallP.style.transform = "translate(0px, "+scroll/2+"px)";
  tinyP.style.transform = "translate(0px, "+scroll/4+"px)";
});

// FUNCTIONS

function bodyAddOverflow(){
  body.classList.add('overflow-hidden');
}

function bodyRemoveOverflow(){
  body.classList.remove('overflow-hidden');
}
