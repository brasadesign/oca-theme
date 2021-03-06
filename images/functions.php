<?php

// Adiciona a fun��o the_excerpt �s P�ginas
add_post_type_support( 'page', 'excerpt' );

/**
* Adiciona limite aos excerpts
*
*/
function limit_words($string, $word_limit) {

	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character

	$words = explode(' ', $string);

	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character

	return implode(' ', array_slice($words, 0, $word_limit));
}

/**
* Adiciona um tamanho de imagem
*
*/
if ( function_exists( 'add_image_size' ) ) { 
    add_image_size( 'thumb-home', 500, 150, true );
}

//Adiciona o CustomPostType Agenda
require_once ( get_stylesheet_directory() . '/agenda/requires-agenda.php' );

	
register_nav_menu( 'um', __( 'Primeiro Menu Rodape', 'twentyeleven' ) );
register_nav_menu( 'dois', __( 'Segundo Menu Rodape', 'twentyeleven' ) );
register_nav_menu( 'tres', __( 'Terceiro Menu Rodape', 'twentyeleven' ) );
register_nav_menu( 'quatro', __( 'Quarto Menu Rodape', 'twentyeleven' ) );
register_nav_menu( 'cinco', __( 'Quinto Menu Rodape', 'twentyeleven' ) );

register_nav_menu( 'nucleos', __( 'Menu Nucleos', 'twentyeleven' ) );

// Fun��o para imprimir o nome do menu
function echo_name_menu( $location ) {
    if( empty($location) ) return false;

    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;

    $menu_obj = get_term( $locations[$location], 'nav_menu' );

    return $menu_obj;
}

function thumb_default() {
	$endereco_thumb_default = get_bloginfo( 'stylesheet_directory' ) . '/images/thumb-default.jpg';
	echo '<img src='.$endereco_thumb_default.' />';
}


?>