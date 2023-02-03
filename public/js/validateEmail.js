let emailUser = document.getElementById('email');
const validation = document.getElementById ('createStudentButton');
const errorEmail = document.getElementById ('errorEmail');

function validateEmail(mail){
    const regularExpr = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
    return regularExpr.test(mail);
}

validation.addEventListener("click",function(){
    const regularExpr = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/; 
    const studentMail = emailUser.value; 
    if(!regularExpr.test(studentMail)){
        errorEmail.innerHTML ="Error: La dirección de correo " + mail + " es incorrecta."
        emailUser.classList.add('error');
    }    
});