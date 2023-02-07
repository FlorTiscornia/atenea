let emailUser = document.getElementById('email');
const validation = document.getElementById ('createStudentButton');
const response = document.getElementById ('response');
console.log(validation);

function validateEmail(mail){
    const regularExpr = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
    return regularExpr.test(mail);
}

validation.addEventListener("click",function(){
    const studentMail = emailUser.value; 
    if(validateEmail(studentMail)){
        response.innerHTML ="Correcto: La dirección de correo " + mail + " es correcta."
    }else{
        response.innerHTML ="Incorrecto: La dirección de correo " + mail + " es incorrecta."
        emailUser.classList.add('error');

    }
});
console.log(emailUser.value);