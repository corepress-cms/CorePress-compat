<?php

// Always load these
require_once( __DIR__ . '/admin/functions.php' );
if ( is_multisite() ) {
    require_once( __DIR__ . '/admin/mu.php' );
}
