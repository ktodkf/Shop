function validate()
{
    let x=document.forms['form']['password'].value;
    let y=document.forms['form']['email'].value;
    let check;
    if (y.length==0){
        document.getElementById('emailf').innerHTML='<br>'+'*данное поле обязательно для заполнения';
        check= false;
        return check;
    }
    if (x.length==0){
        document.getElementById('passwordf').innerHTML='<br>'+'*данное поле обязательно для заполнения';
        check= false;
        return check;
    }
    //Проверим содержит ли значение введенное в поле email символы @ и .
    at=y.indexOf("@");
    dot=y.indexOf(".");
    //Если поле не содержит эти символы знач email введен не верно
    if (at<1 || dot <1){
        document.getElementById('emailf').innerHTML='<br>'+'*email введен не верно';
        check= false;
        return check;
    }


}
    
function show_hide_password(target){
    var input = document.getElementById('password-input');
    if (input.getAttribute('type') == 'password') {
        target.classList.add('view');
        input.setAttribute('type', 'text');
    } else {
        target.classList.remove('view');
        input.setAttribute('type', 'password');
    }
    return false;
}

