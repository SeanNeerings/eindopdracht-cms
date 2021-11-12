<?php

function registeer_widgets() {
   
    register_sidebar(array(
        'id' => 'zijkant_widget',
        'name' => "Mijn zijkant widget",
        )
    );

    register_sidebar(array(
        'id' => 'footer_widget',
        'name' => "footer widget",
        )
    );

}
add_action( 'widgets_init', 'registeer_widgets' );
?>

