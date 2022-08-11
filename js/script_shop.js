var f1 = document.getElementById('product_first');
var f2 = document.getElementById('product_secound');
var f3 = document.getElementById('product_third');
var f4 = document.getElementById('product_fourth');
var f5 = document.getElementById('product_fifth');
var f6 = document.getElementById('product_sixth');
var buttonek = document.getElementById('check_it');
var empty = document.getElementById('empty');
var suma1 = 0, suma2 = 0, suma3 = 0, suma4 = 0, suma5 = 0, suma=0, suma_rabat=0, rabat=0, rabat_proc=0;


var mob = sessionStorage.getItem("mob");
var web = sessionStorage.getItem("web");
var desk = sessionStorage.getItem("desk");
var vid = sessionStorage.getItem("vid");
var soc = sessionStorage.getItem("soc");
var gra = sessionStorage.getItem("gra");
console.log(mob);
console.log(web);
console.log(desk);
console.log(vid);
console.log(soc);
console.log(gra);
mob = parseInt(mob, 10);
web = parseInt(web, 10);
desk = parseInt(desk, 10);
vid = parseInt(vid, 10);
soc = parseInt(soc, 10);
gra = parseInt(gra, 10);

// Wyświetlanie zamówień w koszyku

if(mob>=1){
	f1.style.display = "block";
	buttonek.style.display = "block";
	empty.style.display = "none";
}
if(web>=1){
	f2.style.display = "block";
	buttonek.style.display = "block";
	empty.style.display = "none";
}
if(desk>=1){
	f3.style.display = "block";
	buttonek.style.display = "block";
	empty.style.display = "none";
}
if(vid>=1){
	f4.style.display = "block";
	buttonek.style.display = "block";
	empty.style.display = "none";
}
if(soc>=1){
	f5.style.display = "block";
	buttonek.style.display = "block";
	empty.style.display = "none";
}
if(gra>=1){
	f6.style.display = "block";
	buttonek.style.display = "block";
	empty.style.display = "none";
}


// Usuwanie zamównień z koszyka

function cancel_first (){
	f1.style.display = "none";
	mob=0;
	sessionStorage.setItem("mob", mob);
}

function cancel_sec (){
	f2.style.display = "none";
	web=0;
	sessionStorage.setItem("web", web);
}

function cancel_thr (){
	f3.style.display = "none";
	desk=0;
	sessionStorage.setItem("desk", desk);
}

function cancel_for (){
	f4.style.display = "none";
	vid=0;
	sessionStorage.setItem("vid", vid);
}

function cancel_fif (){
	f5.style.display = "none";
	soc=0;
	sessionStorage.setItem("soc", soc);
}

function cancel_six (){
	f6.style.display = "none";
	gra=0;
	sessionStorage.setItem("gra", gra);
}


// Jeżeli usuniemy wszsytkie elementy z koszyka

if(f1.style.display === "none" && f2.style.display === "none" && f3.style.display === "none" && f4.style.display === "none" && f5.style.display === "none" && f6.style.display === "none"){
	buttonek.style.display = "none";
	empty.style.display = "block";
}



// Sumowanie kosztów

function cost(){
	suma1 = 0; suma2 = 0; suma3 = 0;suma4 = 0; suma5 = 0; suma=0; suma_rabat=0; rabat=0; rabat_proc=0;
	
	// Podliczanie aplikacji mobilnej
	if(f1.style.display === "block"){
		// Ilość ekranów
		if(document.getElementById("mob_screen_1").selected === true){
			suma1+=2000;
		}
		else if(document.getElementById("mob_screen_2").selected === true){
			suma1+=3000;
		}
		else if(document.getElementById("mob_screen_3").selected === true){
			suma1+=4000;
		}
		else if(document.getElementById("mob_screen_4").selected === true){
			suma1+=5000;
		}
		else if(document.getElementById("mob_screen_5").selected === true){
			suma1+=6000;
		}
		else if(document.getElementById("mob_screen_6").selected === true){
			suma1+=7000;
		}
		else if(document.getElementById("mob_screen_7").selected === true){
			suma1+=8000;
		}
		else if(document.getElementById("mob_screen_8").selected === true){
			suma1+=9000;
		}
		else if(document.getElementById("mob_screen_9").selected === true){
			suma1+=10000;
		}
		else if(document.getElementById("mob_screen_10").selected === true){
			suma1+=11000;
		}
		else if(document.getElementById("mob_screen_more").selected === true){
			suma1+=30000;
		}
		
		//Dodatkowe opcje
		if(document.getElementById("mob_options_1").checked === true){
			suma1+=8000;
		}
		if(document.getElementById("mob_options_2").checked === true){
			suma1+=5000;
		}
		if(document.getElementById("mob_options_3").checked === true){
			suma1+=3000;
		}
		if(document.getElementById("mob_options_4").checked === true){
			suma1+=1500;
		}
		if(document.getElementById("mob_options_5").checked === true){
			suma1+=12000;
		}
		if(document.getElementById("mob_options_6").checked === true){
			suma1+=10000;
		}
	}
	else{
		suma1=0;
	}
	
	
	
	
	
	
	//Aplikacja weebowa
	if(f2.style.display === "block"){
		//Typ strony
		if(document.getElementById("web_1").selected === true){
			suma2+=1000;
		}
		else if(document.getElementById("web_2").selected === true){
			suma2+=2500;
		}
		else if(document.getElementById("web_3").selected === true){
			suma2+=1500;
		}
		else if(document.getElementById("web_4").selected === true){
			suma2+=3000;
		}
		
		
		//Ilość podstron
		if(document.getElementById("web_side_1").selected === true){
			suma2+=50;
		}
		else if(document.getElementById("web_side_2").selected === true){
			suma2+=100;
		}
		else if(document.getElementById("web_side_3").selected === true){
			suma2+=150;
		}
		else if(document.getElementById("web_side_4").selected === true){
			suma2+=200;
		}
		else if(document.getElementById("web_side_5").selected === true){
			suma2+=250;
		}
		else if(document.getElementById("web_side_6").selected === true){
			suma2+=300;
		}
		else if(document.getElementById("web_side_7").selected === true){
			suma2+=350;
		}
		else if(document.getElementById("web_side_8").selected === true){
			suma2+=400;
		}
		else if(document.getElementById("web_side_9").selected === true){
			suma2+=450;
		}
		else if(document.getElementById("web_side_10").selected === true){
			suma2+=500;
		}
		else if(document.getElementById("web_side_more").selected === true){
			suma2+=1000;
		}
		
		//Dodatkowe opcje
		if(document.getElementById("web_options_1").checked === true){
			suma2+=400;
		}
		if(document.getElementById("web_options_2").checked === true){
			suma2+=50;
		}
		if(document.getElementById("web_options_3").checked === true){
			suma2+=1000;
		}
		if(document.getElementById("web_options_4").checked === true){
			suma2+=500;
		}
		
		
		//Pakiet
		if(document.getElementById("web_pack_1").checked === true){
			suma2+=500;
		}
		if(document.getElementById("web_pack_2").checked === true){
			suma2+=300;
		}
		if(document.getElementById("web_pack_3").checked === true){
			suma2+=100;
		}
	}
	else{
		suma2=0;
	}






	//Produkcja filmowa
	
	if(f4.style.display === "block"){
		//Typ zadania
		if(document.getElementById("vid_1").selected === true){
			suma3+=500;
		}
		else if(document.getElementById("vid_2").selected === true){
			suma3+=300;
		}
		else if(document.getElementById("vid_3").selected === true){
			suma3+=800;
		}
		
		
		//Dni nagraniowe

		if(document.getElementById("vid_day_1").selected === true){
			suma3+=400;
		}
		else if(document.getElementById("vid_day_2").selected === true){
			suma3+=500;
		}
		else if(document.getElementById("vid_day_3").selected === true){
			suma3+=600;
		}
		else if(document.getElementById("vid_day_4").selected === true){
			suma3+=700;
		}
		else if(document.getElementById("vid_day_5").selected === true){
			suma3+=800;
		}
		else if(document.getElementById("vid_day_6").selected === true){
			suma3+=900;
		}
		else if(document.getElementById("vid_day_7").selected === true){
			suma3+=1000;
		}
		else if(document.getElementById("vid_day_8").selected === true){
			suma3+=1200;
		}
		else if(document.getElementById("vid_day_9").selected === true){
			suma3+=1500;
		}
		else if(document.getElementById("vid_day_10").selected === true){
			suma3+=2100;
		}
		else if(document.getElementById("vid_day_more").selected === true){
			suma3+=5000;
		}
		
		
		//Godziny postprodukcji

		if(document.getElementById("vid_hour_1").selected === true){
			suma3+=100;
		}
		else if(document.getElementById("vid_hour_2").selected === true){
			suma3+=300;
		}
		else if(document.getElementById("vid_hour_3").selected === true){
			suma3+=700;
		}
		else if(document.getElementById("vid_hour_more").selected === true){
			suma3+=2000;
		}
	}
	else{
		suma3=0;
	}
	
	
	
	
	//Social Media
	if(f5.style.display === "block"){
		//Ilość portali
		if(document.getElementById("social_1").selected === true){
			suma4+=100;
		}
		else if(document.getElementById("social_2").selected === true){
			suma4+=250;
		}
		else if(document.getElementById("social_3").selected === true){
			suma4+=400;
		}
		else if(document.getElementById("social_more").selected === true){
			suma4+=1000;
		}
		
		
		//Pakiet
		if(document.getElementById("soc_pack_1").checked === true){
			suma4+=200;
		}
		if(document.getElementById("soc_pack_2").checked === true){
			suma4+=400;
		}
		if(document.getElementById("soc_pack_3").checked === true){
			suma4+=700;
		}
	}
	else{
		suma4=0;
	}
	
	
	
	//Grafika komputerowa
	if(f6.style.display === "block"){
		//Ilość grafik
		if(document.getElementById("graphic_1").selected === true){
			suma5+=150;
		}
		else if(document.getElementById("graphic_2").selected === true){
			suma5+=350;
		}
		else if(document.getElementById("graphic_3").selected === true){
			suma5+=700;
		}
		else if(document.getElementById("graphic_more").selected === true){
			suma5+=1000;
		}
		
		
		//Pakiet
		if(document.getElementById("grap_pack_1").checked === true){
			suma5+=300;
		}
		if(document.getElementById("grap_pack_2").checked === true){
			suma5+=100;
		}
	}
	else{
		suma5=0;
	}
	
	
	//Sumowanie zakupów (bez rabatu)
	suma=suma1+suma2+suma3+suma4+suma5;
	suma=suma.toFixed(2);
	//Obliczanie rabatu w procentach
	if(suma1>0){
		rabat_proc+=0.05;
	}
	if(suma2>0){
		rabat_proc+=0.05;
	}
	if(suma3>0){
		rabat_proc+=0.05;
	}
	if(suma4>0){
		rabat_proc+=0.05;
	}
	if(suma5>0){
		rabat_proc+=0.05;
	}
	
	// Obliczenie rabatu w liczbie
	rabat_proc=rabat_proc -0.05;
	rabat_proc=rabat_proc.toFixed(2);
	rabat=suma*rabat_proc;
	rabat=rabat.toFixed(2);
	
	// Suma po rabacie
	suma_rabat=suma-rabat;
	suma_rabat=suma_rabat.toFixed(2);
	

	sessionStorage.setItem("suma", suma);
	sessionStorage.setItem("rabat", rabat);
	sessionStorage.setItem("rabat_proc", rabat_proc);
	sessionStorage.setItem("suma_rabat", suma_rabat);
	sessionStorage.setItem("suma1", suma1);
	sessionStorage.setItem("suma2", suma2);
	sessionStorage.setItem("suma3", suma3);
	sessionStorage.setItem("suma4", suma4);
	sessionStorage.setItem("suma5", suma5);

	
}
	
	