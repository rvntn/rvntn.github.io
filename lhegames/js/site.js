//carousel for page
var car = $('.carousel-item');
setInterval(function(){ 
	for(let i = 0; i < car.length; i++ ){
		$('.column')[i].className = "column";
		if(car[i] == $('.carousel-item.active')[0]){
			$('.column')[i].className = "column active";
		   }
	}
}, 300);
/*var link = $('a[href]');
for(let i = 0; i < link.length; i++ ){
	if(link[i] != $('.navbar-brand')[0] | link[i] != $('.nav-link')[0]){
	   $('a[href]')[i].target = "_blank";
	   }
}*/
//change all profile link
$('.nav-link')[2].href ="profil.html"
$('.avatar')[0].href ="profil.html"