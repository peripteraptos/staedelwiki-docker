<?php
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "städelschule wiki";
$wgMetaNamespace = "Staedelwiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";
$wgArticlePath = "/wiki/$1";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://staedelwiki.localhost:8080";
#$wgServer = "https://wiki.staedelschule.de";
## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = "";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

#$wgEmergencyContact = "apache@🌻.invalid";
#$wgPasswordSender = "apache@🌻.invalid";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale. This should ideally be set to an English
## language locale so that the behaviour of C library functions will
## be consistent with typical installations. Use $wgLanguageCode to
## localise the wiki.
$wgShellLocale = "en_US.utf8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey =  get_secret("mediawiki_secret_key");

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = false;#"7f76f1b1a506361c";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

### Allowed Upload Filetypes
$wgFileExtensions[] = 'pdf';
$wgFileExtensions[] = 'svg';
$wgFileExtensions[] = 'woff2';
$wgFileExtensions[] = 'zip';
$wgFileExtensions[] = 'gpx';
$wgFileExtensions[] = 'docx';
$wgFileExtensions[] = 'pptx';
$wgFileExtensions[] = 'xlsx';
// $wgTrustedMediaFormats[] = 'ARCHIVE';
$wgTrustedMediaFormats[] = 'application/zip';


$wgExternalLinkTarget = '_blank';
$wgSVGConverter = 'inkscape';
# $wgParserCacheType = CACHE_NONE;
# $wgCachePages = false;

## Debug
#error_reporting( -1 );
#ini_set( 'display_errors', 1 );
#$wgShowSQLErrors = true;
#$wgDebugDumpSql  = true;
#$wgDebugLogFile = '/var/log/mediawiki/mediawikidebug.log';
#$wgShowDBErrorBacktrace = true;
#$wgDebugToolbar = true;
$wgShowExceptionDetails=true; 

# add an additional protection level restricting edit/move/etc. to users with the "school-project" permission
#$wgRestrictionLevels[] = 'moderate'; 
# give the "school-project" permission to users in the "students" and "teachers" groups
#$wgGroupPermissions['students']['moderate'] = true;
#$wgGroupPermissions['moderators']['moderate'] = true;
# give the "school-project" permission to sysops (needed so sysops can apply this protection level to pages)
#$wgGroupPermissions['sysop']['moderate'] = true;

### Jobrate = 0 because jobs are running in backround via systemd service. (https://www.mediawiki.org/wiki/Manual:Job_queue) 
$wgJobRunRate = 0;


