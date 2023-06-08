# NET Express - Sistema de Gerenciamento de Provedores de Internet

Bem-vindo ao repositório do sistema web de gerenciamento de provedores de internet! Este projeto é desenvolvido em Laravel e permite cadastrar, editar e deletar clientes, funcionários, provedores, planos de internet, chamados e instalações.

## Índice
- [Descrição](#descrição)
- [ScreenShots](#screenshots)
- [Instalação](#instalação)
- [Executando o Projeto com Docker](#executando-o-projeto-com-docker)
    - Imagens Docker
        1. [php:7.3.6-fpm-alpine3.9](#php736-fpm-alpine39)
        2. [PostgreSQL](#postgresql)
- [Executando Testes](#executando-testes)


## Descrição

O Laravel é um framework PHP de código aberto, conhecido por sua elegância, simplicidade e poder. Ele segue uma abordagem de desenvolvimento baseada em convenções, facilitando a criação de aplicativos web de alta qualidade com uma curva de aprendizado mínima.

Alguns benefícios do Laravel incluem:

- **Estrutura MVC**: O Laravel segue o padrão arquitetural Model-View-Controller (MVC), que separa a lógica de negócios, a apresentação e a manipulação de dados em componentes independentes. Isso permite uma melhor organização e manutenção do código.

- **ORM Eloquent**: O Laravel possui um ORM (Object-Relational Mapping) chamado Eloquent, que simplifica a interação com o banco de dados. Ele permite que você defina modelos PHP que mapeiam diretamente para tabelas do banco de dados, facilitando as operações de consulta, inserção, atualização e exclusão de registros.

- **Sistema de Rotas**: O Laravel oferece um sistema de roteamento flexível e poderoso. Com ele, você pode definir facilmente as rotas para suas páginas, controladores e ações, tornando a navegação em seu aplicativo mais clara e intuitiva.

- **Migrações de Banco de Dados**: O Laravel fornece migrações de banco de dados, permitindo que você defina e mantenha a estrutura do banco de dados em código. Isso facilita a colaboração entre desenvolvedores e a implantação consistente do esquema do banco de dados em diferentes ambientes.

Este projeto utiliza o template Material Dashboard Pro Laravel da Creative-Tim, que fornece uma interface de usuário moderna e responsiva com componentes pré-estilizados. O uso desse template ajuda a acelerar o desenvolvimento, fornecendo um conjunto de recursos e estilos pré-configurados.

Se tiver alguma dúvida ou feedback, não hesite em entrar em contato.

## ScreenShots

![login - NET Express](https://github.com/MrWillian/net-express/assets/50757994/8b4ac223-29b4-461e-8a60-0c4551a18507)
![register](https://github.com/MrWillian/net-express/assets/50757994/1a92945d-7d98-4b99-a0a0-c6cb4f313794)
![dashboard](https://github.com/MrWillian/net-express/assets/50757994/75fd1217-95c1-431f-8397-b19347f42f0d)
![clients](https://github.com/MrWillian/net-express/assets/50757994/6e6cb39d-2c7c-4e27-9642-c17d72edf4f7)
![register-client](https://github.com/MrWillian/net-express/assets/50757994/2a077018-3a14-4ed4-9b09-0edb1a45a73b)


## Instalação

Para começar, siga os passos abaixo para clonar o repositório e instalar as dependências necessárias:

1. Clone o repositório usando o seguinte comando:
   ```bash
   git clone https://github.com/MrWillian/net-express.git
   ```

2. Navegue até o diretório do projeto:
   ```bash
   cd net-express
   ```

3. Instale as dependências do projeto utilizando o Composer:
   ```bash
   composer install
   ```

4. Copie o arquivo de configuração `.env.example` para `.env`:
   ```bash
   cp .env.example .env
   ```

5. Gere a chave de criptografia do aplicativo:
   ```bash
   php artisan key:generate
   ```

6. Configuração do Banco de Dados:
   - Crie um banco de dados vazio para o projeto.
   - No arquivo `.env`, atualize as configurações de banco de dados com as informações do seu ambiente:
     ```dotenv
     DB_CONNECTION=mysql
     DB_HOST=seu-host
     DB_PORT=sua-porta
     DB_DATABASE=seu-banco-de-dados
     DB_USERNAME=seu-usuário
     DB_PASSWORD=sua-senha
     ```

7. Execute as migrações do banco de dados para criar as tabelas:
   ```bash
   php artisan migrate
   ```

8. Inicie um servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

9. Acesse o aplicativo em seu navegador através do endereço `http://localhost:8000`.


## Executando o Projeto com Docker

Este projeto pode ser executado facilmente utilizando o Docker Compose. Certifique-se de ter o Docker e o Docker Compose instalados em sua máquina.

### php:7.3.6-fpm-alpine3.9
- Versão: 7.3.6
- Descrição: Esta imagem Docker fornece um ambiente PHP para executar o aplicativo Laravel. Ela é baseada na distribuição Alpine Linux, que é conhecida por sua leveza e segurança. O FPM (FastCGI Process Manager) é utilizado para processar solicitações PHP.

- Comandos Docker:
  - `FROM php:7.3.6-fpm-alpine3.9`: Define a imagem base a ser utilizada.
  - `RUN apk add --no-cache openssl bash nodejs npm postgresql-dev`: Instala as dependências necessárias para o projeto. Inclui o OpenSSL, o Bash, o Node.js, o npm e o postgresql-dev.
  - `RUN docker-php-ext-install bcmath pdo pdo_pgsql`: Instala as extensões PHP necessárias para o projeto, incluindo bcmath, pdo e pdo_pgsql.
  - `WORKDIR /var/www`: Define o diretório de trabalho para `/var/www`.
  - `RUN rm -rf /var/www/html && ln -s public html`: Remove o diretório `/var/www/html` e cria um link simbólico chamado `html` que aponta para a pasta `public`, conforme esperado pelo Laravel.
  - `RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer`: Instala o Composer, uma ferramenta de gerenciamento de pacotes PHP.
  - `COPY . /var/www`: Copia todos os arquivos do diretório atual para o diretório `/var/www` no contêiner.
  - `RUN chmod -R 777 /var/www/storage`: Define permissões de escrita para a pasta de armazenamento do Laravel.
  - `EXPOSE 9000`: Expõe a porta 9000, que é a porta padrão para o serviço PHP-FPM.
  - `ENTRYPOINT [ "php-fpm" ]`: Define o comando padrão a ser executado quando o contêiner for iniciado.

### PostgreSQL
- Versão: Mais recente
- Descrição: O PostgreSQL é um sistema de gerenciamento de banco de dados relacional de código aberto amplamente utilizado. É uma escolha comum para projetos Laravel devido à sua compatibilidade e recursos avançados.

- Comandos Docker (docker-compose.yml):
  - `image: postgres`: Define a imagem oficial do PostgreSQL a ser utilizada.
  - `environment`:
    - `POSTGRES_USER`: Define o nome de usuário para o banco de dados.
    - `POSTGRES_PASSWORD`: Define a senha para o usuário do banco de dados.
    - `POSTGRES_DB`: Define o nome do banco de dados a ser criado.

Essas são as principais imagens Docker utilizadas no projeto.

`docker-compose.yml`:

1. [web](#web)
2. [db](#db)
3. [nginx](#nginx)

### web
- Descrição: Este serviço representa o contêiner do aplicativo web Laravel.
- Comandos Docker:
  - `build: .`: Constrói a imagem do contêiner com base no Dockerfile presente no diretório atual.
  - `volumes: - ./:/var/www/`: Monta o diretório atual (onde está o código do projeto) no diretório `/var/www/` do contêiner.
  - `depends_on: - db`: Especifica que o serviço `web` depende do serviço `db`.
  - `restart: always`: Garante que o contêiner seja reiniciado sempre que ocorrer uma falha ou quando o Docker daemon for reiniciado.

### db
- Descrição: Este serviço representa o contêiner do banco de dados PostgreSQL.
- Comandos Docker:
  - `image: postgres:12.0-alpine`: Utiliza a imagem oficial do PostgreSQL versão 12.0 no Alpine Linux.
  - `restart: always`: Garante que o contêiner seja reiniciado sempre que ocorrer uma falha ou quando o Docker daemon for reiniciado.
  - `environment: POSTGRES_PASSWORD, POSTGRES_DB`: Define as variáveis de ambiente para configurar a senha e o nome do banco de dados do PostgreSQL.
  - `volumes: - "./.docker/dbdata:/var/lib/postgresql/data"`: Monta o diretório local `.docker/dbdata` no diretório `/var/lib/postgresql/data` do contêiner, para persistir os dados do banco de dados.

### nginx
- Descrição: Este serviço representa o contêiner do servidor web Nginx.
- Comandos Docker:
  - `build: ./.docker/nginx`: Constrói a imagem do contêiner com base no Dockerfile presente no diretório `.docker/nginx`.
  - `restart: always`: Garante que o contêiner seja reiniciado sempre que ocorrer uma falha ou quando o Docker daemon for reiniciado.
  - `ports: - "8000:80"`: Mapeia a porta 8000 do host para a porta 80 do contêiner, permitindo o acesso ao aplicativo Laravel através do endereço `http://localhost:8000`.
  - `volumes: - ./:/var/www`: Monta o diretório atual (onde está o código do projeto) no diretório `/var/www` do contêiner.
  - `depends_on: - web`: Especifica que o serviço `nginx` depende do serviço `web`.

Essas são as configurações principais presentes no arquivo `docker-compose.yml` para o projeto.

1. Clone o repositório como mencionado anteriormente.

2. Navegue até o diretório do projeto:
   ```bash
   cd net-express
   ```

3. Execute o seguinte comando para iniciar os contêineres Docker:
   ```bash
   docker-compose up -d
   ```

4. Aguarde até que os contêineres sejam criados e iniciados.

5. Quando a execução estiver concluída, você poderá acessar o aplicativo em seu navegador através do endereço `http://localhost:8000`.

## Executando Testes

Este projeto inclui testes automatizados para garantir a qualidade e a estabilidade do código. Para executar os testes, siga as etapas abaixo:

1. Certifique-se de estar no diretório do projeto.

2. Execute o seguinte comando para executar os testes:
   ```bash
   ./vendor/bin/phpunit
   ```

Isso iniciará a execução dos testes e exibirá os resultados no terminal.

