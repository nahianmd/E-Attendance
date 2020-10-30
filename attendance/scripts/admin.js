function ajaxSearch(){
	string = document.getElementById('searchString').value;
  		
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "../pages/adminSearch.php?string="+string, true);
	xhttp.send();

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
	 		document.getElementById("adminSearchRes").innerHTML = this.responseText;
		}
	};
}

function record(){
	// document.getElementById("adminSearchRes").innerHTML = "Hello there!!!";
	// console.log("Hey");
  		
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET", "../pages/showRecord.php", true);
	xhttp.send();

	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
	 		document.getElementById("adminSearchRes").innerHTML = this.responseText;
		}
	};
}