FROM php:7-apache

ENV DEMO_VAR="default from Dockerfile"

COPY content /var/www/html