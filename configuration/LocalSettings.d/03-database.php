<?php

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "database";
$wgDBname = "staedelwiki";
$wgDBuser = "staedelwiki";
$wgDBpassword = get_secret('mysql_password');

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";