<?php

function call_legacy_pre_edit_form($tag, $taxonomy) {
	$legacyTaxonomy = $taxonomy;
	if ($legacyTaxonomy == "post_tag") {
		$legacyTaxonomy = "tag";
	}
	/**
	 * Fires before the Edit {$taxonomy} form.
	 *
	 * @since 2.1.0
	 * @deprecated 3.0.0 Use {@see '{$taxonomy}_pre_edit_form'} instead.
	 *
	 * @param WP_Term $tag Current {$taxonomy} term object.
	 */
	do_action_deprecated( "edit_{$legacyTaxonomy}_form_pre", array( $tag ), '3.0.0', "{$taxonomy}_pre_edit_form" );
}

add_action( 'category_pre_edit_form', 'call_legacy_pre_edit_form' );
add_action( 'link_category_pre_edit_form', 'call_legacy_pre_edit_form' );
// TODO: Does tag_pre_edit_form get called or is it always post_tag_pre_edit_form?
add_action( 'tag_pre_edit_form', 'call_legacy_pre_edit_form' );
add_action( 'post_tag_pre_edit_form', 'call_legacy_pre_edit_form' );


function call_legacy_pre_add_form($taxonomy) {
	$legacyTaxonomy = $taxonomy;
	if ($legacyTaxonomy == "post_tag") {
		$legacyTaxonomy = "tag";
	}
	/**
	 * Fires before the Add {$taxonomy} form.
	 *
	 * @since 2.5.0
	 * @deprecated 3.0.0 Use {@see '{$taxonomy}_pre_add_form'} instead.
	 *
	 * @param string $taxonomy The taxonomy slug.
	 */
	do_action_deprecated( "add_{$legacyTaxonomy}_form_pre", array( $taxonomy ), '3.0.0', "{$taxonomy}_pre_add_form" );
}

add_action( 'category_pre_add_form', 'call_legacy_pre_add_form' );
add_action( 'link_category_pre_add_form', 'call_legacy_pre_add_form' );
// TODO: Does tag_pre_add_form get called or is it always post_tag_pre_add_form?
add_action( 'tag_pre_add_form', 'call_legacy_pre_add_form' );
add_action( 'post_tag_pre_add_form', 'call_legacy_pre_add_form' );




function call_legacy_edit_form($tag, $taxonomy) {
	$legacyTaxonomy = $taxonomy;
	if ($legacyTaxonomy == "post_tag") {
		$legacyTaxonomy = "tag";
	}
	/**
	 * Fires at the end of the Edit {$taxonomy} form.
	 *
	 * @since 2.1.0
	 * @deprecated 3.0.0 Use {@see '{$taxonomy}_edit_form'} instead.
	 *
	 * @param WP_Term $tag Current {$taxonomy} term object.
	 */
	do_action_deprecated( "edit_{$legacyTaxonomy}_form", array( $tag ), '3.0.0', "{$taxonomy}_edit_form" );
}

add_action( 'category_edit_form', 'call_legacy_edit_form' );
add_action( 'link_category_edit_form', 'call_legacy_edit_form' );
// TODO: Does tag_edit_form get called or is it always post_tag_edit_form?
add_action( 'tag_edit_form', 'call_legacy_edit_form' );
add_action( 'post_tag_edit_form', 'call_legacy_edit_form' );


function call_legacy_add_form($taxonomy) {
	$legacyTaxonomy = $taxonomy;
	if ($legacyTaxonomy == "post_tag") {
		$legacyTaxonomy = "tag";
	}
	/**
	 * Fires at the end of the Add {$taxonomy} form.
	 *
	 * @since 2.5.0
	 * @deprecated 3.0.0 Use {@see '{$taxonomy}_add_form'} instead.
	 *
	 * @param string $taxonomy The taxonomy slug.
	 */
	do_action_deprecated( "add_{$legacyTaxonomy}_form", array( $taxonomy ), '3.0.0', "{$taxonomy}_add_form" );
}

add_action( 'category_add_form', 'call_legacy_add_form' );
add_action( 'link_category_add_form', 'call_legacy_add_form' );
// TODO: Does tag_add_form get called or is it always post_tag_add_form?
add_action( 'tag_add_form', 'call_legacy_add_form' );
add_action( 'post_tag_add_form', 'call_legacy_add_form' );

