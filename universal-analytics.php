function add_this_script_footer(){
    ?>
    <?php global $page;
	    $page = get_the_title();
	?>
        <script>
        
            var pathname = window.location.host;
            
            document.addEventListener( 'wpcf7mailsent', function( event ) {
                gtag('event', 'Richiesta Informazioni', {
				  'event_category': 'Pagina',
				  'event_label': '<?php echo get_the_title();?> - <?php if ( defined( 'ICL_LANGUAGE_NAME' ) ) { echo ICL_LANGUAGE_NAME; } ?>'
				});
            }, false );
        
        </script>
<?php
} 
 
add_action('wp_footer', 'add_this_script_footer', 20);
