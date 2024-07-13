<?php
wfLoadExtension( 'UserMerge' );
# UserMerge
$wgGroupPermissions['bureaucrat']['usermerge'] = true; // By default nobody can use this function, enable for bureaucrat?
$wgUserMergeProtectedGroups = [];
$wgUserDeleteProtectedGroups = [];
$wgUserMergeEnableDelete = true;