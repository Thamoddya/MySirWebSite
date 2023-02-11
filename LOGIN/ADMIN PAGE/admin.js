function loadname() {
    var name = document.getElementById("cityName").value;
    var grade = document.getElementById("grade").value;

    var form = new FormData();
    form.append("name", name);
    form.append("grade", grade);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if ((request.readyState == 4) & (request.status == 200)) {
            document.getElementById("option").innerHTML = request.responseText;
            //    alert(request.responseText);
        }
    };

    request.open("POST", "nameselect.php", true);
    request.send(form);
}
function setname() {
    setInterval(seemassage, 1000);
    setInterval(checkName, 1000);
    setInterval(tablemassageshow, 500);
}

function massage() {
    var showname = document.getElementById("option").value;
    var massege = document.getElementById("massege").value;

    var form = new FormData();
    form.append("toname", showname);
    form.append("massage", massege);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if ((request.readyState == 4) & (request.status == 200)) {
            if (request.response == "Success") {
                document.getElementById("massege").value = "";
                var text = request.responseText;
                alert(text);
            }
        }
    };
    request.open("POST", "sendmassageprocess.php", true);
    request.send(form);
}

function seemassage() {
    var showname = document.getElementById("option").value;
    var massege = document.getElementById("massege").value;

    var form = new FormData();
    form.append("toname", showname);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if ((request.readyState == 4) & (request.status == 200)) {
            document.getElementById("massagediv").innerHTML = request.responseText;
        }
    };
    request.open("POST", "showmassageprocess.php", true);
    request.send(form);
}

function checkName() {
    var name = document.getElementById("cityName").value;
    var grade = document.getElementById("grade").value;

    document.getElementById("inputvalue").value = name + " | Grade - " + grade;
}

function tablemassageshow() {
    var massage = document.getElementById("tabllemassage").value;

    document.getElementById("massageP").innerHTML = massage;
}




function tableupload() {
    var file = document.getElementById("inputGroupFile01");
    var massage = document.getElementById("tabllemassage").value;
    var name = document.getElementById("cityName").value;
    var grade = document.getElementById("grade").value;


    var form = new FormData();
    form.append("file", file.files[0]);
    form.append("name", name);
    form.append("grade", grade);
    form.append("massage", massage);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if ((request.readyState == 4) & (request.status == 200)) {
            alert(request.responseText);
        }
    };

    request.open("POST", "uploadprocess.php", true);
    request.send(form);
}


function newstudentregister() {
    var studentID = document.getElementById("registerstudentid").value;
    var Name = document.getElementById("registerstudentname").value;

    // alert(studentID);
    // alert(Name);

    var form = new FormData();
    form.append("studentid", studentID);
    form.append("name", Name);


    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if ((request.readyState == 4) & (request.status == 200)) {
            document.getElementById("studentregister").innerHTML = request.responseText;
        }
    };

    request.open("POST", "studentregisterprocess.php", true);
    request.send(form);
}

function studentgradeUpdate() {
    var city = document.getElementById("city2").value;
    var grade = document.getElementById("grade2").value;
    var exgrade = document.getElementById("existingrade").value;

    var form = new FormData();
    form.append("city", city);
    form.append("grade", grade);
    form.append("exgrade", exgrade);


    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if ((request.readyState == 4) & (request.status == 200)) {
            // document.getElementById("studentregister").innerHTML = request.responseText;
            alert(request.responseText);
        }
    };

    request.open("POST", "studentgradeupdateprocess.php", true);
    request.send(form);

}

function addNewStudent() {

    const StudentId = document.getElementById("studentID").value;
    const FirstName = document.getElementById("studentFirstName").value;
    const Lastname = document.getElementById("studentlastname").value;
    const Mobile = document.getElementById("studentMobile").value;
    const Email = document.getElementById("studentEmail").value;
    const Password = document.getElementById("studentPassword").value;
    const grade = document.getElementById("studentGrade").value;
    const city = document.getElementById("studentCity").value;

    const form = new FormData();
    form.append("sid",StudentId);
    form.append("fn",FirstName);
    form.append("ln",Lastname);
    form.append("mob",Mobile);
    form.append("ema",Email);
    form.append("pw",Password);
    form.append("grd",grade);
    form.append("cty",city);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if ((request.readyState == 4) & (request.status == 200)) {
                document.getElementById("studentRegisterErrorMsg").innerHTML = request.responseText;
        }
    };


    request.open("POST", "newStudentReg.php", true);
    request.send(form);

    // alert(city);
}