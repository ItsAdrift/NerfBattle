var login = document.getElementById("login");
var loginModal = document.getElementById("loginModal");

loginModal.style.display = "none";

login.addEventListener('click', function(e){
    loginModal.style.display='block';
    console.log("Login Attempt")
})

window.onclick = function(event) {
    if (event.target == loginModal) {
        loginModal.style.display = "none";
    }
  }