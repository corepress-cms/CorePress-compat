<?php

// Always load these
require_once( __DIR__ . '/deprecated/functions.php' );
require_once( __DIR__ . '/deprecated/actions.php' );
require_once( __DIR__ . '/deprecated/filters.php' );

// This is called during a later part of the CorePress init process
function backwards_compat_pluggable() {
    require_once( __DIR__ . '/deprecated/pluggable.php' );
}

// This is only called if class-json.php is required
function backwards_compat_json() {
    require_once( __DIR__ . '/deprecated/json.php' );
}

// This is only called if the admin is loaded
function backwards_compat_admin() {
    require_once( __DIR__ . '/deprecated/admin.php' );
}

if ( is_multisite() ) {
    require_once( __DIR__ . '/deprecated/mu.php' );
}
