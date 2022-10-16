function showNotes(str) {
    if (str=="") {
        document.getElementById("note").innerHTML = "";
        return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("note").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET","getNotes.php?q="+str,true);
    xmlhttp.send();
}