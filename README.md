
## Table of Contents

* [ Prerequisites ](#pre)
* [ Install and Run](#iar)
* [ Administrator ](#administrator)
* [ Resources](#resources)

<a name="pre"></a>

## Prerequisites
### <a  href="https://www.php.net/downloads" target="_blank"><img style="float:left;margin-right:10px"  src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>version 7.3 and up </a>  
### <a href="https://nodejs.org/en/" target="_blank"><img style="float:left; margin-right:10px" src="https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=nodedotjs&logoColor=white"/>  version 14 and up </a> 
### <a href="https://www.mysql.com/downloads/" target="_blank"><img style="float:left; margin-right:10px" src="https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white"/>  version 3 and up </a> 

<a name="iar"></a>

## Install and Run

1. Downoad [ZIP](https://github.com/RedberryInternship/davitlabadze-movie-quotes/archive/refs/heads/main.zip) or Clone: ```https://github.com/RedberryInternship/davitlabadze-movie-quotes.git```
2. Install all dependencies using the ```composer i``` command
3. Create env file Run the command ```cp .env.example .env```
4. Run  the command ```php artisan key:generate```    
5. Create a place to store images ```php artisan storage:link```
6. Create database run the command ```touch database/database.sqlite ```
7.  Run the command  ```php artisan migrate```
8.  Run the command  ```php artisan serve```

<a name="administrator"></a>

## Administrator

Run command ```php artisan add:admin``` and enter data. 

<a name="db"></a>

## Database structure
!['db'](appscreen/db.png)

<a name="resources"></a>

##  Resources
* [Spatie Package](https://github.com/spatie/laravel-translatable)
* [DrawSQL](https://drawsql.app/)  
* [Frontend](https://github.com/RedberryInternship/davitlabadze-movie-quotes-front#about-the-application)   
   



