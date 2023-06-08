# NET Express - Sistema de Gerenciamento de Provedores de Internet

Bem-vindo ao repositório do sistema web de gerenciamento de provedores de internet! Este projeto é desenvolvido em Laravel e permite cadastrar, editar e deletar clientes, funcionários, provedores, planos de internet, chamados e instalações.

## Índice
- [Descrição](#descrição)
- [ScreenShots](#screenshots)
- [Instalação](#instalação)
- [Executando o Projeto com Docker](#executando-o-projeto-com-docker)
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

   Isso iniciará a execução dos testes e ex

ibirá os resultados no terminal.

