// check js is running
var dateTime = new Date();
console.log("loading from developer test scripts.js on: " + dateTime);

// set vars
const burger = document.querySelector(".hamburger");
const header = document.querySelector("body");

// toggle for hamburger
burger.addEventListener("click", () => {
  header.classList.toggle("show-nav");
});
