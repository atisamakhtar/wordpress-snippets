add_filter( 'gettext', 'chagne_text_of_vehicle' );

function chagne_text_of_vehicle( $text ) {
 
    $text = str_ireplace( 'RENT IT', 'Reservieren ', $text ); //Not Found Vehicle
	$text = str_ireplace( 'Not Found Vehicle', 'Keine Parkplätze gefunden', $text ); //Vehicle is unavailable for this time, Please book other time.
	$text = str_ireplace( 'Vehicle is unavailable for this time, Please book other time.', 'Parking Slot is unavailable for this time, Please book other time.', $text ); 
	$text = str_ireplace( 'Vehicle', 'Parking', $text ); 
	$text = str_ireplace( 'Location', 'Flughafen auswählen', $text ); // 
	$text = str_ireplace( 'Pick-up Date', 'Vom', $text ); // Pick-up Date
	$text = str_ireplace( 'Drop-off Date', 'Bis', $text ); // 
	$text = str_ireplace( 'Pick-up', '', $text ); // 
	$text = str_ireplace( 'Find Out More', 'Parkplätze suchen', $text ); // 
	$text = str_ireplace( 'BOOKING NOW', 'Parkplatz buchen', $text ); //
    return $text;
}