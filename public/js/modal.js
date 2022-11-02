let currentBtn = document.querySelector('.clients');

let modal = document.getElementById("myModal");
let actionModalList = document.querySelectorAll('.actionModal');
let spanModal = document.getElementsByClassName("close")[0];
let select = document.getElementById('id_customer');

console.log(modal.innerHTML);
currentBtn.addEventListener('click', () => {
    modal.style.display = "block";
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
    if(select.value === '') {
        return
    }
    document.getElementById("add").style.display = "none";
    document.getElementById("update").style.display = "block";
    document.cookie = "route=Clients/modify";
    document.cookie = "id_customer=" + select.options[select.selectedIndex].value;
    console.log(document.cookie);
    modal.style.display = "none";
}) 
actionModalList[1].addEventListener('click', () =>{
    // document.getElementsById("update").style.display = hidden;
    document.getElementById("update").style.display = "none";
    document.getElementById("add").style.display = "block";
    document.cookie = "route=Clients/add";
    console.log(document.cookie);
    modal.style.display = "none";
    document.getElementById("note").innerHTML = "";
}) 