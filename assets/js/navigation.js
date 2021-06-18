(function () {
  var nav = document.getElementById("primary-nav");
  if (!nav) {
    return;
  }

  var button = document.getElementById("menu-button");
  var menu = document.getElementById("menu-main-menu");
  if (!button) {
    return;
  }

  // Hide button if menu is missing or empty.
  if (!menu || !menu.childNodes.length) {
    button.style.display = "none";
    return;
  }

  button.onclick = function () {
    if ($("#primary-nav").hasClass("toggled-on")) {
      console.log("turn off class");
      nav.className = nav.className.replace(" toggled-on", " toggled-off");
    } else if ($("#primary-nav").hasClass("toggled-off")) {
      console.log("turn on class");
      nav.className = nav.className.replace(" toggled-off", " toggled-on");
    } else {
      nav.className += " toggled-on";
    }
  };
})(jQuery);
