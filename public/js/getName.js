function showName(str) {
    if (str=="") {
        document.getElementById("old_name").innerHTML = "";
        return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("old_name").innerHTML = this.responseText;
            document.forms["upd_user"]["name"].setAttribute('value', this.responseText);
        }
    }
    xmlhttp.open("GET","getName.php?q="+str,true);
    xmlhttp.send();
}