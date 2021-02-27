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
