# Use the official PHP image with Apache
FROM php:8.1-apache

# Set the working directory
WORKDIR /var/www/html/marvel

# Copy the application files
COPY . .

# Install any necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 80
EXPOSE 80


