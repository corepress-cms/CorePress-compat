<?php

function call_mispelled_retrieve_password($user_login) {
	/**
	 * Fires before a new password is retrieved.
	 *
	 * Use the {@see 'retrieve_password'} hook instead.
	 *
	 * @since 1.5.0
	 * @deprecated 1.5.1 Misspelled. Use {@see 'retrieve_password'} hook instead.
	 *
	 * @param string $user_login The user login name.
	 */
	do_action_deprecated( 'retreive_password', array( $user_login ), '1.5.1', 'retrieve_password' );
}

add_action( 'retreive_password', 'call_mispelled_retrieve_password' );