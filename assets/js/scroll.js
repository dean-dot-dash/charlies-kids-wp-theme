// init controller
var controller = new ScrollMagic.Controller();

// build scenes
new ScrollMagic.Scene({
  triggerElement: "#scroll-trigger",
})
  .setClassToggle("#fixed-cta", "faded") // add class toggle
  //   .addIndicators() // add indicators (requires plugin)
  .addTo(controller);
