<?php

/**
 * Legacy plural form function.
 *
 * @param int $nplurals
 * @param string $expression
 */
function tests_make_plural_form_function( $nplurals, $expression ) {
	$expression = str_replace( 'n', '$n', $expression );
	$func_body  = "
		\$index = (int)($expression);
		return (\$index < $nplurals)? \$index : $nplurals - 1;";

	// phpcs:ignore WordPress.PHP.RestrictedPHPFunctions.create_function_create_function
	return create_function( '$n', $func_body );
}
