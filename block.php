<?php 


/**
  *  Prevent Specific domain email registration
  * @author coderstime
  * 

*/

function wppress_user_registration_email_custom( $user_email ) {
    /*(spam|test) change this text with your black list domain text*/

    preg_match('/.*@(spam|test)+/', $user_email, $matches, PREG_UNMATCHED_AS_NULL);
    if(count($matches)){
        return false;
    } else {
        return $user_email;
    }

}

add_filter( 'user_registration_email', 'wppress_user_registration_email_custom' );
