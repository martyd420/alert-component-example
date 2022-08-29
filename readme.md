Alert component example 
=================

This is a simple alert component example. It's homework from the "webrebel" course (https://github.com/yablko/youtube-matros-na-tahanie/blob/main/zadania_z_pohovorov.zip).
Based on https://github.com/nette/web-project

styless.scss is not used. its only for example because it was in the assignment. 
I use styles inside .latte template of alert component, because it is better, easy and universal :) 
(and i am not know how to compile scss inside .latte file)

Online example
----------------
[https://pcdr.cz/alert/www/
](https://pcdr.cz/alert/www/)

Web Server Setup
----------------

The simplest way to get started is to start the built-in PHP server in the root directory of your project:

	php -S localhost:8000 -t www

Then visit `http://localhost:8000` in your browser to see the welcome page.

Todo
----------------
 - Compile SCSS inside .latte files or use separate file (how to autoload it?)? 
 - Validate link expiration for countdown?
 - Ajax support [in progress]
 - Obrázky do data:image/png;base64,...

Original assignment
----------------
![Original assignment image](https://raw.githubusercontent.com/martyd420/alert-component-example/master/_ZADANI/komponenta-alert.png)