function processLinks() {
	var linksList = document.links; 
	var contents = "<ul>";

	for ( var i = 0; i < linksList.length; ++i ) {
		var currentLink = linksList[ i ];
		contents += "<li><a href='" + currentLink.href + "'>" + currentLink.innerHTML + "</li>";
	} 

	contents += "</ul>";
	document.getElementById( "links" ).innerHTML = contents;
	for (i=0; i<8; i++) {
		document.getElementsByTagName("A")[i].setAttribute("style", "background-color: yellow");
	}
} 

window.addEventListener( "load", processLinks, false );
