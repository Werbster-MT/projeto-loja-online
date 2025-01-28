#!/bin/bash

echo "Verificando conteúdo de /var/www/codeigniter-app..."
ls -la /var/www/codeigniter-app || echo "Diretório não encontrado!"

sudo service nginx restart