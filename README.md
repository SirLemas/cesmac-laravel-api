# Tutorial de como utilizar está API

### Primeiros Passos

- Caso seja a primeira vez utilizando o laravel, lembrar de primeiramente, rodar o comando "composer install" para baixar as dependências do composer
- Criar um arquivo de configuração a partir do arquivo ".env.example", criar o arquivo .env
- Configurar as credências do banco de dados dentro do .env

<hr>

### Após executar os comando essênciais acima, aqui em baixo estará uma lista de comandos para rodar em sequência para evitar erros durante o teste da API

1. **Executar o comando: composer dumpautoload -o**
    - Ele vai baixar as versões mais recentes de todos os pacotes, classes e bibliotecas que existem no seu projeto, e vai recarregar e atualizar o arquivo de autoload e com isso "achará" a seed criada que em alguns casos mesmo você vendo o arquivo ela não consegue ser rodada, mas com o comando acima a gente garante que será executada!
2. **Executar o comando: php artisan migrate**
    - O comando serve para executar todas as migrations e com isso criar no nosso banco de dados a tabela todolist, mas esse nome fica a critério para poder alterar, lembrando que, se alterar o nome da tabela, tem que alterar também na migration a referência "table" para apontar corretamente a nova tabela.
3. **Executar o comando: php artisan db:seed CreateSomeListsSeeder**
    - O comando acima servirá para criar algumas listas falsas para a gente poder utilizar/visualizar alguma coisa com a API.
4. **Depois de todos os comandos acima criados, hora de se divertir mexendo na api via postman para recuperar todos os dados, atualizar alguma lista de tarefas e também deletar.**

<hr>

# Observações

1. Ainda nesta API precisaremos falar com o Áquila para integrar ela ao Kafka para ler/escrever as atualizações vindas da API em python.
2. Em caso de problemas com alguma parte do código me contactar para que eu consiga resolver o erro que está acontecendo.
3. Fiz sem o docker por que vi que o Kafka que o Áquila criou já está com o docker.
