function SignUpValidation(){
    var name= document.getElementById("loginName").value;
    var email=document.getElementById("loginEmail").value;
    var pass=document.getElementById("loginPassword").value;
    var confirmpass=document.getElementById("loginPasswordConfirm").value;
    //var msgName=docmuent.getElementById("msgName");
    if (name == '' || email == '' || pass == '' || confirmpass== '') {
        alert("please fill all fields");
        return false;
    }
    if(name.length<3){
        alert("Name should be more tha 3 letters");
        return false;
    }
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length){
        alert("Please use a valid email");
        return false;
    }
    if(pass!=confirmpass){
        alert("Passwords don't match!!");
        return false;
    }

    return true;
}