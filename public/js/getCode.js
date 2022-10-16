function showCode(str) {
    if (str=="") {
        document.forms['upd_user']['code'].value = "";
        return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.forms['upd_user']['code'].value = this.responseText;
        }
    }
    xmlhttp.open("GET","getCode.php?q="+str,true);
    xmlhttp.send();
}