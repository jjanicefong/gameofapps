var loginModal = document.querySelector("#login-modal");
var eventForm = document.querySelector("#event-form-cont");
var createEventBtn = document.querySelector("#createEvent-btn");

function ShowLoginModal(){
    loginModal.style.display = "block";
}

function CloseLoginModal(){
    loginModal.style.display = "none";
}

window.onclick = function(event){
    if(event.target == loginModal){
        loginModal.style.display = "none";
    }
}

function ShowEventForm(status){
    // Show form
    if(createEventBtn.dataset.status == "open"){
        eventForm.style.display = "flex";
        createEventBtn.dataset.status = "close";
        console.log('open');
    }

    // Close form
    else if(createEventBtn.dataset.status == "close"){
        eventForm.style.display = "none";
        createEventBtn.dataset.status = "open";
        console.log('close');
    }
}
