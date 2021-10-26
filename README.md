# bootcamp-web

## How to start:
1. Make fork of the repository ( https://www.youtube.com/watch?v=HbSjyU2vf6Y or https://docs.github.com/en/get-started/quickstart/fork-a-repo )
2. `git clone git@github.com:<YOU>/bootcamp-web.git` change `<YOU>` to your name in git. example `git clone git@github.com:held-m/bootcamp-web.git`
3. `cd bootcamp-web`
4. Create a new branch with your name or nickname `git checkout -b yourName`
5. Install docker and docker-compose. ( https://docs.docker.com/engine/install/ or https://www.youtube.com/watch?v=33c0uBjGgdM ).

	For archlinux:

		sudo pacman -S docker docker-compose
		sudo systemctl start docker.service
		sudo systemctl enable docker.service
		sudo groupadd docker
		sudo gpasswd -a user docker (replace UserName with your username in archlinux)

6. Start `docker-compose up`
7. In a browser open `http://localhost:8000` . You should see instruction.

## Plan
1. PHP
2. Symfony
3. JS
3. VUE

## Usefull links
How use git: https://learngitbranching.js.org/

### TODO:
 - add env. ports&passwords
 - depends in docker-compose
