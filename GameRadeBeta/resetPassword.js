window.addEventListener("load", start, false);

function start(){
	document.getElementById("resetPwd").addEventListener("click", showResetForm, false);
	document.getElementById("goToChangePassword").addEventListener("click", showChangePasswordForm, false);
}

function showResetForm(){
	let passwordResetForm = "<form method = \"POST\" action = \"signIn.php\">User Name: <input type = \"text\" id = \"userName\" name = \"userName\">Email: <input type = \"email\" id = \"eMail\" name = \"eMail\"> New Password: <input type = \"password\" id = \"password\" name = \"password\">Confirm Password: <input type = \"password\" id = \"passwordConf\" name = \"passwordConf\"><input class = \"buttonType\" type = \"submit\" id = \"resetPassword\" name = \"resetPassword\" value = \"Reset Password\"></form>";
	
	document.getElementById("resetFormArea").innerHTML = passwordResetForm;
}