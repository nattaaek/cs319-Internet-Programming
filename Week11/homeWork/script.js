function display() {
    var name = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var birthdate = document.getElementById("birthdate").value;
    var fphone = document.getElementById("fphone").value;
    var lphone = document.getElementById("lphone").value;
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    var gender , bmi , synopsis;
    if(document.getElementById("gender1").checked)
    {
        gender = document.getElementById("gender1").value;
    }
    else if(document.getElementById("gender2").checked)
    {
        gender = document.getElementById("gender2").value;
    }
    else{
        gender = document.getElementById("gender3").value;
    }

    height = height / 100;
    bmi = weight/height/height; 

    if (bmi < 18.5) {
        synopsis = "น้ำหนักน้อย/ผอม";
    }
    else if(bmi > 18.50 && bmi < 22.90)
    {
        synopsis = "ปกติ (สุขภาพดี)";
    }
    else if(bmi > 23 && bmi < 24.90)
    {
        synopsis = "ท้วม / โรคอ้วนระดับ 1";
    }
    else if(bmi > 25 && bmi < 29.90)
    {
        synopsis = "อ้วน / โรคอ้วนระดับ 2";
    }
    else if(bmi > 30)
    {
        synopsis = "อ้วนมาก / โรคอ้วนระดับ 3";
    }

    var hobby = document.getElementById("hobby");
    var strUser = hobby.options[hobby.selectedIndex].value;

    if(name == "" || lname == "" || birthdate == "" || fphone == "" || lphone == "" || weight == "" || height == "")
    {
        alert("Please fill out your data completely");
    }
    else{
        document.getElementById("showHeader").innerHTML = "Display personal's data"
        document.getElementById("showName").innerHTML = "Your name: " + name + " " + lname;
        document.getElementById("showBirthdate").innerHTML = "Birthdate: " + birthdate;
        document.getElementById("showHobby").innerHTML = "Hobby: " + strUser;
        document.getElementById("showGender").innerHTML = "Gender: "  + gender;
        document.getElementById("showBMIHeader").innerHTML = "Display your body mass index";
        document.getElementById("bmi").innerHTML = bmi;
        document.getElementById("synopsis").innerHTML = synopsis;

    }


    
}