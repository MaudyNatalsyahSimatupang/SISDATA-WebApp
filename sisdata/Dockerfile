# Gunakan image PHP dengan Apache
FROM php:8.2-apache

# Tambahkan konfigurasi agar Apache tidak warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Install ekstensi PHP untuk MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Salin semua file project ke dalam container
COPY . /var/www/html/

# Ubah hak akses
RUN chown -R www-data:www-data /var/www/html

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Jalankan Apache
CMD ["apache2-foreground"]

# Container akan mendengarkan di port 80
EXPOSE 80
