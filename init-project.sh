#!/usr/bin/env bash

echo 'Iniciando configuracoes do projeto...'

echo 'Iniciando projeto com docker... '
sudo docker-compose up -d

echo 'Instalando packs com composer do php...'
sudo docker-compose exec app composer install

echo 'Copiando env de exemplo...'
sudo cp .env.example .env

echo 'Adicionando key do artisan...'
sudo docker-compose exec app php artisan key:generate

echo 'Gostaria de rodar a Migration? (sim ou nao)'
read resposta_migration

if [ "$resposta_migration" == "sim" ]; then
    sudo docker-compose exec app php artisan migrate
fi

exit;
