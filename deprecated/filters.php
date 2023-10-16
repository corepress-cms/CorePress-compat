<?php

function call_legacy_rewrite_rules($rules) {
		/**
		 * Filters the list of rewrite rules formatted for output to an .htaccess file.
		 *
		 * @since 1.5.0
		 * @deprecated 1.5.0 Use the {@see 'mod_rewrite_rules'} filter instead.
		 *
		 * @param string $rules mod_rewrite Rewrite rules formatted for .htaccess.
		 */
		return apply_filters_deprecated( 'rewrite_rules', array( $rules ), '1.5.0', 'mod_rewrite_rules' );
}
add_filter('mod_rewrite_rules', 'call_legacy_rewrite_rules');

function call_legacy_edit_tags_per_page($tags_per_page) {
	/**
	 * Filters the number of terms displayed per page for the Tags list table.
	 *
	 * @since 2.7.0
	 * @deprecated 2.8.0 Use {@see 'edit_tags_per_page'} instead.
	 *
	 * @param int $tags_per_page Number of tags to be displayed. Default 20.
	 */
	return apply_filters_deprecated( 'tagsperpage', array( $tags_per_page ), '2.8.0', 'edit_tags_per_page' );
}
add_filter('edit_tags_per_page', 'call_legacy_edit_tags_per_page');