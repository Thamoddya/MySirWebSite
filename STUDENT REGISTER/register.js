
function submit() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var mobile = document.getElementById("mobile").value;
    var email = document.getElementById("email").value;
    var city = document.getElementById("city").value;
    var password = document.getElementById("password").value;
    var id = document.getElementById("studentid").value;
    var grade = document.getElementById("grade").value;


    // alert(fname);
    // alert(lname);
    // alert(mobile);
    // alert(email);
    // alert(city);
    // alert(password);
    // alert(id);
    // alert(grade);

    var form = new FormData();
    form.append("firstName", fname);
    form.append("lastName", lname);
    form.append("mobile", mobile);
    form.append("email", email);
    form.append("cityName",city);
    form.append("password", password);
    form.append("studentId",id);
    form.append("grade", grade);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 & r.status == 200) {
            if(r.responseText !== "success"){
                if(r.responseText == "Warning: Trying to access array offset on value of type null in C:\"xampp\htdocs\Sahan Sir\STUDENT REGISTER\con.php on line 44"){
                    alert("Cannot access array offset on value of type null");
                }else{

                
                document.getElementById("errormassage").className = "ErrorMassage2";
                document.getElementById("errormassage").innerHTML = r.responseText;
            }
            }
            else{
                document.getElementById("errormassage").className = "ErrorMassage3";
                document.getElementById("errormassage").innerHTML = r.responseText;
            }
            
        }
    };

    r.open("POST", "con.php", true);
    r.send(form);
}

