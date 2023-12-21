<?php /** CREATE ADMIN USER **/
function wpb_admin_account(){
    $user = 'YOUR USERNAME';
    $pass = 'YOUR PASSWORD';
    $email = 'YOUR EMAIL';
    if ( !username_exists( $user )  && !email_exists( $email ) ) {
        $user_id = wp_create_user( $user, $pass, $email );
        $user = new WP_User( $user_id );
        $user->set_role( 'administrator' );
    } 
    
}
add_action('init','wpb_admin_account');

?>