let clickone = document.querySelector(".btn-hov");
let signup = document.querySelector("#login-here");
let register = document.querySelector("#register");
let pic = document.querySelector("#pic");
let header = document.querySelector("h4");
let content  = document.querySelector("#content")
let bttn = document.querySelector(".btn-hov")

let form = document.querySelector("#left-form");
let formleft = document.querySelector("#forming");
let formhide =document.querySelector("#hidden-form");
let showlogin = document.querySelector("#login-btn");
let showsignup  =document.querySelector("#signup-btn");
let imgbehind = document.querySelector(".gradient-custom-2");

let formheader = document.querySelector("h1");
let fromsmall = document.querySelector("h2");

let reversebtn = document.querySelector(".btn-log");
let cardbo = document.querySelector(".card-body");

let presslogin = document.querySelector("#first-login")



let showformmain= document.querySelector(".col-form")
//change to sign up




presslogin.addEventListener("click",()=>{
    presslogin.style.display="none"
    showsignup.display ="inline-block";
    form.display ="none";
})


clickone.addEventListener("click",()=>{

    press();

    cardbo.style.marginTop="99px";
    showsignup.display ="none";
    showlogin.display ="inline-block";

})



reversebtn.addEventListener("click",()=>{
    imgbehind.style.backgroundImage ="url('https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80')";
    formtextonly();
    cardbo.style.marginTop="0px";

    buttontext();
    backgroundimage();
    showsignup.display ="inline-block";
    showlogin.display ="none";
   
})

const formtextonly = ()=>{
    

    formheader.innerHTML ="Welcome, Rooki";
    fromsmall.innerHTML = "Register";   
    form.style.transform="translateX(0%)";  
    form.style.transition="0.5s linear";
    formleft.style.display ="block";    
    formhide.style.display = "none";
}

const buttontext= ()=>{
    bttn.innerHTML ="Login";
    header.innerHTML="Already have an account?"    
    content .innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quip ex ea commodo consequat Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
  
  
    bttn.style.display = "inline-block";
    reversebtn.style.display = "none";
}

const backgroundimage =()=>{
    pic.style.display="none" ; 
    pic.style.transition="0.5s linear";
    pic.style. transform=" translateX(0%)";
}


const backfromtext =()=>{
    formheader.innerHTML ="Welcome back";
    fromsmall.innerHTML = "Member";
    form.style.transform="translateX(74%)";
    form.style.transition="0.5s linear";
    formleft .style.display ="none";    
    formhide.style.display = "block";
}

const buttonback = ()=>{

    bttn.innerHTML  ="  "
    bttn.style.display = "none";
    reversebtn.style.display="inline-block"
    header.innerHTML="New Here?"    
    content .innerHTML="Welcome to your very first blog website please login now with the exclusive membership, it wont cost you anything Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quip ex ea commodo consequat .";
  
}

const imgback =()=>{
    pic.style.display="none" ; 
    pic.style.transition="0.5s linear";
    pic.style. transform=" translateX(-140%)";
}

const press = ()=>{
    imgbehind.style.backgroundImage ="url('https://images.unsplash.com/photo-1513001900722-370f803f498d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')";
   
    backfromtext ();
    buttonback ();
    imgback();
  


}

