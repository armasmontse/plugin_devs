?php

	
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
		register_post_type( 'developers',
			array(
			  	'labels' => array(
					'age' => __( 'Edad' ),
					'type' => 'integer',
			  ),
			  'public' => true,
			),

			array(
			 	'labels' => array(
				    'primary_language' => __( 'Lenguaje Preferido' ),
				    'type' => 'text',
			  	),
			  'public' => true,	  
			),

			array(
			  	'labels' => array(
			    	'secondary_language' => __( 'Lenguaje Secundario' ),
			    	'type' => 'text',
			  ),
			  'public' => true,
			),

			array(
			  	'labels' => array(
			    	'available_to_work' => __( 'Disponible para trabajar' ),
			    	'type' 	=> 'checkbox',
			  ),
			  'public' => true,
			)
		);
	}


?