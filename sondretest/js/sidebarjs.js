$(function(){ //ready
	if (!!('.sidebarsticky').length) { //enkel måte å sjekke at sidebarsticky eksisterer, length har ikke value hvis den ikke eksisterer
		var sidebarstickyTop = $('.sidebarsticky').offset().top; //variable som returnerer tallet/antall px over(offset top) sidebarsticky
		
		$(window).scroll(function(){ //funksjonen som kjører hvis sidebarsticky eksisterer. funksjonen 'skjer' når bruker scroller
			var windowTop = $(window).scrollTop(); //variable som definierer når vinduet er på topp, som er når scroll er på topp
			
			if(sidebarstickyTop <= windowTop){
				$('.sidebarsticky').css({position: 'fixed', top: -10}); //hvis sidebarstickyTop er mindre enn eller lik toppen av vinduet så gi den fixed posisjon på skjermen 
			} else {
				$('.sidebarsticky').css({position: 'static', top: 0}); //hvis sidebarstickyTop er større så skal den fortsette å ha static posisjon på siden(default)
			}
		});
	}
	
});
