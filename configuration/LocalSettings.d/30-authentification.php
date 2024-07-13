<?php
#wfLoadExtension( 'PluggableAuth' );
#wfLoadExtension( 'OpenIDConnect' );

# PluggableAuth + OpenID Connect
$openid_provider_url = get_secret('openid_provider_url');
$openid_client_id = get_secret('openid_client_id');
$openid_client_secret = get_secret('openid_client_secret');

$wgPluggableAuth_Config[] = [
    'plugin' => 'OpenIDConnect',
    'buttonLabelMessage' => 'azure',
    'data' => [
        'providerURL' => $openid_provider_url,
        'clientID' => $openid_client_id,
        'clientsecret' => $openid_client_secret
    ]
];
$wgOpenIDConnect_Config[$openid_provider_url] = [
        'clientID' => $openid_client_id,
        'clientsecret' => $openid_client_secret
];
$wgPluggableAuth_ButtonLabel = "Staedelschule Login";
$wgOpenIDConnect_UseRealNameAsUserName = true;
$wgGroupPermissions['*']['autocreateaccount'] = true;
$wgOpenIDConnect_MigrateUsersByEmail = true;
$wgPluggableAuth_EnableAutoLogin = true;

