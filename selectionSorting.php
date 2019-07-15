<?php
require 'common.php';

/**
 * Sorting array using selection sorting algorithm.
 * Space -> O(1)
 * Time  -> O(n^2)
 *
 * @param array $arr unsorted array passed by reference.
 */
function sortArrayWithSelection( &$arr ) {
	$i    = 0;
	$size = count( $arr );

	while ( $i < $size - 1 ) {
		$j = $i;
		for ( $k = $j + 1; $k < $size; $k++ ) {
			if ( $arr[ $k ] < $arr[ $j ] ) {
				$j = $k;
			}
		}
		if ( $arr[ $i ] > $arr[ $j ] ) {
			swapArrayByValues( $arr, $i, $j );
		}
		$i++;
	}
}


$array = generateRandomNumbers( 50, -100, 200 );
printArray( $array );
/** Sorting array */
sortArrayWithSelection( $array );
echo '<br>';
printArray( $array );
