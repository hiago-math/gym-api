#!/usr/bin/env bash
echo 'Iniciando configuracoes do projeto...'
echo 'Iniciando projeto com docker... '
sudo docker-compose up -d
echo 'É a primeira vez subindo o projeto? (s ou n)'
read init
if [ "$init" == "s" ]; then
    echo 'Instalando packs com composer do php...'
    sudo docker-compose exec app composer install --prefer-dist
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
exit;
