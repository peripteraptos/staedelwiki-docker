<?php
### Namespaces Settings
define("NS_EVENT",3020);
define("NS_EVENT_TALK",3021);
define("NS_EQUIPMENT", 3010);
define("NS_EQUIPMENT_TALK", 3011);
define("NS_BOOKS", 3030);
define("NS_BOOKS_TALK", 3031);
$wgExtraNamespaces[NS_EVENT] = "Event";
$wgExtraNamespaces[NS_EVENT_TALK] = "Event_talk"; // Note underscores in the namespace name.
$wgExtraNamespaces[NS_EQUIPMENT] = "Equipment";
$wgExtraNamespaces[NS_EQUIPMENT_TALK] = "Equipment_talk"; // Note underscores in the namespace name.
$wgExtraNamespaces[NS_BOOKS] = "Library";
$wgExtraNamespaces[NS_BOOKS_TALK] = "Library_talk"; // Note underscores in the namespace name.

$wgNamespacesToBeSearchedDefault = [
	NS_MAIN => true,
	NS_EVENT => true,
	NS_EQUIPMENT => true,
	NS_BOOKS => true,
];

$wgNamespacesWithSubpages = [
	NS_MAIN => true,
	NS_TEMPLATE => true,
	NS_EVENT => true
];
