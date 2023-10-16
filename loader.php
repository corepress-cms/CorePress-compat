<?php

require_once( __DIR__ . '/deprecated/functions.php' );
require_once( __DIR__ . '/deprecated/mu.php' );
require_once( __DIR__ . '/deprecated/actions.php' );
require_once( __DIR__ . '/deprecated/filters.php' );

function backwards_compat_pluggable() {
    require_once( __DIR__ . '/deprecated/pluggable.php' );
}

require_once( __DIR__ . '/deprecated/admin/functions.php' );
