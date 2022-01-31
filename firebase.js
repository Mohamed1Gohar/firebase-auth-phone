window.onload = function() {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function phoneAuth() {
    //get the number
    var number = document.getElementById('number').value;
    // alert(number);
    //it takes two parameter first one is number and second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        alert("Message Success");
        $('#verifiCode').removeClass('d-none');
    }).catch(function(error) {
        alert(error.message);
    });
}

function codeverify() {
    var code = document.getElementById('verificationCode').value;

    
    coderesult.confirm(code).then(function(result){
    // User signed in successfully.
    const user = result.user;
    console.log(user);
    alert("Success SignIn (check console) ");
    $('#verifiCode').addClass('d-none');
    // ...
    }).catch((error) => {
    // User couldn't sign in (bad verification code?)
        console.log(error.message);
        
    });


}