// validation for register form
let check = true;
function checkForm(){
    let f_name = document.getElementById("f-name");
    let l_name = document.getElementById("l-name");
    let user_name = document.getElementById("user-name");
    let pass= document.getElementById("pass");
    let re_pass =document.getElementById("re-pass");
    if(f_name.value.length===0){
        check = false;
        document.getElementById("er-f-name").innerText="*Not empty ";
    }else{
                document.getElementById("er-f-name").innerText=" ";
    }
    if (l_name.value.length === 0) {
        check = false;
        document.getElementById("er-l-name").innerText = "*Not empty ";
    }else{
                document.getElementById("er-l-name").innerText = " ";
    }
    if (user_name.value.length === 0) {
        check = false;
        document.getElementById("er-user-name").innerText = "*Not empty ";
    }else{
                document.getElementById("er-user-name").innerText = " ";
    }
    if (pass.value.length === 0) {
        check = false;
        document.getElementById("er-password").innerText = "*Not empty ";
    }
    else if (pass.value.length < 8) {
        check=false;
        document.getElementById("er-password").innerText = "*password have to more than 8 character";
    } else{
                document.getElementById("er-password").innerText = " ";
    }
    if (re_pass.value.length === 0) {
        check = false;
        document.getElementById("er-re-password").innerText = "*Not empty ";
    }else{
                document.getElementById("er-re-password").innerText = " ";
    }
    return check;
}