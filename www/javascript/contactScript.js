function checkName(){
    var name = document.getElementById( "name" ).value.trim() ;
    var errorname = document.getElementById( "errorname" );
    if( name == "" ){
        console.log( "Empty" );
        errorname.innerHTML = "your name is required to complete this form";
        errorname.classList.add( "showerror" );
        console.log( errorname );
    } else {
        console.log( "NOT Empty" );
        errorname.innerHTML = "";
        errorname.classList.remove( "showerror" );
        console.log( errorname );
    }
}
