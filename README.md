# AgendaGeneratorPHP

## Purpose
For use by Loop1 Sales Engineers to build an HTML agenda for services projects

## Usage
- Fill out the form with the modules and days scoped for the agenda, choose an engagement type (or just server specs) and submit.
- CTRL-A copy the entire page it generates and paste it into the Word Agenda template we use already
 
## Dependencies
Requires PHP and some kind of web hosting to run this (I just used XAMPP when coding this locally)

## Installation
Install XAMPP on the server by running commands below
- `wget https://www.apachefriends.org/xampp-files/7.2.2/xampp-linux-x64-7.2.2-0-installer.run`
- `chmod +x xampp-linux-x64-7.2.2-0-installer.run`
- `sudo ./xampp-linux-x64-7.2.2-0-installer.run`
- `sudo /opt/lampp/xampp start`
Answer "y" to any y/n questions and accept defaults
Clone the repository:
- `cd /opt`
- `sudo git clone https://github.com/loop1systems/AgendaGenerator`

To update:
-`cd /opt/AgendaGenerator`
-`git pull`
