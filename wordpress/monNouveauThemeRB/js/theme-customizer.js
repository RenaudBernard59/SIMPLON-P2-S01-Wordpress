/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 * Things like site title, description, and background color changes.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).html( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).html( to );
		} );
	} );

	// Hook into background color change and adjust body class value as needed.
	wp.customize( 'background_color', function( value ) {
		value.bind( function( to ) {
			if ( '#ffffff' == to || '#fff' == to )
				$( 'body' ).addClass( 'custom-background-white' );
			else if ( '' == to )
				$( 'body' ).addClass( 'custom-background-empty' );
			else
				$( 'body' ).removeClass( 'custom-background-empty custom-background-white' );
		} );
	} );
} )( jQuery );





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

