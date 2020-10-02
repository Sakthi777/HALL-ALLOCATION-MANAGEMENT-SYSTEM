function check(){
    var uname =document.getElementById("uname").value.trim();
    var reg=document.getElementById("id").value.trim();
    var dept=document.getElementById("dept").value;
    var year=document.getElementById("year").value;
    var error=document.getElementById("note");
    var flag;

    if(uname.length==0
        ){
        error.style.padding="6px";
        error.style.fontSize="15px";
        error.style.height="30px";
        flag="Please enter valid name";
        error.innerHTML=flag;
        return false;
    }

    if(reg.length==0){
        error.style.padding="6px";
        error.style.fontSize="15px";
        error.style.height="30px";
        flag="Please enter the valid id";
        error.innerHTML=flag;
        return false;
    }
    if(dept.length==0){
        error.style.padding="6px";
        error.style.fontSize="15px";
        error.style.height="30px";
        flag="Please Select the Department";
        error.innerHTML=flag;
        return false;
    }
    
    if(year.length==0){
        error.style.padding="6px";
        error.style.fontSize="15px";
        error.style.height="30px";
        flag="Please Select the Year";
        error.innerHTML=flag;
        return false;
    }

    return true;
}