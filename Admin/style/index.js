var button = document.getElementById("hide-btn");
var side_bar = document.getElementById("side-bar");


button.addEventListener("click",(e) => {
    side_bar.style.left = "0";
})
document.addEventListener("click",(e) => {
    if(window.innerWidth < 1024){
        if(!side_bar.contains(e.target) && !button.contains(e.target)){
            side_bar.style.left = "-500px";
        }
    }
})


window.addEventListener("resize",() => {
  if(window.innerWidth >= 1024){
    side_bar.style.left = "0";
  }else{
    side_bar.style.left = "-500px"
  }
})