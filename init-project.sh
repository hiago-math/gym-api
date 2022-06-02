#!/usr/bin/env bash
echo 'Iniciando configuracoes do projeto...'

echo 'Iniciando projeto com docker... '
sudo docker-compose up -d

echo 'É a primeira vez configurando o projeto? (s ou n)'
read init

if [ "$init" == "s" ]; then
    echo 'Buildando docker'
    sudo docker-compose up -d --build

    echo 'Restartando containers'
    sudo docker-compose restart

    echo 'Voce já configurou sua chave composer em seu ambiente ? (s ou n)'
    read exist_composer

    if [ "$exist_composer" == "n" ]; then
        echo 'qual sua chave composer? se não souber acesse, e gere uma:'  https://github.com/settings/tokens
        read key_composer
        sudo docker-compose exec app composer config --global --auth github-oauth.github.com $key_composer

        echo 'Chave configurada globalmente para o aparelho de desenvolvimento atual'
    fi

    echo 'Instalando packs com composer do php...'
    sudo docker-compose exec app composer install

    echo 'Copiando env de exemplo...'
    sudo cp .env.example .env

    echo 'Adicionando key do artisan...'
    sudo docker-compose exec app php artisan key:generate

    echo 'Gostaria de rodar a Migration? (s ou n)'
    read resposta_migration
        if [ "$resposta_migration" == "s" ]; then
        sudo docker-compose exec app php artisan migrate
        fi
fi

echo 'Acesse a api em: ' http://api-gym.localhost:8005
exit;
