FROM nginx:latest

COPY nginx/ /etc/nginx/conf.d
COPY . /usr/share/nginx

RUN rm -rf /usr/share/nginx/nginx /usr/share/nginx/php /usr/share/nginx/html/index.html

