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
--> Project still searches for an sqlite-connection. So we changed to sqlite connection. (Mozes)




Database credentials: 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=twitter-clone
DB_USERNAME=root
DB_PASSWORD=''