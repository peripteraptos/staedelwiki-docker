<?php
$wgGroupPermissions['*']['purge'] = true; // allow everyone to purge cache
$wgGroupPermissions['*']['delete'] = true; // allow everyone to delete pages

# Closed wiki (disallow new account, disable edit)
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit'] = false;

# Gernal stuff
$wgGroupPermissions['*']['read'] = false;