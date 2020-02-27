var loginModal = document.querySelector("#login-modal");

function ShowLoginModal(){
    loginModal.style.display = "block";
}

function CloseLoginModal(){
    loginModal.style.display = "none";
}

window.onclick = function(event){
    if(event.target == loginModal){
        loginModal.style.display = "none";
        //hi
    }
}