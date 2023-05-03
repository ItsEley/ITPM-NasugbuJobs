let loginPassStatus = false;

function showPass(){
    let getLoginInput = document.getElementById("id_password");

    if (loginPassStatus === false){
        getLoginInput.setAttribute("type","text");
        loginPassStatus =true;

    }else if( loginPassStatus === true){
        getLoginInput.setAttribute("type","password");
        loginPassStatus =false;


    }


    

}