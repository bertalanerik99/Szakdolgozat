let ispwdcorrect = false;
let ispwdcorrect2 = false;
let isusernamecorrect = false;
let ismailcorreect = false;
let isphonenumbercorrect = false;
let islastnamecorrect = false;
let isfirstnamecorrect = false;
let ispostcodecorrect = false;
let issettlementcorrect = false;
let isaddresscorrect = false;

function buttonactivate(){
    if((ispwdcorrect == true) && (ispwdcorrect2 == true) && (isusernamecorrect == true) && (ismailcorreect == true)
        && (isphonenumbercorrect == true) && (islastnamecorrect == true) && (isfirstnamecorrect == true)
        && (ispostcodecorrect == true) && (isfirstnamecorrect == true) && (isaddresscorrect == true))
    {
        document.getElementById("signup-button").removeAttribute('disabled');
    }
    else{
        document.getElementById("signup-button").setAttribute('disabled',"");
    }
}

//jelszómező ellenőrzé
passwordinput = document.getElementById("pwd");
passwordinput.addEventListener("click",pwdfunction);
function pwdfunction(){
    passwordinput.addEventListener("keyup", passwordcheck);
    passwordinput.addEventListener("mousemove", passwordcheck);
    passwordinput.addEventListener("keyup", buttonactivate);
    passwordinput.addEventListener("mousemove", buttonactivate);
}
function passwordcheck() {
    let x = document.forms["signup-form"]["pwd"].value;
    length = x.length;
    
    if ((length > 7) && (/^[a-zA-Z0-9]+$/.test(x))) {
        passwordinput.style.borderColor = "green";
        ispwdcorrect = true;
    }
    else{
        passwordinput.style.borderColor = "red";
        ispwdcorrect = false;
    }
    
}


//2. jelszómező ellenőrzése
passwordinput2 = document.getElementById("pwd2");
passwordinput2.addEventListener("click",pwdfuntion2);
function pwdfuntion2(){
    passwordinput2.addEventListener("keyup", passwordcheck2);
    passwordinput2.addEventListener("mousemove", passwordcheck2);
    passwordinput2.addEventListener("keyup", buttonactivate);
    passwordinput2.addEventListener("mousemove", buttonactivate);
}
function passwordcheck2() {
    let x = document.forms["signup-form"]["pwd"].value;
    let x2 = document.forms["signup-form"]["pwd2"].value;
    
    if (x == x2 && x2 != "" && ispwdcorrect == true) {
        passwordinput2.style.borderColor = "green";
        ispwdcorrect2 = true;
    }
    else{
        passwordinput2.style.borderColor = "red";
        ispwdcorrect2 = false;
    }
    
}

//felhasználónév ellenőrzése
usernameinput = document.getElementById("uid");
usernameinput.addEventListener("click", usernamefunction);
function usernamefunction(){
    usernameinput.addEventListener("keyup", usernamecheck);
    usernameinput.addEventListener("mousemove", usernamecheck);
    usernameinput.addEventListener("keyup", buttonactivate);
    usernameinput.addEventListener("mousemove", buttonactivate);
}
function usernamecheck(){
    let x = document.forms["signup-form"]["uid"].value;
    if(/^[a-zA-Z0-9.-]+$/.test(x)){
        usernameinput.style.borderColor = "green";
        isusernamecorrect = true;
    }else{
        usernameinput.style.borderColor = "red";
        isusernamecorrect = false;
    }
}
//email ellenőrzés
 emailinput = document.getElementById("mail");
 emailinput.addEventListener("click", mailfunction);
 function mailfunction(){
    emailinput.addEventListener("keyup",emailcheck);
    emailinput.addEventListener("mousemove",emailcheck);
    emailinput.addEventListener("keyup", buttonactivate);
    emailinput.addEventListener("mousemove", buttonactivate);
 }
 function emailcheck(){
    let x = document.forms["signup-form"]["mail"].value;
    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(x.match(mailformat)){
        emailinput.style.borderColor = "green";
        ismailcorreect = true;
    }else{
        emailinput.style.borderColor = "red";
        ismailcorreect = false;
    }
 }
 //telefonszám ellenőrzés
 phoneinput = document.getElementById("phone");
 phoneinput.addEventListener("click", phonefunction);
 function phonefunction(){
    phoneinput.addEventListener("keyup", phonecheck);
    phoneinput.addEventListener("mousemove", phonecheck);
    phoneinput.addEventListener("keyup", buttonactivate);
    phoneinput.addEventListener("mousemove", buttonactivate);
 }
 function phonecheck(){
    let x = document.forms["signup-form"]["phone"].value;
    let phoneformat = /((?:\+?3|0)6)(?:-|\()?(\d{1,2})(?:-|\))?(\d{3})-?(\d{3,4})/;
    if(x.match(phoneformat)){
        phoneinput.style.borderColor = "green";
        isphonenumbercorrect = true;

    }else{
        phoneinput.style.borderColor = "red";
        isphonenumbercorrect = false;
    }
 }
 //vezetéknév ellenőrzés
 lastnameinput = document.getElementById("lastname");
 lastnameinput.addEventListener("click", lastnamefunction);
 function lastnamefunction(){
    lastnameinput.addEventListener("keyup", lastnamecheck);
    lastnameinput.addEventListener("mousemove", lastnamecheck);
    lastnameinput.addEventListener("keyup", buttonactivate);
    lastnameinput.addEventListener("mousemove", buttonactivate);
 }
 function lastnamecheck(){
    let x = document.forms["signup-form"]["lastname"].value;
    if(/^[a-zA-Z0-9.-]+$/.test(x)){
        lastnameinput.style.borderColor = "green";
        islastnamecorrect = true;

    }else{
        lastnameinput.style.borderColor = "red";
        islastnamecorrect = false;
    }
 }
// keresztnév ellenőrzés
 firstnameinput = document.getElementById("firstname");
 firstnameinput.addEventListener("click", firstnamefunction);
 function firstnamefunction(){
    firstnameinput.addEventListener("keyup", firstnamecheck);
    firstnameinput.addEventListener("mousemove", firstnamecheck);
    firstnameinput.addEventListener("keyup", buttonactivate);
    firstnameinput.addEventListener("mousemove", buttonactivate);
 }
 function firstnamecheck(){
    let x = document.forms["signup-form"]["firstname"].value;
    if(/^[a-zA-Z0-9.-]+$/.test(x)){
        firstnameinput.style.borderColor = "green";
        isfirstnamecorrect = true;
    }else{
        firstnameinput.style.borderColor = "red";
        isfirstnamecorrect = false;
    }
 }
 //irányítószám ellenőrzés
 
 postcodeinput = document.getElementById("postcode");
 postcodeinput.addEventListener("click", postcodefunction);
 function postcodefunction(){
    postcodeinput.addEventListener("keyup", postcodcheck);
    postcodeinput.addEventListener("mousemove", postcodcheck);
    postcodeinput.addEventListener("keyup", buttonactivate);
    postcodeinput.addEventListener("mousemove", buttonactivate);
 }
 function postcodcheck(){
    let x = document.forms["signup-form"]["postcode"].value;
    if(x>1000 && x < 10000){
        postcodeinput.style.borderColor = "green";
        ispostcodecorrect = true;
    }
    else{
        postcodeinput.style.borderColor = "red";
        ispostcodecorrect = false;
    }
 }
 // településellenőrzés
 settlementinput = document.getElementById("settlement");
 settlementinput.addEventListener("click", settlementfunction);
 function settlementfunction(){
    settlementinput.addEventListener("keyup", settlementcheck);
    settlementinput.addEventListener("mousemove", settlementcheck);
    settlementinput.addEventListener("keyup", buttonactivate);
    settlementinput.addEventListener("mousemove", buttonactivate);
 }
 function settlementcheck(){
    let x = document.forms["signup-form"]["settlement"].value;
    if(x.length > 0){
        settlementinput.style.borderColor = "green";
        issettlementcorrect = true;

    }else{
        settlementinput.style.borderColor = "red";
        issettlementcorrect = false;
    }
 }
//cím ellenőrzé
addressinput = document.getElementById("address");
addressinput.addEventListener("click", addressfunction);
function addressfunction(){
    addressinput.addEventListener("keyup", addresscheck);
    addressinput.addEventListener("mousemove", addresscheck);
    addressinput.addEventListener("keyup", buttonactivate);
    addressinput.addEventListener("mousemove", buttonactivate);
 }
 function addresscheck(){
    let x = document.forms["signup-form"]["address"].value;
    if(x.length > 0){
        addressinput.style.borderColor = "green";
        isaddresscorrect = true;

    }else{
        addressinput.style.borderColor = "red";
        isaddresscorrect = false;
    }
 }
