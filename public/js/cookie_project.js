function modify(id_project) {
    document.cookie = "route=project/Update";
    window.location.search += "&proj="+id_project;
}

function Insert() {
    document.cookie = "route=project/Insert";
    window.location.reload();
}