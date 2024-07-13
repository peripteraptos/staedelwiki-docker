<?php
## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [ '1x' => "$wgResourceBasePath/images/e/e1/Staedelschule.svg"];

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector-2022";

### Enabled skins.
wfLoadSkin( 'Vector' );
wfLoadSkin( 'MinervaNeue' );

### Skin Settings
$wgVectorResponsive = true;
#$wgVectorDefaultSkinVersion = '2';
$wgTimelessLogo = [ '1x' => "$wgResourceBasePath/images/e/e1/Staedelschule.svg"];
$wgTimelessBackdropImage = "$wgResourceBasePath/images/e/e1/Staedelschule.svg";

