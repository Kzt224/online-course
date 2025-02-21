
var hide_btn = document.getElementById("hide_show");
var hide_ele = document.getElementById("hide_div");

hide_btn.addEventListener("click",(e) => {
  hide_ele.style.width = "75%";
  e.stopPropagation();
})
document.addEventListener("click",(e) => {
  if(window.innerWidth < 1024){
    if(!hide_ele.contains(e.target) && !hide_btn.contains(e.target)){
      hide_ele.style.width = "0";
    }
  }
});
window.addEventListener("resize",() => {
   if(window.innerWidth >= 1024){
     hide_ele.style.width = "25%"
   }else{
     hide_ele.style.width = "0"
   }
});

