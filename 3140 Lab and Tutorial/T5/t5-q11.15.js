function start() {
	var button = document.getElementById("button");
	button.addEventListener("click", display, false);
}
function findB(s) {
	var words = s.split(" ");
	var str = "";
	for (var i=0; i<words.length; i++) {
		if (words[i][0] == "b") {
			str = str+" "+words[i];
		}
		
	}
	return str;
}
function display() {
	var s = document.getElementById("s").value;
	var result = document.getElementById("result");
	result.innerHTML = "The words begin with 'b' in this sentence is: "+findB(s);
}
window.addEventListener("load", start, false);