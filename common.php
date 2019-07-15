<?
/**
 * Common functions to use each sorting algorithm logic
 */

/**
 * Generate random numbers depend on max / min
 *
 * @param int $size size of array.
 * @param int $max_number maximum range.
 * @param int $min_number minimum range.
 *
 * @return array $arr Generated random array.
 */
function generateRandomNumbers( $size, $min_number, $max_number ) {

	if ( ! empty( $size ) ) {
		for ( $i = 0; $i < $size; $i++ ) {
			$rand_num  = mt_rand( $min_number, $max_number );
			$arr[ $i ] = $rand_num;
		}
		return $arr;
	}

	return false;
}

/**
 * Print array
 *
 * @param array $array
 */
function printArray( &$array ) {
	foreach ( $array as $key => $val ) {
		echo $val . ', ';
	}
}

/**
 * Swap array values
 *
 * @param array $arr array
 * @param int   $i
 * @param int   $j
 */
function swapArrayByValues( &$arr, $i, $j ) {
	$temp      = $arr[ $i ];
	$arr[ $i ] = $arr[ $j ];
	$arr[ $j ] = $temp;
}