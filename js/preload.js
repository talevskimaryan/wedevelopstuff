const preload = document.querySelector(".loader");
document.body.style.overflow = "hidden";

window.addEventListener("load", () => {
  preload.classList.add("loaded");
  document.body.style.overflow = "visible";
});
