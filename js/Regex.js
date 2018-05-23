function varr(){
    mail =document.getElementById('email');
    mmail =/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
}
function emailv() {
    varr();
    if (mmail.test(mail.value)) 
    {
        document.getElementById("email").classList.add('goo');
        document.getElementById("email").classList.remove('alr');
    }
    else{
        
        document.getElementById("email").classList.add('alr');
        document.getElementById("email").classList.remove('goo');
    }
}