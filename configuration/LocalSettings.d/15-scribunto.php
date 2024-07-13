<?php
wfLoadExtension( 'Scribunto' );
### Increase Scribute CPU Limit to allow more complex lua scripts
$wgScribuntoEngineConf['luastandalone']['cpuLimit'] = 14;
