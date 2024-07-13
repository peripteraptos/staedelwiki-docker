docker exec -it staedelwiki-docker-database-1 sh -c 'mysql -ustaedelwiki -p$(cat /run/secrets/mysql_password) staedelwiki'
