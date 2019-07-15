<?php
require 'common.php';

/**
 * Insertion sorting algorithm logic.
 * Space -> O(1)
 * Time  -> O(n^2)
 *
 * @param array $arr Pass array by reference.
 */
function insertionSorting( &$arr ) {
	$size = count( $arr );
	if ( $size === 0 ) {
		return false;
	}
	for ( $i = 1; $i < $size; $i++ ) {
		$j = $i;
		while ( $j > 0 && $arr[ $j ] < $arr[ $j - 1 ] ) {
			swapArrayByValues( $arr, $j, $j - 1 );
			$j--;
		}
	}
}

$array = generateRandomNumbers( 10, -10, 10 );
printArray( $array );
/** Sorting array */
insertionSorting( $array );
echo '<br>';
printArray( $array );
