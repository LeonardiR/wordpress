#Wordpress Blank Project

##Docker

## Getting Started (install docker)
https://www.docker.com/get-started

## Run Containers (Docker Compose)
On your root project folder run:
```
docker-compose up -d
```
then open wordpress site on 

http://localhost:8080/

## Stop Containers 

```
docker-compose stop
```

## Backup DB to local (with containers down)

```
sh backup_db.sh
```

## Import DB to container (with containers down)

```
sh import_db.sh
```

## Important note

enter command on root folder of project to make import and export files executable,
this is an example for backup (enter command for import if you're using it)

```
chmod +x backup_db.sh
```