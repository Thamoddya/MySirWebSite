window.addEventListener("DOMContentLoaded", (event) => {
    // Activate Bootstrap scrollspy on the main nav element
    const sideNav = document.body.querySelector("#sideNav");
    if (sideNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: "#sideNav",
            offset: 74,
        });
    }

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector(".navbar-toggler");
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll("#navbarResponsive .nav-link")
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener("click", () => {
            if (window.getComputedStyle(navbarToggler).display !== "none") {
                navbarToggler.click();
            }
        });
    });
});
function UpdatePassword() {
    
    var password = document.getElementById("newPassword").value;
    var form = new FormData();
    form.append("password",password);

    // alert(password);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if ((r.readyState == 4) & (r.status == 200)) {
            document.getElementById("passwordresponsetext").innerHTML = r.responseText;
        }
    };
    r.open("POST", "updatepasswordprocess.php", true);
    r.send(form);
}
function UpdateEmail(){
    
    var email = document.getElementById("newEmail").value;
    var form = new FormData();
    form.append("email",email);

    // alert(password);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if ((r.readyState == 4) & (r.status == 200)) {
            document.getElementById("passwordresponsetext").innerHTML = r.responseText;
        }
    };
    r.open("POST", "updateemailprocess.php", true);
    r.send(form);
}
