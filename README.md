# CorePress backwards compatibility

This is a replacement for backwards compatibility features from Wordpress for CorePress.

The code here is based on the original [WordPress](https://wordpress.org) code.

For CorePress, we decided to move it into a plugin to increase modularity and avoid unnecessary bloat, but still allow users to use legacy plugins.

## When is code moved here?

Once upstream WordPress releases a new major version of WordPress (6.0, 7.0, ...) and we release the corresponding version of CorePress (1.0, 2.0), all code that was deprecated in a previous WordPress (5.x, 6.x, ...) release will be removed.

Code deprecated within a major relase (e.g. code that is only deprecated since 6.0 in 6.0, or code that is deprecated within 6.1, 6.2) will not be moved here during that major releases lifecycle.

