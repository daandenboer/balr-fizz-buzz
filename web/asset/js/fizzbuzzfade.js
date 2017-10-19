    var i = 0;
    var showtime = 100;
    
    $(document).ready(function () {
        $( 'ul > li' ).hide();
        $( 'ul > li' ).each( function( index, element ) {
            $( this ).delay( showtime+=70 ).fadeIn( 1000 );
        });
    });