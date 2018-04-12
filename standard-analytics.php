function add_this_script_footer(){
    ?>
    <?php global $page;
	    $page = get_the_title();
	?>
        <script>
        
            var pathname = window.location.host;
            
            document.addEventListener( 'wpcf7mailsent', function( event ) {
                ga('send', 'event', 'Richiesta Informazioni', '<?php echo get_the_title();?> - <?php if ( defined( 'ICL_LANGUAGE_NAME' ) ) { echo ICL_LANGUAGE_NAME; } ?>' )
            });    
        </script>
<?php
} 
 
add_action('wp_footer', 'add_this_script_footer', 20);
