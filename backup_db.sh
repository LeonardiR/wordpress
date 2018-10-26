#!/bin/sh

# On Mac and Linux, use command on root folder 'chmod +x backup_db.sh' to make this file executable.

# clean up
rm ./db_data/db_wordpress.sql.gz

# Run Worpress container and export DB
docker-compose  -f docker-compose.yml up -d
docker exec wordpress_wordpress_1 wp db export - | gzip > ./db_data/db_wordpress.sql.gz

#Stop containers
docker-compose stop

