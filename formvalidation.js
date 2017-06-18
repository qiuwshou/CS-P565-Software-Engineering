function validateForm() {
    var x = document.registration.passwordsignup.value;
    var y = document.registration.passwordsignup_confirm.value;
    if ( x!=y ){
        alert("Passwords don't match");
        return false;
    }
}