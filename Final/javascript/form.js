let showpass = document.getElementById("showpass")
let inputpass = document.getElementById("pass")
showpass.addEventListener("click",()=>{
    if(inputpass.type=="text"){
        inputpass.type="password";
    }
    else{
        inputpass.type="text";    
    }   
        
});