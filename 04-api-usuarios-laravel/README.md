# Sobre o Projeto

Trata-se de uma Api Restful desenvolvida utilizando o Laravel 11 e que possui as seguintes funcionalidades:

- Criação de Usuário;
- Listar Usuários;
- Pesquisar por Usuários;
- Atualizar as Informações do Usuário;
- Excluir Usuários

<br>

# Rotas da Api
- Criação de Usuário -> http://localhost:8000/api/usuarios
- Listar Usuários -> http://localhost:8000/api/usuarios
- Pesquisar por Usuários (ID) -> http://localhost:8000/api/usuarios/{id}
- Atualizar as Informações do Usuário -> http://localhost:8000/api/usuarios/{id}
- Excluir Usuários -> http://localhost:8000/api/usuarios/1

<br>

# Ajustes iniciais do Projeto
- Para baixar todas as dependências do projeto, dentro da pasta do projeto, abra o terminal e digite os seguinte comando:
```bash
composer install + enter
```

<br>

# Executando o Projeto

**OBSERVAÇÕES**: Afim de facilitar a configuração do ambiente, estou disponibilizando os dados de configuração referentes ao APP_ e ao DB_ . 
Em uma situação normal, essas informações não podem ser disponibilizadas dessa forma. Aqui o objetivo é somente para faclitar a configuração do ambiente.

- **Insira as informações de Conexão do Banco de Dados no arquivo .env**
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
- **Insira as informações do APP no arquivo .env**
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:M3EdWx1RN0cbDl7vX4QBpxpXhvUuMeAzZUJ3VTsAC6k=
APP_DEBUG=true
APP_URL=http://localhost:8000
```
Execute as migrates do projeto
- **Subindo o servidor do Laravel**
```bash
php artisan migrate + enter
```

Para subir o ambiente, abra o terminal dentro da pasta raiz do projeto e execute o seguinte comando
- **Subindo o servidor do Laravel**
```bash
php artisan serve + enter
```

<br>