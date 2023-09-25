/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let url = window.location.href;
const catLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
catLink.forEach((item) => {
  if (item.href === url) {
    item.classList.add("active");
  }
});

/*
    Add class in body when search clicked
*/
let searchBtn = document.querySelector(".search-controller svg.search");

if (searchBtn !== null) {
  searchBtn.addEventListener("click", function (e) {
    document.body.classList.remove("open-social");
    document.body.classList.add("open-search");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-search");
    });

    let searchContainer = document.querySelector(".search-container");
    searchContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var searchInput = document.querySelector(".wp-block-search__input");
    window.setTimeout(() => searchInput.focus(), 0);
  });
}

var searchBtnClose = document.querySelector(
  ".search-controller svg.cross"
);

if (searchBtnClose !== null) {
  searchBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");

  });
}


/*
    Add class in body when social clicked
*/
let socialBtn = document.querySelector(".social-controller svg.social");

if (socialBtn !== null) {
  socialBtn.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");
    document.body.classList.add("open-social");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-social");
    });

    let socialContainer = document.querySelector(".social-container");
    socialContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var socialInput = document.querySelector(".wp-block-social__input");
    window.setTimeout(() => socialInput.focus(), 0);
  });
}

var socialBtnClose = document.querySelector(
  ".social-controller svg.cross"
);

if (socialBtnClose !== null) {
  socialBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-social");

  });
}

/*
    Add blinker on input field when active
*/
let blinkerField = document.querySelector(".social-controller svg.search");

if (blinkerField !== null) {
  blinkerField.addEventListener("click", function () {
    var searchInput = document.querySelector(".wp-block-search__input");
        window.setTimeout(() => searchInput.focus(), 0);
  });
}

// Moving Object With Cursor

const bob = document.getElementsByClassName('custom-cursor')[0];

let mouseX = 0;
let mouseY = 0;

let ballX = 0;
let ballY = 0;

let speed = 0.2;  //how fast ball catches up to mouse pointer;

function animate() {
  let distX = mouseX - ballX;
  let distY = mouseY - ballY;

  ballX = ballX + (distX * speed);
  ballY = ballY + (distY * speed);

  bob.style.left = ballX + 'px';
  bob.style.top = ballY + 'px';

  requestAnimationFrame(animate)

};

animate();

document.addEventListener('mousemove', function (e) {
  mouseX = e.pageX;
  mouseY = e.pageY;
});

document.addEventListener('click', function (e) {
  e.preventDefault;
  bob.classList.remove('active');
  //some rando comment

  void bob.offsetWidth;

  bob.classList.add('active');

}, false);

//


// Changing Cursor Styles in Menu Item

// storing all menu item in a variable
let menuLinks = document.getElementsByClassName("wp-block-navigation-item__content");

// event listener must be in loop so we only modify
// the actual element being touched, instead of all
// elements that are stored in variable
for (var i = 0; i < menuLinks.length; i++) {
  menuLinks[i].addEventListener("mouseover", menuHoverOn);
  menuLinks[i].addEventListener("mouseout", menuHoverOff);
}

// functions to add and remove menu__active class for changing cursor styles
let menuCursor = document.getElementById("custom-cursor");

function menuHoverOn() {
  menuCursor.classList.add("menu__active")
}
function menuHoverOff() {
  menuCursor.classList.remove("menu__active")
}



// Changing Cursor Styles in Team Section

// storing all menu item in a variable
let teamLinks = document.getElementsByClassName("wp-block-post-group");

// event listener must be in loop so we only modify
// the actual element being touched, instead of all
// elements that are stored in variable
for (var i = 0; i < teamLinks.length; i++) {
  teamLinks[i].addEventListener("mouseover", teamHoverOn);
  teamLinks[i].addEventListener("mouseout", teamHoverOff);
}

// functions to add and remove menu__active class for changing cursor styles
let teamCursor = document.getElementById("custom-cursor");

let teamButton = document.getElementsByClassName(".wp-block-buttons");

function teamHoverOn() {
  teamCursor.classList.add("team__active")
}
function teamHoverOff() {
  teamCursor.classList.remove("team__active")
}


