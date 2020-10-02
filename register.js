function validation(){
    var name =document.getElementById("username").value.trim();
    var id=document.getElementById("register_no").value.trim();
    var email=document.getElementById("email").value.trim();
    var select=document.getElementById("select").value.trim();
    var error_meg=document.getElementById("meg");
    var iconname=document.getElementById("icon_name");
    var iconid=document.getElementById("icon_id");
    var iconemail=document.getElementById("icon_email");
    var text;

    if(name.length<5){
        error_meg.style.height="25px";
        text="Please enter valid name";
        error_meg.innerHTML=text;
        return false;
    }else{
        iconname.style.visibility="visible"
    }

    if(id.length==0){
        error_meg.style.height="25px";
        text="Please enter valid register number";
        error_meg.innerHTML=text;
        return false;
    }else{
        iconid.style.visibility="visible"
    }

    if(email.indexOf("@") == -1 ||email.indexOf(".") == -1|| email.length<8){
        error_meg.style.height="25px";
        text="Please enter valid email";
        error_meg.innerHTML=text;
        return false;
    }else{
        iconemail.style.visibility="visible"
    }

    if(select.length==0){
        error_meg.style.height="25px";
        text="Please Select the Department";
        error_meg.innerHTML=text;
        return false;
    }
    alert("Form submitted Successfully!")
    return true;
}