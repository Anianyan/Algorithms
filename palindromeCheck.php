<?php
/**
 * Check if input string is Palindrome or not.
 *
 * @param string $str
 * @return boolean $is_palindrome
 */
function isPalindrome( $str ) {
	if ( ! is_string( $str ) || strlen( $str ) === 0 ) {
		return false;
	}

	$size          = strlen( $str );
	$left_index    = 0;
	$right_index   = $size - 1;
	$is_palindrome = true;

	while ( $is_palindrome && $left_index < $right_index ) {
		if ( $str[ $left_index ] !== $str[ $right_index ] ) {
			$is_palindrome = false;
		}
		$left_index++;
		$right_index--;
	}

	return $is_palindrome;
}

$str = "abccba";
if ( isPalindrome( $str ) ) {
    echo $str . ' is Palindrome';
} else {
    echo $str . ' is not Palindrome';
}