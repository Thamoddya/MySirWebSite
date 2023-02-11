function signin() {
    var loginid = document.getElementById("email").value;
    var loginPassword = document.getElementById("password").value;

    var form = new FormData();
    form.append("id", loginid);
    form.append("password", loginPassword);

    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (req.readyState == 4) {
            var r = req.responseText;
            // r == 'success' ? window.location = './home.php' : console.log(r.length);
            if (r === "success") {
                window.location = "./studentportal/index.php";
            } else {

                document.getElementById("errormassege").innerHTML = r;
            }
        }

    };
    req.open("POST", "stulogin.php", true);
    req.send(form);
}