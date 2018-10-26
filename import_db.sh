#!/bin/sh

# On Mac and Linux, use command on root folder 'chmod +x import_db.sh' to make this file executable.

# Run Worpress container and import DB
docker-compose  -f docker-compose.yml up -d
docker exec wordpress_wordpress_1 wp db import - | gzip > ./db_data/db_wordpress.sql.gz

#Stop containers
docker-compose stop

