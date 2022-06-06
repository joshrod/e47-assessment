/********************* 
* * GLOBAL VARS
*********************/

let vw = document.body.clientWidth;
let vh = window.innerHeight;

const menuBars = document.querySelector('.header-menu-bars-mobile'),
    mobileMenu = document.querySelector('.header-mobile-menu');

let mobileMenuOpen = false;

// Prevent Scrolling Variables
const keys = { 37: 1, 38: 1, 39: 1, 40: 1 };

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
    window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function () { supportsPassive = true; }
    }));
} catch (e) { }

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

/*********************
* * MAINTENANCE PAGE JAVASCRIPT
*********************/

window.addEventListener('load', () => {
    menuBars.addEventListener('click', handleMobileMenu);
});

/*********************
* * GLOBAL FUNCTIONS
*********************/

function handleMobileMenu() {
    menuBars.classList.toggle('cross-bars');
    mobileMenu.classList.toggle('mobile-menu-open');

    mobileMenuOpen = !mobileMenuOpen;

    mobileMenuOpen ? disableScroll() : enableScroll();
}

/******** ENABLE/DISABLE SCROLL FUNCTIONS ********/

function preventDefault(e) {
    e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

// call this to Disable
function disableScroll() {
    window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
    window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
    window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
    window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

// call this to Enable
function enableScroll() {
    window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
    window.removeEventListener('touchmove', preventDefault, wheelOpt);
    window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}