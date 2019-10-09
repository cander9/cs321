function checkAll(){
    checkName1();
    checkName2();
    checkPhone();
    checkEmail();
    checkRadioButts();
    checkChecks();
}

function checkName1(){
    var name1 = document.getElementById( "name1" ).value.trim() ;
    var errorname1 = document.getElementById( "errorname1" );
    if( name1 === "" ){
        console.log( "Empty" );
        errorname1.innerHTML = "your name is required to complete this form"
        errorname1.classList.add( "showerror" );
        console.log( errorname1 );
    } else {
        console.log( "NOT Empty" );
        errorname1.innerHTML = "";
        errorname1.classList.remove( "showerror" );
        console.log( errorname1 );
    }
}

function checkName2(){
    var name2 = document.getElementById( "name2" ).value.trim() ;
    var errorname2 = document.getElementById( "errorname2" );
    if( name2 === "" ){
        console.log( "Empty" );
        errorname2.innerHTML = "your name is required to complete this form";
        errorname2.classList.add( "showerror");
        console.log( errorname2 );
    } else {
        console.log( "NOT Empty" );
        errorname2.innerHTML = "";
        errorname2.classList.remove( "showerror" );
        console.log( errorname2 );
    }
}

function checkPhone(){
    var phone = document.getElementById( "phone" ).value.trim() ;
    var errorphone = document.getElementById( "errorphone" );
    checkp = /^\d\d\d-\d\d\d-\d\d\d\d$/; /*source: https://www.rexegg.com/regex-quickstart.html#chars*/
    if( phone === "" ){
        console.log( "Empty" );
        errorphone.innerHTML = "your phone number is required to complete this form";
        errorphone.classList.add( "showerror" );
        console.log( errorphone );
    } else if(!checkp.test(phone)){
        console.log( "Wrong format" );
        errorphone.innerHTML = "your phone number must be in ###-###-#### format";
        errorphone.classList.add( "showerror" );
        console.log( errorphone );
    }
    else {
        console.log("NOT Empty");
        errorphone.innerHTML = "";
        errorphone.classList.remove("showerror");
        console.log(errorphone);
    }
}

function checkEmail(){
    var email = document.getElementById( "email" ).value.trim() ;
    var erroremail = document.getElementById( "erroremail" );
    check = /^\w+@\w+.\w+$/; /*source: https://www.rexegg.com/regex-quickstart.html#chars*/
    if( email === "" ){
        console.log( "Empty" );
        erroremail.innerHTML = "your email is required to complete this form";
        erroremail.classList.add( "showerror" );
        console.log( erroremail );
    } else if(!check.test(email)){
        console.log( "Wrong format" );
        erroremail.innerHTML = "invalid email address";
        erroremail.classList.add( "showerror" );
        console.log( erroremail );
    }
    else {
        console.log("NOT Empty");
        erroremail.innerHTML = "";
        erroremail.classList.remove("showerror");
        console.log(erroremail);
    }
}

function checkRadioButts() {
    var errorradio = document.getElementById( "errorradio" );
    var flag = false;
    if (document.getElementById( "radio1" ).checked){
        flag = true;
    }
    else if (document.getElementById( "radio2" ).checked){
        flag = true;
    }
    else if (document.getElementById( "radio3" ).checked){
        flag = true;
    }
    if (flag == false){
        console.log( "Empty selection" );
        errorradio.innerHTML = "you must select a size";
        errorradio.classList.add( "showerror" );
        console.log( errorradio );
    }
}

function checkChecks() {
    var errorcheck = document.getElementById( "errorcheck" );
    var flag = 0;
    if (document.getElementById( "check1" ).checked){
        flag = flag + 1;
    }
    if (document.getElementById( "check2" ).checked){
        flag = flag + 1;
    }
    if (document.getElementById( "check3" ).checked){
        flag = flag + 1;
    }
    if (flag < 2){
        console.log( "Empty selection" );
        errorcheck.innerHTML = "you must select at least 2 checkboxes";
        errorcheck.classList.add( "showerror" );
        console.log( errorcheck );
    }
}


