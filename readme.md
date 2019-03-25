# phpterm
phpterm is a minimalistic extendable PHP-only terminal which works on shared hosting; all you need is PHP installed.

phpterm is intended for phones, tablets and PCs. It has a collapsible touch keyboard of its own which may be more useful than some touchscreen software keyboards.

It is easily extendable. If you type 'help' you will see a list of available commands.

Every command is an individual PHP file which is located in the commands/ directory.

To add a new command containing a PHP oneliner, type 'newcom.'

Real unix utilities are not used because phpterm is created for servers which do not allow this.

To install phpterm, download the zip file and extract it somewhere inside public_html. The .htaccess file points to phpterm.php which is the main module. The 'commands' and 'uploads' directories are also necessary if you want to use the software.

Please bear in mind that phpterm does not contain any security mechanisms and can be dangerous if used without caution.

Screenshots:

![Screenshot 3](screenshots/screenshot-phpterm3.png?raw=true)
![Screenshot 1](screenshots/screenshot-phpterm1.png?raw=true)
![Screenshot 2](screenshots/screenshot-phpterm2.png?raw=true)

Daniel Sedoff
