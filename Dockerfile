# Usar la imagen base de PHP con Apache
FROM php:7.4-apache

# Instalar extensiones de PHP necesarias (p.ej. mysqli)
RUN docker-php-ext-install mysqli

# Copiar el código fuente de la aplicación al contenedor
COPY ./web /var/www/html

# Exponer el puerto 80 para el servidor web
EXPOSE 80

