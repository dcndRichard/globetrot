window.addEventListener("scroll", () => {

  // let hero = document.querySelector("#hero");
  let header = document.querySelector("#header");
  let fixedTopBottomBtn = document.querySelector("#scroll-indicator");

  let topOfHeaderPos = header.getBoundingClientRect()

  let anchor = fixedTopBottomBtn.children[ 0 ];
  // console.log(topOfHeaderPos.top);
  if (topOfHeaderPos.top >= -100) {
    fixedTopBottomBtn.setAttribute('style', 'display:block')
    anchor.setAttribute("href", "#footer");
    anchor.innerHTML = "&#8595;";

  } else if (topOfHeaderPos.top < -501 && topOfHeaderPos.top > -2300) {
    fixedTopBottomBtn.setAttribute('style', 'display:none')
  }
  else if (topOfHeaderPos.top <= -2301) {
    fixedTopBottomBtn.setAttribute('style', 'display:block')
    anchor.setAttribute("href", "#header");
    anchor.innerHTML = "&#8593;";
  }
});