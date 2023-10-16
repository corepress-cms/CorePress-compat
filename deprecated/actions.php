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

/**
 * @param WP_Post $post Post object.
 */
function call_deprecated_private_to_publish($post) {
	/**
	 * Fires when a post's status is transitioned from private to published.
	 *
	 * @since 1.5.0
	 * @deprecated 2.3.0 Use {@see 'private_to_publish'} instead.
	 *
	 * @param int $post_id Post ID.
	 */
	do_action_deprecated( 'private_to_published', array( $post->ID ), '2.3.0', 'private_to_publish' );
}
add_action( 'private_to_publish', 'call_deprecated_private_to_publish' );