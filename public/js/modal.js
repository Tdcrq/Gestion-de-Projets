let currentClientsBtn = document.querySelector('.clients');
let currentHebergBtn = document.querySelector('.heberg');

let modal = document.getElementById("myModal");
let actionModalList = document.querySelectorAll('.actionModal');
let spanModal = document.getElementsByClassName("close")[0];
let select = document.getElementById('id_customer');

function modalView(_routes) {
    modal.style.display = "block";
    document.cookie = "route="+_routes;
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




spanModal.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

actionModalList[0].addEventListener('click', () =>{
    /*if(select.value === '') {
        return
    }*/
    document.cookie = "id=" + select.options[select.selectedIndex].value;
    let oldCookie = getCookie("route");
    document.cookie = "route="+oldCookie+"/modify";
    console.log(document.cookie);
    modal.style.display = "none";
}) 
actionModalList[1].addEventListener('click', () =>{
    // document.getElementsById("update").style.display = hidden;
    let oldCookie = getCookie("route");
    document.cookie = "route="+oldCookie+"/add";
    console.log(document.cookie);
    modal.style.display = "none";
}) 