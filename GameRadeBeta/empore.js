window.addEventListener("load", start, false)

function start(){
	document.getElementById("addToCart1").addEventListener("click", paymentEnable, false);
	document.getElementById("addToCart2").addEventListener("click", paymentEnable, false);
	document.getElementById("addToCart3").addEventListener("click", paymentEnable, false);
	document.getElementById("addToCart4").addEventListener("click", paymentEnable, false);
	document.getElementById("addToCart5").addEventListener("click", paymentEnable, false);
	document.getElementById("paymentButton").addEventListener("click", payment, false);
	document.getElementById("defaultCreds").addEventListener("click", creds, false);
}

function paymentEnable(e){
	let id = e.target.getAttribute("id");
	
	switch(true){
		
		case id == "addToCart1":
		document.getElementById("paymentButton").disabled = false;
		window.alert("1 count YONEX EZONE 98 Tennis Racket is added to cart.");
		let prod1 = parseInt(document.getElementById("numberOf1").firstChild.nodeValue);
		
		prod1--;
		
		document.getElementById("numberOf1").innerHTML = prod1;
		
		break;
		
		case id == "addToCart2":
		document.getElementById("paymentButton").disabled = false;
		window.alert("1 count Precise 12mm Carrom Board is added to cart.");
		let prod2 = parseInt(document.getElementById("numberOf2").firstChild.nodeValue);
		
		prod2--;
		
		document.getElementById("numberOf2").innerHTML = prod2;
		
		break;
		
		case id == "addToCart3":
		document.getElementById("paymentButton").disabled = false;
		window.alert("1 count Franklin Sports Baseball Glove is added to cart.");
		let prod3 = parseInt(document.getElementById("numberOf3").firstChild.nodeValue);
		
		prod3--;
		
		document.getElementById("numberOf3").innerHTML = prod3;
		
		break;
		
		case id == "addToCart4":
		document.getElementById("paymentButton").disabled = false;
		window.alert("1 count PLUSINNO Fishing Rod and Reel is added to cart.");
		let prod4 = parseInt(document.getElementById("numberOf4").firstChild.nodeValue);
		
		prod4--;
		
		document.getElementById("numberOf4").innerHTML = prod4;
		
		break;
		
		case id == "addToCart5":
		document.getElementById("paymentButton").disabled = false;
		window.alert("1 count WILSON NBA Series Basketballs is added to cart.");
		let prod5 = parseInt(document.getElementById("numberOf5").firstChild.nodeValue);
		
		prod5--;
		
		document.getElementById("numberOf5").innerHTML = prod5;
		
		break;
	}
	
}


function payment(){
	
	document.getElementById("payArea").innerHTML = "Payment successful";
	
}

function creds(){
	
	document.getElementById("cardNo").value = "1234 5678 9101 1121";
	document.getElementById("cvv").value = 275;
	document.getElementById("month").value = 7;
	document.getElementById("year").value = 2025;
	
}