#!/bin/sh
BASEDIR=$(dirname "$0")
function generate_secret(){
  if [ ! -f $BASEDIR/secrets/$1 ]
  then
      echo "+ Generating secret: $1"
      echo $(tr -dc A-Za-z0-9_ < /dev/urandom | head -c $2) > $BASEDIR/secrets/$1
  else
      echo "- Skipping existing secret: $1"
  fi
}

function ask_secret(){
  if [ ! -f $BASEDIR/secrets/$1 ]
  then
    read -p "- Please enter $1 (default: $2):" input
    if [ ! -z $input ]
    then
      echo "+ Writing secret: $1"
      echo $input > "$BASEDIR/secrets/$1";
    else
      echo "+ Writing default to secret: $1"
      echo $2 > $BASEDIR/secrets/$1
    fi
  else
    echo "- Skipping existing secret: $1"
  fi
}

printf "Generating general secrets\n"
generate_secret "mysql_root_password" 25;
generate_secret "mysql_password" 25;
generate_secret "mediawiki_secret_key" 32;

printf "\nSetting up OpenID Connect\n"
ask_secret "openid_provider_url" false
ask_secret "openid_client_id" false
ask_secret "openid_client_secret" false

printf "\nSetting up Office365 Outgoing E-Mail User\n"
ask_secret "mail_username" false
ask_secret "mail_password" false

