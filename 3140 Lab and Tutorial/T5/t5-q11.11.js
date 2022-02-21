function start() {
	var button = document.getElementById("button");
	button.addEventListener("click", display, false);
}
function reverse(s) {
	var tockens = s.split(" ");
	var str = "";
	//document.writeln(tockens[0]);
	for (var i=tockens.length-1; i>=0; i--) {
		str = str+" "+tockens[i];
	}
	return str;
}
function display() {
	var s = document.getElementById("s").value;
	var result = document.getElementById("result");
	result.innerHTML = "The reverse sentence is: "+reverse(s);
}
window.addEventListener("load", start, false);