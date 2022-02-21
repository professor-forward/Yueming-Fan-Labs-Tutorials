function start() {
	var display = document.getElementById("text");
	display.innerHTML = "abs(-5.6) = " + Math.abs(-5.6) + "\n" +
	"ceil(-5.6) = " + Math.ceil(-5.6) + "\n" +
	"cos(0) = " + Math.cos(0) + "\n" +
	"exp(1) = " + Math.exp(1) + "\n" +
	"floor(-5.6) = " + Math.floor(-5.6) + "\n" +
	"log(2.718282) = " + Math.log(2.718282) + "\n" +
	"max(1,2) = " + Math.max(1,2) + "\n" +
	"min(1,2) = " + Math.min(1,2) + "\n" +
	"pow(2,2) = " + Math.pow(2,2) + "\n" +
	"round(9.25) = " + Math.abs(9.25) + "\n" +
	"sin(0) = " + Math.sin(0) + "\n" +
	"sqrt(9) = " + Math.sqrt(9) + "\n" +
	"tan(0) = " + Math.tan(0) + "\n";

}
window.addEventListener("load", start, false);