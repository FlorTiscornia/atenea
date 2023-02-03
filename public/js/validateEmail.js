let emailUser = document.getElementById('email');
const validation = document.getElementById ('createStudentButton');
const errorEmail = document.getElementById ('errorEmail');

function validateEmail(mail){
    const regularExpr = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    return regularExpr.test(mail);
}

validation.addEventListener("click",function(){    
    const mail = emailUser.value; 
    if(!regularExpr.test(mail))
    errorEmail.innerHTML ="Error: La dirección de correo " + mail + " es incorrecta."
    emailUser.classList.add('error');
})