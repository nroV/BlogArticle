
console.log("hello world");

let checkboxshow = document.querySelector("#chbox");

let changepass = document.querySelector("#pass");

checkboxshow.addEventListener("click",()=>{
    if(changepass.type === "password"){
        changepass.type="text";
    }
    else{
        changepass.type="password";
    }
 
})

let checkboxshow_two = document.querySelector("#chbox_two");

let changepass_two = document.querySelector("#pw");

checkboxshow_two.addEventListener("click",()=>{
    changepass_two.type="text" ;
});


