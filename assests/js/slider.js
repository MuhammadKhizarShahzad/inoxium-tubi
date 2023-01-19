const parent = document.querySelector(".parent");
const children = document.querySelectorAll(".child");
const previous = document.querySelector(".previous");
const next = document.querySelector(".next");

let a = 0;
let move = children[0].offsetWidth;
// TotalNoOfChildren * singleChildWidth - parentTotalWidth
let additionalWidth = children.length * children[0].offsetWidth - parent.offsetWidth;

setInterval(() => {
  if (a >= additionalWidth) {
    parent.scrollTo({
      left: a = 0,
      behavior: 'smooth'
    });
    return;
  }

  parent.scrollTo({
    left: a += move,
    behavior: 'smooth'
  });

}, 5000)