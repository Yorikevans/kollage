document.querySelector("#info_btn").addEventListener('click', ()=>{
    document.querySelector(".info_h").style = "color: Yellow";
    document.querySelector(".info").style = "color: Yellow"
});


let item = document.querySelectorAll(".item");
let active = 0;
document.querySelector(".btn_prev").addEventListener('click', ()=>{
        item[active].style = "opacity: 0;"
});
