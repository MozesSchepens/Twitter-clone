Plan of development:

--> Setup Laravel-project + made GitHub directory. (Mozes)
--> Requested Microsoft-VM-server. (Seth)
--> Installing docker + Understanding Docker-basics.
--> Implementing current project in Docker.
--> Downloaded php on VM. (Mozes)
--> Downloaded docker on VM. (Mozes)
--> Downloaded VS with git and composer. (Mozes)
--> Dowloaded Apache on VM --> Didn't work --> Switched to XAMPP for development-stage.
    --> Covered our database-question since XAMPP works with MySQL.
--> Tried our docker for the first time on the VM.
    --> In order for docker to run with HyperV or WSL, virtualisation needs to be enabled through the BIOS-menu.
        We as developers couldn't reach that BIOS, only the ICT-staff, so that was a little extra wait.
        After reasearch, the ICT-staff found out they couldn't change it either, so we got handed a new Windows-VM.
--> Given the setback, we installed above listed programs again, this time on our new VM. (Mozes)
--> Through the VM-process, we tried to start the front-end development, but came across XAMPP-errors. (Seth)
--> We didn't have any documentation untill now, so we summarized our steps and made the documentation. (Seth)
--> Made basic front-end with a posts-feed and a form to add a new post. (Seth)
--> Stepped away from XAMPP in our VM and started using MySQL for safety. (Mozes)
--> Documenting needed programs and credentials. (Seth)
--> Launching our docker through VS-Code in the VM. (Mozes)
--> Setup yaml file via GitHub Actions, but still need to verify Educational License. (Seth)
--> Project searches for sqlite-connection while we use MySQL, So we tried a docker-reset in VS-Code. (Mozes)
--> Project still searches for an sqlite-connection. Edited docker-compose to make it search for MySQL-connection. (Mozes)
--> ChatGPT AND Github Actions went down.
--> Found some mistakes in our database credentials, wich made our database unable to load in docker. Solved this problem. (Mozes)
--> Now, the docker and VM part should be functioning. Github actions is still down. Waiting...
--> error message: "This page isn't working right now" displayed when trying to reach website.
--> Tried using nginx default.conf to deploy our site. Doesn't work. (Mozes)
--> Implementing account creation in Laravel. Didn't succeed. (Seth)
--> Final troubleshooting --> Site runs online!
--> Github actions works --> yaml doesn't work as expected
--> Created GitHub secrets so my GitHub Actions can acces the project. (Seth)
--> CI/CD pipeline runs!




Database credentials: 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=twitter-clone
DB_USERNAME=root
DB_PASSWORD=''

Requirements to edit app as developer:

--> EHB network/VPN
--> Docker
--> Code editor & compiler
--> Php
--> Composer
--> Laravel

Step by step:

Install requirements on Windows VM:

Install Docker Desktop: https://www.docker.com/products/docker-desktop
Install VSCode: https://code.visualstudio.com/
Install Git: https://git-scm.com/

Open terminal & clone repository:
git clone https://github.com/MozesSchepens/twitterclone.git
Docker enviroment set-up:

Make sure docker is running.
Create Dockerfile & docker-compose.yml file in root of the project.

start Docker containers:

In project root terminal, run:
docker-compose up -d

Install PHP-dependencies with Composer:

If docker containers are running, connect to PHP container:
docker exec -it <php_container_name> bash
Install Composer dependencies:
composer install

Configure .env file:

Copy .env.example to .env:
cp .env.example .env
Change database configuration in .env (use MySQL containername as DB_HOST).

Generate de application key:

php artisan key:generate

Excecute database migrations:

php artisan migrate

Start server:

docker-compose up -d

Start browser and type: http://<VM_IP>:8000.

Requirements to run app online as user:

--> EHB network/VPN

Sources:

--> Made with help of ChatGPT
--> yaml-file inspired by https://juliocasal.com/blog/Building-A-CICD-Pipeline-With-GitHub-Actions