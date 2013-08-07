<?php

/**
 * Stores information about each type of transport.
 */
abstract class transportType
{
	// ID is the German name found in the productName attribute of
	//the subroute.
	public static $ID = '';
	public static $englishName = '';
	public static $imgURI = '';
	
	public abstract function price($subTotal, $start, $end) {
		// work out the price of this subRoute
	}
}

class bus extends transportType
{
	public static $ID = 'Bus';
	public static $englishName = 'Bus';
	public static $imgURI = '/user/assets/images/icon-buses.gif';
	
	public function price($subTotal, $start, $end) {
		
	}
}

?>