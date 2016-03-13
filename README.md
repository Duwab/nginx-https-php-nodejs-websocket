# Smart Architecture

Sample architecture dealing with different languages and frameworks, using cache and https

Example on https://archi.duwab.com


## Checking requirements
### Softwares
nginx

nodejs

php5-fpm

cron

### Packages managers and CLI
npm

composer

cordova

ionic

bower

grunt

# Configuring Nginx
**SSL:** https://www.digitalocean.com/community/tutorials/how-to-create-an-ssl-certificate-on-nginx-for-ubuntu-14-04

*Reminder:* The command to create your own certificate is
```
sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /srv/nginx/ssl/nginx.key -out /srv/nginx/ssl/nginx.crt
```

**Cache:** see nginx/main

**Websocket:** see nginx/main

**Public assets:** see nginx/main

When everything is alright:
```
sudo ln -s /srv/nginx/main /etc/nginx/sites-enabled/
sudo rm /etc/nginx/sites-enabled/default
sudo service nginx restart
```

# Dealing with Symfony
```
cd *symfony-folder*
composer install
```


# Dealing with NodeJS
```
cd *node-folder*
npm install
nohup node app.js &
```


# Dealing with Ionic
```
cd *ionic-folder*
npm install
ionic serve -a  # enables to access the application remotely
```
