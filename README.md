# AgendaGeneratorPHP

## Purpose
For use by Loop1 Sales Engineers to build an HTML agenda for services projects

## Usage
- Fill out the form with the modules and days scoped for the agenda, choose an engagement type (or just server specs) and submit.
- CTRL-A copy the entire page it generates and paste it into the Word Agenda template we use already
 
## Dependencies
Requires PHP and some kind of web hosting to run this (I just used XAMPP when coding this locally)

## Installation
- Install apache
    - `sudo apt-install apache2`
- Install php
    - `sudo apt-install php-fpm`
    - `sudo a2enmod proxy_fcgi setenvif`
    - `sudo a2enconf php7.4-fpm`
    - `sudo systemctl reload apache2`
- Edit apache config for agendas file
    - sudo nano /etc/apache2/sites-available/agenda.conf
    ```
    <VirtualHost *:80>
        ServerAdmin webmaster@localhost
        ServerName agenda
        ServerAlias agenda
        DocumentRoot /var/www/AgendaGenerator
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
    </VirtualHost>
    ```
  - Enable the site and restart it
      - `a2ensite agenda.conf`
      - `sudo systemctl reload apache2`
  

To update:
- `cd /var/www/AgendaGenerator`
- `git pull`
