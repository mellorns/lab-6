function get() {
    if("tmp" in localStorage) {
        document.getElementById("content").innerHTML = decodeURI(localStorage.getItem("tmp"));
        localStorage.setItem("tmp", document.getElementById("save").innerHTML);
    }
}

function add() {
    localStorage.setItem("tmp", document.getElementById("save").innerHTML);
}