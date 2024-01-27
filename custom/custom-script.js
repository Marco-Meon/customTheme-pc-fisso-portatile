/*  ----------------------------------------------------------------------------------------------- */
/* ! Refresh on resize */
/* ------------------------------------------------------------------------------------------------ */
let breakpoints = [450, 768, 991];
let currentBreakpoint = getCurrentBreakpoint();
window.onresize = function () {
  let newBreakpoint = getCurrentBreakpoint();
  if (newBreakpoint !== currentBreakpoint) {
    location.reload();
  }
  currentBreakpoint = newBreakpoint;
};
function getCurrentBreakpoint() {
  let windowWidth = window.innerWidth;
  for (let i = breakpoints.length - 1; i >= 0; i--) {
    if (windowWidth >= breakpoints[i]) {
      return breakpoints[i];
    }
  }
  return 0;
}


/*  ----------------------------------------------------------------------------------------------- */
/* ! Button */
/* ------------------------------------------------------------------------------------------------ */
const buttons = document.querySelectorAll('.button');
const buttonsUpper = document.querySelectorAll('.button-upper-1');
const buttonsLower = document.querySelectorAll('.button-lower-1');
buttons.forEach(button => {
  let buttonHeight = button.clientHeight;
  buttonsUpper.forEach(buttonUpper => {
    buttonUpper.style.width = buttonHeight / 2 + 'px';
  });
  buttonsLower.forEach(buttonLower => {
    buttonLower.style.width = buttonHeight / 2 + 'px';
  });
});


/*  ----------------------------------------------------------------------------------------------- */
/* ! Header */
/* ------------------------------------------------------------------------------------------------ */
const tl = gsap.timeline();
tl.to('.header-container', {opacity: 1, scrollTrigger: {trigger: '.cover', start: 'top -20%', end:'+=50%', scrub: true}});


/*  ----------------------------------------------------------------------------------------------- */
/* ! Cover */
/* ------------------------------------------------------------------------------------------------ */
tl.from('.cover__img', {opacity: 0, scale: 0.5, duration: 5, ease: Power2.easeOut})
.to(".fade-in", {opacity: 1, y:0, duration: 1.5, stagger: 0.3, ease: Power2.easeOut}, "1");


/*  ----------------------------------------------------------------------------------------------- */
/* ! Section 1 */
/* ------------------------------------------------------------------------------------------------ */
tl.to('.section-1__card-1',{y:'-20%', scrollTrigger: {trigger: '.section-1', start: 'top 50%', end:'+=100%', scrub: true}})
.to('.section-1__card-2',{y:'-20%', scrollTrigger: {trigger: '.section-1', start: 'top 30%', end:'+=100%', scrub: true}})
.to('.section-1__card-3',{y:'-20%', scrollTrigger: {trigger: '.section-1', start: 'top 10%', end:'+=100%', scrub: true}})


/*  ----------------------------------------------------------------------------------------------- */
/* ! Section 2 */
/* ------------------------------------------------------------------------------------------------ */
tl.to(".section-2__image-cont-1", { height: "0", scrollTrigger: {trigger: ".section-2",start:"top",end: "+=100%", scrub:true}});


/*  ----------------------------------------------------------------------------------------------- */
/* ! Timeline */
/* ------------------------------------------------------------------------------------------------ */
const DOM = {
  timeline: "timeline",
  timelineStepper: "timeline__stepper",
  timelineStep: "timeline__step",
  timelineStepTitle: "timeline__step-title",
  timelineStepActive: "is-active",
  timelineStepActiveMarker: "timeline__step-active-marker",
  timelineSlidesContainer: "timeline__slides",
  timelineSlide: "timeline__slide",
  timelineSlideActive: "is-active",
};
const STEP_ACTIVE_MARKEP_CUSTOM_PROPS = {
  width: "--slide-width",
  posX: "--slide-pos-x",
  posY: "--slide-pos-y",
};
const SLIDES_CONTAINER_CUSTOM_PROPS = {
  height: "--slides-container-height",
};
const timeline = document.querySelector(`.${DOM.timeline}`);
const timelineStepper = timeline?.querySelector(`.${DOM.timelineStepper}`);
const timelineStepTitle = timeline?.querySelector(`.${DOM.timelineStepTitle}`);
const timelineSlidesContainer = timeline?.querySelector(`.${DOM.timelineSlidesContainer}`);
const timelineSlides = timeline && Array.from(timeline.querySelectorAll(`.${DOM.timelineSlide}`));

function deactivateSteps() {
  const steps = document.querySelectorAll(`.${DOM.timelineStep}`);
  steps?.forEach(elem => elem.classList.remove(DOM.timelineStepActive));
}
function activateCurrentStep(currentStep) {
  currentStep?.classList.add(DOM.timelineStepActive);
}
function deactivateSlides() {
  timelineSlides?.forEach(elem => elem.classList.remove(DOM.timelineSlideActive));
}
function activateCurrentSlide() {
  const currentSlide = getCurrentSlide();
  if (!currentSlide) {
    return;
  }
  const currentSlideHeight = getCurrentSlideHeight(currentSlide);
  setSlideContainerHeight(currentSlideHeight);
  currentSlide.classList.add(DOM.timelineSlideActive);
}
function createStepActiveMarker() {
  const stepActiveMarker = document.createElement("div");
  stepActiveMarker.classList.add(DOM.timelineStepActiveMarker);
  timelineStepper?.appendChild(stepActiveMarker);
  const positionProps = getStepActiveMarkerProps();
  if (!positionProps) {
    return;
  }
  setStepActiveMarkerProps({
    stepActiveMarker,
    ...positionProps,
  });
}
function recalcStepActiveMarkerProps() {
  const stepActiveMarker = timeline?.querySelector(`.${DOM.timelineStepActiveMarker}`);
  const stepActiveMarkerProps = getStepActiveMarkerProps();
  if (!stepActiveMarkerProps) {
    return;
  }
  setStepActiveMarkerProps({ stepActiveMarker, ...stepActiveMarkerProps });
}

function setStepActiveMarkerProps({ stepActiveMarker, posX, posY, width }) {
  stepActiveMarker.style.setProperty(`${STEP_ACTIVE_MARKEP_CUSTOM_PROPS.width}`, `${width}px`);
  stepActiveMarker.style.setProperty(`${STEP_ACTIVE_MARKEP_CUSTOM_PROPS.posX}`, `${posX}px`);
  if (typeof posY === "number") {
    stepActiveMarker.style.setProperty(`${STEP_ACTIVE_MARKEP_CUSTOM_PROPS.posY}`, `${posY}px`);
  }
}

function getStepActiveMarkerProps() {
  const { currentStep } = getCurrentStep();
  if (!currentStep) {
    return null;
  }
  const width = getElementWidth(currentStep);
  const posX = getStepActiveMarkerPosX(currentStep);
  const posY = getStepActiveMarkerPosY();
  if (typeof posX !== "number" || typeof posY !== "number") {
    return null;
  }
  return { posX, posY, width };
}

function getCurrentStep() {
  const timelineSteps = Array.from(document.querySelectorAll(`.${DOM.timelineStep}`));
  const currentStep = timelineSteps.find(element =>
    element.classList.contains(DOM.timelineStepActive)
  );
  const currentStepIndex =
    currentStep &&
    timelineSteps.findIndex(element =>
      element.classList.contains(DOM.timelineStepActive)
    );
  return { currentStep, currentStepIndex };
}

function getCurrentSlide() {
  const { currentStepIndex } = getCurrentStep();
  if (typeof currentStepIndex !== "number" || !timelineSlides) {
    return null;
  }
  return timelineSlides[currentStepIndex];
}

function setSlideContainerHeight(height) {
  timelineSlidesContainer?.style.setProperty(`${SLIDES_CONTAINER_CUSTOM_PROPS.height}`, `${height}px`);
}

function getCurrentSlideHeight(currentSlide) {
  return currentSlide.clientHeight;
}

function getStepActiveMarkerPosY() {
  const timelineTitlePosY = timelineStepTitle?.getBoundingClientRect().top;
  const timelineStepperPosY = timelineStepper?.getBoundingClientRect().top;
  if (!timelineTitlePosY || !timelineStepperPosY) {
    return null;
  }
  return timelineTitlePosY - timelineStepperPosY;
}

function getStepActiveMarkerPosX(currentStep) {
  const timelineStepperPosX = timelineStepper?.getBoundingClientRect().left;
  const currentStepPosX = currentStep.getBoundingClientRect().left;
  if (!timelineStepperPosX) {
    return null;
  }
  return currentStepPosX - timelineStepperPosX;
}

function getElementWidth(elem) {
  return elem.clientWidth;
}

window.addEventListener("load", () => {
  createStepActiveMarker();
  activateCurrentSlide();
});

window.addEventListener("resize", () => {
  recalcStepActiveMarkerProps();
});

timeline?.addEventListener("click", event => {
  const { target } = event;
  if (!target || !(target instanceof Element) || !target.closest(`.${DOM.timelineStep}`)) {
    return;
  }
  const currentStep = target.closest(`.${DOM.timelineStep}`);
  if (!currentStep) {
    return;
  }
  deactivateSteps();
  activateCurrentStep(currentStep);
  recalcStepActiveMarkerProps();
  deactivateSlides();
  activateCurrentSlide();
});


/*  ----------------------------------------------------------------------------------------------- */
/* ! Section 4 */
/* ------------------------------------------------------------------------------------------------ */
document.addEventListener('DOMContentLoaded', function () {
  let bigImage = document.querySelector('.js-section-4-image-big');
  let smallImages = document.querySelectorAll('.js-section-4-image-small');

  smallImages.forEach((smallImage) => {
    smallImage.addEventListener('click', () => {
      bigImage.classList.add('transitioning');
      setTimeout(() => {
        let bigImageUrl = bigImage.src;
        bigImage.src = smallImage.src;
        smallImage.src = bigImageUrl;

        // Rimuovi la classe di transizione dopo lo scambio
        bigImage.classList.remove('transitioning');
      }, 300);
    });
  });
});


/*  ----------------------------------------------------------------------------------------------- */
/* ! Lenis */
/* ------------------------------------------------------------------------------------------------ */
const lenis = new Lenis()
lenis.on('scroll', (e) => {})
function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}
requestAnimationFrame(raf)