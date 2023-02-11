function asignin() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 & r.status == 200) {
            if (r.responseText == "Success") {
                window.location = "./studentportal/index.php";
            } else {
                document.getElementById("error_text").innerHTML = "Invalid ID or Password";
                
            }
        }
    };
    r.open("POST", "alogin.php", true);
    r.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    r.send("email=" + email + "&password=" + password + "");
}
