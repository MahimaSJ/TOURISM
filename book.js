const form =document.getElementById("form");
const username=document.getElementById("name");
const email=document.getElementById("email");
const place=document.getElementById("place");
const days=document.getElementById("days");
const arrival=document.getElementById("arrivaldate");
const leaving=document.getElementById("leavingdate");


function checkempty(inputs){
   inputs.forEach((input) => {
        if(input.value.trim()===""){
            alert(`${getName(input)} is empty`);
        }else{
            //
        }
    }
     )
};

function getName(input){
    return input.id;
};

function checkemail(email){
    if(email.value.trim().isemail()){
        alert(`${getName(email)}is not valid`);
    }
}


// form.addEventListener("submit",function(e){
//     e.preventDefault();
//     checkempty([username,email,place,days,arrival,leaving]);
//     checkemail(email);
//     return true;
// })
function func(){
    e.preventDefault();
    checkempty([username,email,place,days,arrival,leaving]);
    checkemail(email);
    return true;
}