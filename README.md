# tenny-repo
* i just uploaded a recent file called goldenaira. This is what you should use. I discovered a potential bug in the upliftas i uploaded ealier. 



*the file named upliftas.sql is the database configuration file
*the file upliftaas.zip is the website file
*In upliftaas.zip, there is a folder called 'application', open this folder and navigate to 'config' folder, open the config folder also. You will see some files listed there. 
* Edit th 'config.php' file and change the url to point to nothing when using an offline server like xamp or wamp e.g base_url='';
* In the case where you want to host the site online, this base_url should havethe domain name e.g base_url='http://exampleDomain.com/';
** take note of the trailing slash i added.

*After this, edit the database file and put your database parameters in there
