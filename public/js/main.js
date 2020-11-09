
var onglet = document.querySelector("meta").getAttribute("name");

window.onload = function () {

	this.buildPage();						/* Construction header et footer*/
	this.menuItemColor(onglet);				/* Coloration item menu selectionné*/
}


window.onscroll = function () { 

	this.mySticky();						/* Ajout sitcky ou non*/
}  

//------------------------------------------------------------------------------------------------------------------------------

/*-------------------------------------------------------Builder de page pour afficher le header et footer automatiquement
*/
function buildPage() {
	var header = '<div class="background-image"><div class="layer"><div class="topnav" id="myTopnav"><!--<span id="logo" class="logo"></span>--><span id="contenuMenu" class="menu "><a href="accueil.html" id="1a">Accueil</a><a href="boutique.html" id="2a">Boutique</a><a href="compte.html" id="3a" onclick="">Compte client</a><a href="contact.html" id="4a" onclick="">Contact</a><a href="javascript:void(0);"class="icon" onclick="myFunction()"><i class="fa fa-bars"></i> </a></span></div><div class="homepage-title"><h1>ShopHouse</h1><h1>Le meilleur de lelectronique</h1></div></div></div>';
	var footer = '<div class="foot"><div class="footer-wrapper"><div class="social-icons-wrapper"><div class="social-footer-icon"><a href="https://www.facebook.com/" target="_blank"><span class="social-footer-facebook"></span></a></div><div class="social-footer-icon"><a href="https://www.instagram.com/" target="_blank"><span class="social-footer-instagram"></span></a></div><div class="social-footer-icon"><a href="https://www.pinterest.com/" target="_blank"><span class="social-footer-pinterest"></span></a></div></div><div class="links"><p class="footerLink"><a href="Accueil.html">Accueil</a></p><p class="footerLink"><a href="contact.html">Contactez-nous</a></p><p class="footerLink"><a href="QuiSommesNous.html">A propos</a></p><p class="footerLink"><a href="politique-de-confidentialite">Politique de confidentialité</a></p></div><div class="copyrights"><span>ShopHouse © 2020</span><br><span>Tous droits réservés</span></div></div></div>';
	var ancre = ' <div id="ancre" class="ancre" onclick="scrollToTop(500)"><a href="#haut"><img src="Ressources/top.png" /></a></div>'

	$("#header").append(header);
	$("#footer").append(footer);
	$("#buildAncre").append(ancre);
	//document.getElementById("buildAncre").innerHTML = ancre;

}

/*------------------------------------------------------Gestion menu
*/


function scrollToTop(scrollDuration) {
	var scrollStep = -window.scrollY / (scrollDuration / 15),
		scrollInterval = setInterval(function () {
			if (window.scrollY != 0) {
				window.scrollBy(0, scrollStep);
			}
			else clearInterval(scrollInterval);
		}, 15);
	document.body.scrollTop = 0;
}
  
/*------------------------------------------------------Gestion menu
*/



// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function mySticky() {
	// Get the header
	var header = document.getElementById('myTopnav');
	// Get the offset position of the navbar
	var sticky = myTopnav.offsetTop;
	if (window.pageYOffset > sticky) {
		header.classList.remove("sticky");
		header.classList.add("sticky");

	} else {header.classList.add("sticky");
		header.classList.remove("sticky");
	}
}

function menuItemColor(onglet){

	switch (onglet) {
		case "Accueil":
			document.getElementById("1a").classList.add("active");
			break;
		case "Boutique":
			document.getElementById("2a").classList.add("active");
			//this.document.getElementById("plan").classList.remove("contenu");
			//this.document.getElementById("plan").classList.add("contenu1");
			break;
		case "Client":
			document.getElementById("3a").classList.add("active");
            break;
        case "Contact":
			document.getElementById("4a").classList.add("active");
			break;
		default:
			break;
	}

};