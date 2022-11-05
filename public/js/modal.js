let currentClientsBtn = document.querySelector('.clients');
let currentHebergBtn = document.querySelector('.heberg');
let currentDashBtn = document.querySelector('.dashboard').addEventListener('click', () => {
    document.cookie = "route=dash";
    location.replace('./');
})
let currentProBtn = document.querySelector('.project').addEventListener('click', () => {
    document.cookie = "route=project/view";
    location.replace('./');
})

let cliModal = document.getElementById("cliModal");
let heModal = document.getElementById('heModal');
let actionModalList = document.querySelectorAll('.actionModal');
let select = document.getElementById('id_customer');
let selectH = document.getElementById('id_host');

function modalView(_routes) {
    if(_routes == 'Clients') {
        cliModal.style.display = "block";
    } else if (_routes == 'Heberg'){
        heModal.style.display = "block";
    }
    document.cookie = "route=" + _routes;
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

currentClientsBtn.addEventListener('click', () => {
    modalView("Clients");
});

currentHebergBtn.addEventListener('click', () => {
    modalView("Heberg");
});




document.getElementsByClassName("close")[0].onclick = function() {
    cliModal.style.display = "none";
}
document.getElementsByClassName("close")[1].onclick = function() {
    heModal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == cliModal) {
        cliModal.style.display = "none";
    }
    if (event.target == heModal) {
        heModal.style.display = "none";
    }
}
actionModalList[0].addEventListener('click', () =>{
    if(select.value === '') {
        return
    }
    let oldCookie = getCookie("route");
    document.cookie = "route="+oldCookie+"/modify";
    console.log(document.cookie);
    cliModal.style.display = "none";
}) 
actionModalList[1].addEventListener('click', () =>{
    // document.getElementsById("update").style.display = hidden;
    let oldCookie = getCookie("route");
    document.cookie = "route="+oldCookie+"/add";
    console.log(document.cookie);
    cliModal.style.display = "none";
    window.location.reload();
}) 
actionModalList[2].addEventListener('click', () =>{
    if(selectH.value === '') {
        return
    }
    let oldCookie = getCookie("route");
    document.cookie = "route="+oldCookie+"/modify";
    console.log(document.cookie);
    heModal.style.display = "none";
    location.assign("?id=" + selectH.value); 
}) 
actionModalList[3].addEventListener('click', () =>{
    // document.getElementsById("update").style.display = hidden;
    let oldCookie = getCookie("route");
    document.cookie = "route="+oldCookie+"/add";
    console.log(document.cookie);
    cliModal.style.display = "none";
    window.location.reload();
}) 