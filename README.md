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

	Editar .env y cambiar la configuración APP_CODE_PATH_HOST por lo siguiente APP_CODE_PATH_HOST=../campus
	
##	01-07-Iniciar Contenedores

	docker-compose up -d nginx mysql
	
##	01-08-Ingresar a workspace

	docker-compose exec workspace bash	

##	01-08-Instalar laravel

	composer global require laravel/installer
	

##	01-09- Restaurar dependencias  
	
	composer update

##	01-10-Generar una key a la aplicación 
	
	php artisan key:generate
	
##	01-11-Ver aplicación en navegador

	http://localhost/

--------------------

# 02 Generar nuevos proyectos 

##	02-01-Ir a directorio laradock/nginx y renombrar laravel.conf.example to default.conf

<!--- Esta en el directorio laradock -->
	cd nginx/sites 
	cp laravel.conf.example default.conf
	
##	02-02-Modificar Configuración
	
	Editar archivo default.conf duplicar la configuración server{} tantas veces se requiera
	Sobrescribir la configuración  root /var/www/laravel/public; En cada configuración server{} 
	
		Definir una para la aplicación campus ej: "root /var/www/campus/public;"
		Definir una para la aplicación NewProject ej: "root /var/www/newproject/public;"

##	02-03-Add the domains to the hosts files 

	127.0.0.1  campus.test
	127.0.0.1  newproject.test
	
##	02-04-Establecer directorio de proyectos

	Editar .env y cambiar la configuración APP_CODE_PATH_HOST por lo siguiente APP_CODE_PATH_HOST=../proyectos/


##	02-05-Recrear las imagenes nginx  (clean build of an image)

<!--- Esta en el directorio laradock/nginx -->

	docker build --no-cache .  
	
##	02-06-Iniciar Contenedores

	docker-compose up -d nginx mysql
	
##	02-07-Ingresar a workspace

	docker-compose exec workspace bash	

##	02-08-Instalar laravel

	composer global require laravel/installer

##	02-09-Crear proyecto desde cero con composer (opcional)

<!--- Antes de instalar comprobar con php artisan --version
	  si esta instalado se puede generar un proyecto con laravel new newproject
 -->
	
	composer create-project --prefer-dist laravel/laravel newproject
	 
##	02-10-Mover aplicación Campus al directorio proyectos 

<!-- Volver a la ruta: /Laravel-demo -->

    cd .. 
	move campus proyectos

##	02-11-Ver aplicación en navegador
	
	http://newproject.test/	
	
--------------------------------

# 03 Comandos Útiles 

##	03-01-Para destruir contenedores

	docker-compose down

##	03-04-Eliminar imagenes y contenedores.

	To delete all containers including its volumes use,

		docker rm -vf $(docker ps -a -q)
		
	To delete all the images,

		docker rmi -f $(docker images -a -q)

##	03-03-Para listar branch

	git branch -a 	 	(local)
	git branch -r  		(remoto)

##	03-04-Para cambiar de branch

	git checkout [name_of_your_new_branch]

##	03-05-Para crear branch

	git checkout -b [name_of_your_new_branch]

##	03-06-Publicar branch en github

	git push origin [name_of_your_new_branch]

# 04 Información Útil

##	04-01-Conectar a mysql con Mysql Workbench

	Agregar una nueva conexión con los parámetros:

	Hostname = 127.0.0.1 
	Port =3600
	Username = root
	Password = root

	 
 

