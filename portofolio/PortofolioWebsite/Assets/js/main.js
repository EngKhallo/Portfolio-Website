// Circular Progress
const numb1 = document.querySelector(".numb1");
const numb2 = document.querySelector(".numb2");
const numb3 = document.querySelector(".numb3");
const numb4 = document.querySelector(".numb4");

let counter = 0;
setInterval(() => {
  if (counter == 100) {
    clearInterval();
  } else {
    counter += 1;
    numb1.textContent = counter + "%";
    numb2.textContent = counter + "%";
    numb3.textContent = counter + "%";
    numb4.textContent = counter + "%";
  }
}, 80);

// Go TO TOP BUTTON
const to_top = document.querySelector(".to-top");
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    to_top.classList.add("active");
  } else {
    to_top.classList.remove("active");
  }
});

let img = document.querySelector(".shape-on-hero");
let toggle = document.querySelector(".navbar-toggler");
let icons = document.querySelector(".sidebar-socialmedia");

toggle.addEventListener('click', function(){
  img.classList.toggle("z-indexed");
  icons.classList.toggle("z-indexed");
})


// remove();

// function remove() {
//   let p = document.querySelector("style");
//   let r = document.querySelector(".remove");
//   r.addEventListener('click', function () {
//     p.remove();
//   });
// }

