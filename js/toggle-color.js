function setProperty(variable, value) {
  document.documentElement.style.setProperty(variable, value);
}

var moonIcon = document.getElementById("moon");
var sunIcon = document.getElementById("sun");
var backgroundImg = document.getElementById("background");
var backgroundColor = document.getElementById("color");
const heroImage = document.getElementById("hero-image");

function setCookie(cName, cValue, expDays) {
  let date = new Date();
  date.setTime(date.getTime() + expDays * 24 * 60 * 60 * 1000);
  const expires = "expires=" + date.toUTCString();
  document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}

function getCookie(cName) {
  const name = cName + "=";
  const cDecoded = decodeURIComponent(document.cookie); //to be careful
  const cArr = cDecoded.split("; ");
  let res;
  cArr.forEach((val) => {
    if (val.indexOf(name) === 0) res = val.substring(name.length);
  });
  return res;
}

function changeToBright() {
  setProperty("--transparent-color", "#FFFFFFBF");
  setProperty("--transparent-color-burger", "#FFFFFF");
  setProperty("--burger-lines", "#BABABAFF");
  setProperty("--border-color", "#73737335");
  setProperty("--contrast-color", "#131313");
  setProperty("--background-color", "white");
  setProperty("--text-color", "black");
  setProperty("--scrollbar-color", "white");
  setProperty("--theme-color", "#e5e7eb");
  setProperty("--faded-grey", "#a7b9d036");
  setProperty("--transparent-card", "#c0c3d054");
  // heroImage.setAttribute("src", "./images/vector.png");

  backgroundImg.style.opacity = "0.25";
  backgroundImg.style.backgroundImage = "url('./images/background.jpg')";
  moonIcon.style.display = "inherit";
  sunIcon.style.display = "none";
}


function changeToDark() {
  setProperty("--transparent-color", "#0F0F0FD8");
  setProperty("--transparent-color-burger", "#333333D8");
  setProperty("--burger-lines", "#EBEBEBFF");
  setProperty("--border-color", "#b2b7c020");
  setProperty("--contrast-color", "#f9fafb");
  setProperty("--background-color", "#13171e");
  setProperty("--text-color", "white");
  setProperty("--scrollbar-color", "#1d1d1e");
  setProperty("--theme-color", "#131313");
  setProperty("--faded-grey", "#323b4778");
  setProperty("--transparent-card", "#2a2e3954");
  // heroImage.setAttribute("src", "./images/vector-dark.png");

  backgroundImg.style.opacity = "0.25";
  backgroundImg.style.backgroundImage = "url('./images/background-dark.jpg')";
  moonIcon.style.display = "none";
  sunIcon.style.display = "inherit";
}

var colorMode = 0;
var colorModeCookie = getCookie("colorModeCookie");

if (colorModeCookie == 1) {
  colorMode = 1;
  changeToBright();
} else if (colorModeCookie == 0) {
  colorMode = 0;
  changeToDark();
}

function toggleColor() {
  setCookie("colorModeCookie", 0, 30);
  if (colorMode == 0) {
    changeToBright();
    colorMode = 1;
    setCookie("colorModeCookie", 1, 30);
  } else {
    changeToDark();
    colorMode = 0;
    setCookie("colorModeCookie", 0, 30);
  }
}
