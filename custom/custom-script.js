
/* ! cover header */
let tl = gsap.timeline();
tl.from('.site-logo', {y: '120%', width: '90vw', position: 'fixed',scrollTrigger: {trigger: '.cover', start: 'top', end:'+=30%',scrub: true}})
.to('.header-container', {background: '#000', zIndex: '9999', borderBottom: '1px solid #fff', scrollTrigger: {trigger: '.cover', start: 'top -20%', end:'+=50%', scrub: true}});


let buttons = document.querySelectorAll('.button');
let buttonsUpper = document.querySelectorAll('.button-upper-1');
let buttonsLower = document.querySelectorAll('.button-lower-1');
buttons.forEach(button => {
  let buttonHeight = button.clientHeight;
  buttonsUpper.forEach(buttonUpper => {
    buttonUpper.style.width = buttonHeight / 2 + 'px';
  });
  buttonsLower.forEach(buttonLower => {
    buttonLower.style.width = buttonHeight / 2 + 'px';
  });
});



/* ! Lenis */
const lenis = new Lenis()
lenis.on('scroll', (e) => {})
function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}
requestAnimationFrame(raf)