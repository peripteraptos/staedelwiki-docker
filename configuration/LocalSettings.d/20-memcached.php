<?php
## Memcache
$wgMainCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED; // optional
$wgMessageCacheType = CACHE_MEMCACHED; // optional
$wgMemCachedServers = ["memcached:11211"];
$wgSessionCacheType = CACHE_MEMCACHED; // optional