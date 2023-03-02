let a = document.querySelectorAll('a');
for(let aa of a)
{
    if(aa.textContent == "Авторизируйтесь")
        aa.style = "color: red;"
}

let card = document.querySelectorAll(".card");

let prev = document.querySelector(".prev");
let next = document.querySelector(".next");

let number_card = card.length-1;
if(prev != null && next != null){
    card[number_card].style = "opacity: 1";
    prev.addEventListener('click', ()=>{
        if (number_card > 0)
        {
            card[number_card].style = "opacity: 0; transition: all 0.8s; ";
            number_card -= 1;
            card[number_card].style = "opacity: 1; transition: all 0.8s;";
        }
        else
        {
            card[number_card].style = "opacity: 0; transition: all 0.8s; ";
            number_card = card.length-1;
            card[number_card].style = "opacity: 1; transition: all 0.8s; ";
        }
    });
    next.addEventListener('click', ()=>{
        if (number_card == card.length-1)
        {
            card[number_card].style = "opacity: 0; transition: all 0.8s;";
            number_card = 0;
            card[number_card].style = "opacity: 1; transition: all 0.8s;";
        }
        else
        {
            card[number_card].style = "opacity: 0; transition: all 0.8s;";
            number_card += 1;
            card[number_card].style = "opacity: 1; transition: all 0.8s;";
        }
    });
}

