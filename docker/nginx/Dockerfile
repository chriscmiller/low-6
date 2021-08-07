FROM nginx
WORKDIR /var/www/vhost/
COPY ./config/default.conf /etc/nginx/conf.d/default.conf
COPY ./config/vhost.conf /etc/nginx/conf.d/vhost.conf
COPY ./ssl/self-signed.crt /etc/nginx/ssl/self-signed.crt
COPY ./ssl/self-signed.key /etc/nginx/ssl/self-signed.key
