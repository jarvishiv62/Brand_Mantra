FROM php:8.2-fpm

# BrandMantra Laravel Application Dockerfile

# Install system dependencies including nginx
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm \
    nginx

# Clear package cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY . /var/www/html

# Install Node.js dependencies and build assets
RUN npm install && npm run build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy environment file
RUN cp .env.example .env

# Generate application key
RUN php artisan key:generate

# Set permissions
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html/storage
RUN chmod -R 755 /var/www/html/bootstrap/cache

# Configure PHP-FPM to listen on port 9000
RUN echo "[www]" > /etc/php/8.2/fpm/pool.d/www.conf && \
    echo "user = www-data" >> /etc/php/8.2/fpm/pool.d/www.conf && \
    echo "group = www-data" >> /etc/php/8.2/fpm/pool.d/www.conf && \
    echo "listen = 9000" >> /etc/php/8.2/fpm/pool.d/www.conf && \
    echo "listen.owner = www-data" >> /etc/php/8.2/fpm/pool.d/www.conf && \
    echo "listen.group = www-data" >> /etc/php/8.2/fpm/pool.d/www.conf && \
    echo "pm = dynamic" >> /etc/php/8.2/fpm/pool.d/www.conf && \
    echo "pm.max_children = 5" >> /etc/php/8.2/fpm/pool.d/www.conf && \
    echo "pm.start_servers = 2" >> /etc/php/8.2/fpm/pool.d/www.conf && \
    echo "pm.min_spare_servers = 1" >> /etc/php/8.2/fpm/pool.d/www.conf && \
    echo "pm.max_spare_servers = 3" >> /etc/php/8.2/fpm/pool.d/www.conf

# Configure nginx
COPY nginx.conf /etc/nginx/sites-available/default

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start nginx and php-fpm
CMD service nginx start && php-fpm
