## Como instalar a aplicação ##

Ao dar o git pull, rodar o comando COMPOSER INSTALL.

Ao rodar o comando COMPOSER INSTALL, copiar o arquivo .env.example e renomear para .env

Mudar as seguintes linhas

## DB_DATABASE=formcreator -> NOME DO BANCO DE DADOS
## DB_USERNAME=root -> USUARIO DO BANCO DE DADOS
## DB_PASSWORD= -> SENHA DO BANCO DE DADOS

rodar o comando php artisan key:generate

## PARA DEIXAR O AMBIENTE BACKEND RODANDO ##
Rodar o comando php artisan serve --host=0.0.0.0
