##  Copiar en proyecto laradock

###	01-04-Desde github clonar laradock

	git clone https://github.com/Laradock/laradock.git
   
###	01-05-Ingresar al directorio laradock y renombrar env-example to .env.

	cd laradock
	cp env-example .env
 
###	01-06-Establecer directorio de proyecto

	EN carpeta laradock Editar .env y cambiar la configuración APP_CODE_PATH_HOST por lo siguiente APP_CODE_PATH_HOST=../campus
	
###	01-07-Iniciar Contenedores

	cd .\laradock\

	docker-compose up -d nginx postgres

###	01-08-Ingresar a workspace

	docker-compose exec workspace bash	 
 
###	01-09-Instalar dependencias

- [Instalar dependencias](artisancommands.md)

- [Volver a guia](README.md)
