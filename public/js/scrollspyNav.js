function getContainerMargin() {
    const p = document.querySelector(".main-content > .container");
    const style = p.currentStyle || window.getComputedStyle(p);

    document.querySelector('.sidenav').style.right = style.marginRight;
  document.querySelector('.sidenav').style.display = 'block';

}
window.addEventListener('load',getContainerMargin,false);
window.addEventListener("resize", getContainerMargin);
