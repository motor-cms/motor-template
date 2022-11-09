## About MOTOR NX CMS

## Installation PRODUCTION
    
    cp .env.example .env

    cd docker
    docker-compose -p motor-nx up -d
    
    docker exec -it motor-nx-app-1 /bin/bash
    php artisan db:seed

## Installation DEVELOPMENT

    cp .env.example .env

    // Clone packages
    mkdir packages
    cd packages
    git clone git@github.com:motor-cms/motor-core.git
    git clone git@github.com:motor-cms/motor-admin.git
    git clone git@github.com:motor-cms/motor-media.git
    cd ..

    cd docker
    docker-compose -f docker-compose-dev.json -p motor-nx-dev up -d
    
    docker exec -it motor-nx-dev-app-1 /bin/bash
    php artisan db:migrate
    php artisan db:seed
    ...

    // Update composer dependencies
    COMPOSER=composer-dev.json composer update

Login is motor@esmaili.info / admin
