/* Mise en place du caroussel de l'accueil */



/* TIMER */

function pageTimer() {
	var start = new Date;

	pgTim = setInterval(function() {
	    $('.Timer').text((new Date - start) / 1000 + " Seconds");
	}, 1000);
	return pgTim
}


function addpageTimer() {
	timer = pageTimer();
	 elem = document.getElementById("pageTimer");
	 elem.textContent=timer;
	 compte=setTimeout('addpageTimer()',1000);

}






/* TODAY DATE */


function todayDate() {
	var d = new Date();

	var month = d.getMonth()+1;
	var day = d.getDate();

	var output = (day<10 ? '0' : '') + day + "/" +
		(month<10 ? '0' : '') + month + "/" +
		d.getFullYear();
	 
	var tdDate = output;
	return tdDate
}

function addTodayDate() {
	maDate = todayDate()
	elem = document.getElementById("todayDate")
	elem.textContent=maDate;
}


/* Appel des fonctions */

addTodayDate();
addpageTimer();

