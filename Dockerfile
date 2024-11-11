# Usar la imagen base oficial de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo_mysql \
	&& docker-php-ext-install exif \
	&& docker-php-ext-enable exif \
    && a2enmod rewrite

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Establecer configuraciones PHP directamente en php.ini
RUN echo "memory_limit=512M" > /usr/local/etc/php/conf.d/php.ini \
    && echo "max_execution_time=90" >> /usr/local/etc/php/conf.d/php.ini \
    && echo "post_max_size=200M" >> /usr/local/etc/php/conf.d/php.ini \
    && echo "upload_max_filesize=200M" >> /usr/local/etc/php/conf.d/php.ini \
    && echo "max_input_vars=9000" >> /usr/local/etc/php/conf.d/php.ini \
    && echo "max_input_time=90" >> /usr/local/etc/php/conf.d/php.ini

# Copiar el contenido del proyecto Laravel
COPY . /var/www/html

# Crear las carpetas necesarias si no existen
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/vendor

# Establecer permisos para las carpetas de Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/vendor \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/vendor

# Instalar las dependencias de Composer
RUN composer install --ignore-platform-reqs --no-scripts --optimize-autoloader

# Exponer el puerto
EXPOSE 80

# Arrancar Apache en primer plano
CMD ["apache2-foreground"]
