## About MOTOR NX CMS

## Installation
    
    cp .env.example .env

    cd docker
    docker-compose -p motor-nx up -d
    
    docker exec -it motor-nx-app-1 /bin/bash
    php artisan db:seed

Login is motor@esmaili.info / admin
