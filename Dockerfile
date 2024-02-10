FROM nginx:latest

COPY nginx/* /etc/nginx/conf.d
COPY . /usr/share/nginx

RUN rm -rf /usr/share/nginx/nginx

