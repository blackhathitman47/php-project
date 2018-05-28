function varr(){
    mail =document.getElementById('femail');
    mess =document.getElementById('fmessage');
    btn =document.getElementById('bbtn');
    mmail =/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    mmess =/[a-zA-Z0-9_.+-]/;
    var x=0;
    var y=0;
}
function emailv() {
    varr();
    if (mmail.test(mail.value)) 
    {
        document.getElementById("femail").classList.add('goo');
        document.getElementById("femail").classList.remove('alr');
        x=1;
    }
    else{
        
        document.getElementById("femail").classList.add('alr');
        document.getElementById("femail").classList.remove('goo');
        x=0;
    }
    if(x==1 && y==1){
        btn.disabled = false;
    }else{
        btn.disabled = true;
    }
}

function messv() {
    varr();
    if (mmess.test(mess.value)) 
    {
        
        document.getElementById("fmessage").classList.add('goo');
        document.getElementById("fmessage").classList.remove('alr');
        y=1;
    }
    else{
        
        document.getElementById("fmessage").classList.add('alr');
        document.getElementById("fmessage").classList.remove('goo');
        y=0;
    }
    if(x==1 && y==1){
        btn.disabled = false;
    }else{
        btn.disabled = true;
    }
}
