# To-Do App #  

## Introduction ##  

This app a solution to store a list of things to do which will be presented as a series of post-its.  

## Installation ##  

The app needs a local server and MySQL.  
A practical solution is the use of a package such as [Mamp](https://www.mamp.info/en/), [Xampp](https://www.apachefriends.org/) or [Wamp](https://www.wampserver.com/).
When the program starts, it checks whether a database exists for the data. If so, it will use it. Otherwise, one will be created and used.  
Parameters for the database are available and may be edited in the `env.inc.php` file found [here](./inc/env-env.inc.php).

## Utilization ##  

The user may create, read, update and delete elements in a to-do list.  
Each will have a title (20 chars max) and a text (100 chars max).  

## Development ##  

### Tools ###  

- [Apache](https://httpd.apache.org/) (2.4.53)  
- [PHP](https://www.php.net/) (7.4.29)
- [MariaDB](https://mariadb.org/) (10.4.24)  
- [Node](https://nodejs.org/) (16.17.1)  
- [Tailwind](https://tailwindcss.com/) (3.2.7)  
- [Visual Studio Code](https://code.visualstudio.com/) (1.76.2)  

### Troubleshooting ###  

- Visual Studio Code issues errors with Tailwind `@` rules. Hence the file `settings.json` in the `.vscode` folder.  Without it, the compilation should work but the IDE will keep showing warnings.  
- Github's languages stats misinterprets some PHP files (those with only HTML content) as Hack.  The `.gitattributes` file fixes that.

## Release ##  

The main branch of this repo contains all the working files needed for developping the app.  
The final files for the release can be found on another branch: `release`.  