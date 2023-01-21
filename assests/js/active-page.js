const currentURL = window.location.pathname;

document.querySelectorAll(".header-nav a").forEach((link) => {
  if (currentURL.split("/")[2] === link.pathname.split("/")[2]) {
    link.classList.add("active");
  }
});
