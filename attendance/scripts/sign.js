function successRedirect() {
	window.location.href = "user.php";
}

function regUserVerify(){
	
	name = document.getElementById('name').value;	
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "regCheck.php?name="+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {

 		document.getElementById("error-user").innerHTML = this.responseText;
		
		}
	};
}

function regMailVerify(){
	
	email = document.getElementById('email').value;	
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "regCheck.php?email="+email, true);
	xhttp.send();

	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {

 		document.getElementById("error-mail").innerHTML = this.responseText;
		
		}
	};
}

function regPhoneVerify(){
	
	phone = document.getElementById('phone').value;	
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "regCheck.php?phone="+phone, true);
	xhttp.send();

	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {

 		document.getElementById("error-phone").innerHTML = this.responseText;

		}
	};
}

function regPassVerify(){
	
	/*name = document.getElementById('pass').value;	
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "abc.php?name="+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById('loadimage').style.display = 'none';
 		document.getElementById("div1").innerHTML = this.responseText;
		}
	};*/
}

function regRepassVerify(){
	
	/*name = document.getElementById('repass').value;	
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST", "abc.php?name="+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		document.getElementById('loadimage').style.display = 'none';
 		document.getElementById("div1").innerHTML = this.responseText;
		}
	};*/
}