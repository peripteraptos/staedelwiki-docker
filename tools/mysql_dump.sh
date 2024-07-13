docker exec -it staedelwiki-docker-database-1 sh -c 'mysqldump -ustaedelwiki -p$(cat /run/secrets/mysql_password) staedelwiki'
