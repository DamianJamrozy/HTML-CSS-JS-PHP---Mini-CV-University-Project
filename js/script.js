var mob=0, web=0, desk=0, vid=0, soc=0, gra=0; // Definiowanie zmiennych potrzebnych do sprawdzenia czy wybrany produkt został dodany do koszyka



function mobile(){
	++mob;
	alert("Dodano do koszyka.");
	sessionStorage.setItem("mob", mob);
}

function weeb(){
	++web;
	alert("Dodano do koszyka.");
	sessionStorage.setItem("web", web);
}

function desktop(){
	++desk;
	sessionStorage.setItem("desk", desk);
	alert("Dodano do koszyka.");
	
}

function video(){
	++vid;
	sessionStorage.setItem("vid", vid);
	alert("Dodano do koszyka.");
}

function social_media(){
	++soc;
	sessionStorage.setItem("soc", soc);
	alert("Dodano do koszyka.");
}


function graphic(){
	++gra;
	sessionStorage.setItem("gra", gra);
	alert("Dodano do koszyka.");
}
	
	
	
	