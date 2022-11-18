window.addEventListener("load", start, false);

function start(){
	document.getElementById("toggleButton").addEventListener("click", darkModeSwitch, false);
}

function darkModeSwitch(){
	
	if(document.getElementById("toggleButton").value == "Dark mode"){
		document.getElementById("toggleButton").value = "Light mode";
	}else{
		document.getElementById("toggleButton").value = "Dark mode";
	}
	
	document.body.classList.toggle("darkModeButtonToLightMode");
	document.getElementById("toggleButton").classList.toggle("lightModeButton");
	document.getElementById("footer").classList.toggle("footerDark");
	document.getElementById("Desc").classList.toggle("Desc-darkmode");
	document.getElementById("Desc1").classList.toggle("Desc-darkmode");
}