# LAMP SERVER IN DOCKER
## Introduction:
- This repository contains a complete setup for launching lamp stack or lamp server inside the [docker](https://www.docker.com/) container.
- Basically [LAMP](https://www.liquidweb.com/kb/what-is-a-lamp-stack/) is a acronym for Linux operating system ,Apache web server, Mysql database server & php scripting language which is  required for web developement . 
- I also have connected it with git so as soon as there will be change in your git repository it will automatically update the github 
repository.

### [Why docker??](https://www.infoworld.com/article/3310941/why-you-should-use-docker-and-containers.html)
- It takes a lots of time to set up the environment for these servers , for installation ,configuration & many more!!
- So, you can launch whole environment in just one click & can focuse on developing part except these things.
- you can also share the same environment which you have with your team mates by just cloning the [container](https://www.docker.com/resources/what-container) & by creating a image from it.
- For more :point_right: [visit](https://www.infoworld.com/article/3310941/why-you-should-use-docker-and-containers.html)
## Prerequisite:
 - you should have knowledge of how to write [docker-compose](https://docs.docker.com/compose/) files, how to [conncect php to mysql](https://www.a2hosting.in/kb/developer-corner/mysql/connect-to-mysql-using-php) 
 using PDO extension , database connectivity using php, [git](https://git-scm.com/) &
 [github](https://www.howtogeek.com/180167/htg-explains-what-is-github-and-what-do-geeks-use-it-for/) also
 in order to understand this lamp setup.
 
 ## Software Requirenments:
 - In order to launch this set up you must have these softwares in your system:
    1) [Linux operating system](https://developers.redhat.com/rhel8/)
    2) [Docker](https://docs.docker.com/get-docker/)
    3) [Docker-compose](https://docs.docker.com/compose/install/)
    4) [git](https://www.atlassian.com/git/tutorials/install-git)
        
 ## Steps:
 ### Step 1:
 - Clone this repository or download it in your computer .
 - The directory structure should be like this:
   - lamp
     - docker-compose.yml
     - html
       - index.php
       -  home.html
       -  home.css
       -  (your other files which you want to deploy) 
     -  php.Dockerfile 
 ### Step 2:
 1. check the version of docker-compose by this command to ensure you have docker-compose in your system:
      ``` 
      docker-compose version
      ```
 2. Now you should be in lamp directory because in this directory we have our **docker-compose.yml** file .
    - Now run this command to start your service:
       ``` 
       docker-compose up -d 
       ```
    - [other commands for you reference!](https://docs.docker.com/compose/reference/overview/)  
    
3. All the services will be run in background inside the docker container.
 ### Step 3:
 1. check ip address of your system by this command :
      ``` 
        ifconfig
      ```

    - It will give you many ip address but you have to concern  about system's  main network card.
    - for Example :  let **192.168.40.130** this is your system's id.
      
 ### Step 4:
 1. Go in your browser type this url in order to access web pages from web server:
     ``` 
     http://192.168.40.130:2000/
     ```
     (It will give you index file which is written in php.)
     
 2. Now for accessing phpmyadmin for managing mysql database write this url:
   ``` 
   http://192.168.40.130:7000/
   ```
   
 - Note : here 2000 & 7000 are port no. that should be free in your system if they are not then you can change by going inside the **docker-compose.yml** file
 ### Step 5:
  - Now create your own web pages & put them in **html** folder.
  - Now it will be accessible from browser at 2000 port .
 
 ### Step 6:[for updating github repository]:
 - create a empty github repository.
 - go in lamp directory & run these commands:
   ```
      git init
      git add .
      git commit -m "commit message"
   ```
   
 - For push in github directory:
    ```
       git remote add  [name of your github repo][link of github repo]
       git push --set-upstream [name of your github repo] master
        
    ```
 -  If you want to automatically push in your github repo after commit  run these commands also:
      ```
          cd  .git/
          cd hooks/
          vim post-commit
      ```
 - It will give you vim  editor just press **i** & type this:
   ```
      !/bin/bash
      git push
   ```
   - just press **esc key** & type **:wq** for exit from vim editor.
 - Now from next time you only need to commit in your local git it will push your git content automatically in github repository.
 
 ### Step 6:
 - If you want to stop the container service run this command in **lamp** directory:
 ```
    docker-compose stop
 ```
 
 ## Explaination:
 ## docker-compose.yml file:
 - This files contains **3 docker images** which is as following:
   1) php:7.4.5-apache
   2) mysql:5.7
   3) [phpmyadmin](https://hub.docker.com/r/phpmyadmin/phpmyadmin)
 - concepts used:
   - exposing of container
   - [environment variables](https://docs.docker.com/compose/environment-variables/)
   - storage 
   - [Docker file](https://docs.docker.com/engine/reference/builder/)
      & many more!
      
      
      
 ## Reference:
 - I created this project Under the mentorship of [Mr. Vimal Daga, Technical Head, LinuxWorld](https://in.linkedin.com/in/vimaldaga)
 in **docker training** under [##iiec_rise](https://www.linkedin.com/company/indian-innovation-entrepreneurship-community) 
 community.

 
   
  
 
   
  
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
