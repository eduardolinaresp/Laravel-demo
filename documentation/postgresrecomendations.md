# REVISAR

## se requiere PGADMIN  
### los valores default se encuentran en .env de la carpera laradock 

     POSTGRES_VERSION=alpine
     POSTGRES_DB=default
     POSTGRES_USER=default
     POSTGRES_PASSWORD=secret
     POSTGRES_PORT=5432
     POSTGRES_ENTRYPOINT_INITDB=./postgres/docker-entrypoint-initdb.d

### para los valores especificos del proyecto se encuentran en .env de la carpera campus   

   ### en el caso de docker   DB_HOST = postgres

    DB_CONNECTION=pgsql
    DB_HOST=postgres
    DB_PORT=5432
    DB_DATABASE=default
    DB_USERNAME=default
    DB_PASSWORD=secret


- [Volver a guia](README.md)    