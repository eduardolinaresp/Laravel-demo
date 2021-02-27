# 01 Inicializar proyecto 

##	01-01-Desde github clonar este proyecto

	git clone https://github.com/eduardolinaresp/Laravel-demo.git
	 
##	01-02-Ingresar al directorio Laravel-demo

	cd Laravel-demo
	
##	01-03-Ingresar al directorio Campus y renombrar env-example to .env.

	cd campus
	cp .env.example .env
<!---  volver a directorio raíz -->
	cd ..  
	
##	01-04-Desde github clonar laradock

	git clone https://github.com/Laradock/laradock.git
   
##	01-05-Ingresar al directorio laradock y renombrar env-example to .env.

	cd laradock
	cp env-example .env
 
##	01-06-Establecer directorio de proyecto

	EN carpeta laradock Editar .env y cambiar la configuración APP_CODE_PATH_HOST por lo siguiente APP_CODE_PATH_HOST=../campus
	
##	01-07-Iniciar Contenedores

	docker-compose up -d nginx postgres

##	01-08-Ingresar a workspace

	docker-compose exec workspace bash	
	
##	01-08-instalar dependencias php artisan

- [Instalar dependencias](documentation/artisancommands.md)

##	01-11-Ver aplicación en navegador

	http://localhost/


- [Generar nuevos proyectos](documentation/Generarnuevosproyectos.md)
- [Comandos Útiles](documentation/utilscommands.md)
- [Información Útil](documentation/utilinfo.md)
- [Iniciar BD](documentation/databaseconfiguration.md)
- [Generar Sin docker compose](documentation/runwithoutdocker.md)



	 
 

