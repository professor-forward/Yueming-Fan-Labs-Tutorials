function start() {
	var display = document.getElementById("button");
	display.addEventListener("click", show, false);
}
function roundToInteger(x) {
	return (Math.floor(x*10+0.5)/10);
}
function roundToTenths(x) {
	return (Math.floor(x*100+0.5)/100);
}
function roundToHundredths(x) {
	return (Math.floor(x*1000+0.5)/1000);
}
function roundToThousandths(x) {
	return (Math.floor(x*10000+0.5)/10000);
}
function show() {
	var x = parseFloat(document.getElementById("num").value);
	var result = document.getElementById("text");
	result.innerHTML = "You entered "+x+"\nThe round result is: "+roundToInteger(x)+
	"\nThe round result of tenth position is: "+roundToTenths(x)+
	"\nThe round result of Hundredth is: "+roundToHundredths(x)+
	"\nThe round result of Thousandth is: "+roundToThousandths(x);

}
window.addEventListener("load", start, false);