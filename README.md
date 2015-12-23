# Smart Architecture

## Checking requirements
nginx
nodejs
php5
cron
mysql-client??

# Configuring Nginx
SSL: https://www.digitalocean.com/community/tutorials/how-to-create-an-ssl-certificate-on-nginx-for-ubuntu-14-04

The command if you want to create your own certificate
```
sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /srv/nginx/ssl/nginx.key -out /srv/nginx/ssl/nginx.crt
```

Cache: see nginx/main

Websocket: see nginx/main

Assets: see nginx/main


```
service nginx restart
```

# Initialize Symfony's applications
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

TODO: use npm forever, configure grunt jobs or somethings like that 
