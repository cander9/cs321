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
    intRegex = /[0-9 -()+]+$/; /*source: https://www.sitepoint.com/jquery-check-phone-number-email/*/
    if( phone === "" ){
        console.log( "Empty" );
        errorphone.innerHTML = "your phone number is required to complete this form";
        errorphone.classList.add( "showerror" );
        console.log( errorphone );
    } else if((phone.length < 10) || (!intRegex.test(phone))){
        console.log( "Wrong format" );
        errorphone.innerHTML = "your phone number must be in ###-###-#### format";
        errorphone.classList.add( "showerror" );
        console.log( errorphone );
    }
    else {
        console.log( "NOT Empty" );
        errorphone.innerHTML = "";
        errorphone.classList.remove( "showerror" );
        console.log( errorphone );
    }
}
