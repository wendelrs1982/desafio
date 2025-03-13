# Configurações iniciais do projeto
- Para baixar todas as dependências do projeto, dentro da pasta do projeto, abra o terminal e digite os seguinte comando:
```bash
composer install + enter
```


# Criando o contêiner para executar o projeto
Para criar o nosso contêiner, pé preciso criar 3 arquivos. São Eles:

* **docker-compose.yml** : Serve para definir e gerenciar múltiplos contêineres Docker em um ambiente de forma automatizada. Ele descreve como os serviços Docker (como PHP, Nginx e PHP Unit) devem ser configurados e interconectados.
* **Dockerfile** : Script que define todas as etapas para criar uma imagem Docker personalizada. Ele descreve como o ambiente deve ser configurado, quais dependências devem ser instaladas e quais comandos devem ser executados para rodar a aplicação.
* **nginx.conf** : Serve para configurar o servidor web Nginx, definindo como ele lida com requisições HTTP, roteamento de arquivos, redirecionamentos e comunicação com o PHP via FastCGI.


Após a finalizarmos a criação desses 3 arquivos podemos executar os comandos necessários para criar e iniciar o nosso contêiner.
<br><br>

# Como executar o Contêiner Docker
Dentro da pasta do projeto, abra o terminal e digite os seguintes comandos:

- Para criar o contêiner:
```bash
docker-compose build + enter
```

- Para iniciar o contêiner:
```bash
docker-compose up + enter
```

- Para acessar a aplicação, insira a seguinte url no navegador:
```bash
http://localhost:8080
```

- Para encerrar o contêiner  (caso queira reiniciar depois sem reconstrução):
```bash
docker-compose stop + enter
```

- Para remover o contêiner:
```bash
docker-compose down + enter
```
<br><br>
 
# Como executar os testes usando o PHP Unit
- Para executar os testes, dentro da pasta do projeto abra o terminal e digite o seguinte comando:
```bash
docker-compose run phpunit + enter
```