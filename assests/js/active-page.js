const currentURL = window.location.pathname;

console.log(currentURL,"Hello")

document.querySelectorAll(".header-nav a").forEach((link) => {
  console.log(link)
  if (currentURL.split("/")[2] === link.pathname.split("/")[2]) {
    link.classList.add("active");
  }
});
