
let hover_list_one = document.querySelector(".list-hover-group");
let hover_list_two  =  document.querySelector(".list-hover-group_two");
let hover_list_three=  document.querySelector(".list-hover-group_three");
hover_list_one.addEventListener("mouseover",()=>{
        hover_list_one.style.backgroundColor ="#e9ecef";
});
hover_list_one.addEventListener("mouseout",()=>{
    hover_list_one.style.backgroundColor ="white";
});

hover_list_two.addEventListener("mouseover",()=>{
    hover_list_two.style.backgroundColor ="#e9ecef";
});
hover_list_two.addEventListener("mouseout",()=>{
hover_list_two.style.backgroundColor ="white";
});


hover_list_three.addEventListener("mouseover",()=>{
    hover_list_three.style.backgroundColor ="#e9ecef";
});
hover_list_three.addEventListener("mouseout",()=>{
hover_list_three    .style.backgroundColor ="white";
});

let sendedit = document.querySelector("#pf");

sendedit.addEventListener("click",()=>{
        window.location.href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_links_w3schools";
});

