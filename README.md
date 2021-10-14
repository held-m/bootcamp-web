# bootcamp-web

## How to start:
1. Clone and Make fork of the repository
	```
	git clone git@github.com:held-m/bootcamp-web.git
	cd bootcamp-web
	git remote add my-fork git@github...my-fork.git
	git fetch my-fork
	git push my-fork
	``` 
2. Create a new branch with your name or nickname `git checkout -b yourName`
3. Install docker and docker-compose. ( https://docs.docker.com/engine/install/ ).

	For arch:

		sudo pacman -S docker docker-compose
		sudo systemctl start docker.service
		sudo systemctl enable docker.service
		sudo groupadd docker
		gpasswd -a user yourUserName

6. Start `docker-compose up`
7. In a browser open `http://localhost:8000` . You should see instruction.

## Plan
1. PHP
2. Symfony
3. JS
4. VUE

## Usefull links
How use git: https://learngitbranching.js.org/

### TODO:
 - add env. ports&passwords
 - depends in docker-compose
