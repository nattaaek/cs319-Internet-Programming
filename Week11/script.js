function Display() {
    var name = document.getElementById("name").value;
    var lname = document.getElementById("lname").value;
    var firstphone = document.getElementById("firstphone").value;
    var lastphone = document.getElementById("lastphone").value;
    var birthdate = document.getElementById("birthdate").value;



    if(name == null || name == "" ,  lname == null || lname == "" , firstphone == null || firstphone == "" , lastphone == null || lastphone == "")
    {
        alert("Please fill out your data completely");
        return false;
    }
    else
    {
        document.getElementById("head").innerHTML = "Display personal's data";
        document.getElementById("showname").innerHTML = "Your name :" + name + " " + lname;
        document.getElementById("showlname").innerHTML = "Birthdate :" + birthdate;
        document.getElementById("showhobby").innerHTML = hobby;
    }
}
