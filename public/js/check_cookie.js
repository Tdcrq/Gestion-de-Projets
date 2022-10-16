function getCookie(route) {
    var cookieArr = document.cookie.split(";");
    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        if(route == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }
    return null;
}

function checkRoute() {
    var route = getCookie("route");
    if (route != null) {
        window.location.href = "./index.php?route=" + route;
    }else {
        window.location.href = "./index.php?route=" + route;
    }
}