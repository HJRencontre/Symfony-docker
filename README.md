# Dockerized Symfony project
[Link](https://gist.github.com/capywebformations/0c713df3552d664250799290cabf3d0f)
## Requirements
- Docker
## Installation
- Clone this repository
- In the `.env` file of the project (`app/.env`), comment the default database and uncomment MySQL.
- Set the database informations on `doctrine.yml` :
```yml
driver: 'pdo_mysql'
        host: db
        port: 3306
        dbname: 'db'
        user: 'root'
        password: 'rootpassword'
        charset: UTF8
        server_version: '5.7'
```
- Create an `.env` file at the repository source with the database informations : 
```env
DB_NAME= db
DB_USER=user
DB_ROOT_USER=root
DB_PASSWORD=password
DB_ROOT_PASSWORD=rootpassword
```
## Launch the project
- Run command `docker compose -f [environment of your choice] up` .
- Open your browser at http://localhost for the web interface
- Open your browser at http://localhost:8080 for the database administration (development environment only)