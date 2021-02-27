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
