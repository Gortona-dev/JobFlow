<div align="center">

# JobFlow

Sistema web para divulgacao e administracao de vagas, desenvolvido com PHP, CodeIgniter 4 e MySQL.

![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-4-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-UI-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)

</div>

---

## Objetivo

O JobFlow e uma aplicacao academica criada para praticar desenvolvimento web com PHP e CodeIgniter 4. O projeto simula uma plataforma simples de vagas, com area publica para visualizacao das oportunidades e area administrativa para gerenciar cargos e vagas.

## Funcionalidades

- Listagem publica de vagas.
- Pagina de detalhes de uma vaga.
- Login simples de administrador.
- CRUD de cargos.
- CRUD de vagas.
- Relacionamento entre vagas e cargos.
- Validacao de campos obrigatorios.
- Banco MySQL/MariaDB com script SQL incluso.

## Tecnologias

| Tecnologia | Uso |
| --- | --- |
| PHP 8.1+ | Linguagem principal |
| CodeIgniter 4 | Framework MVC |
| MySQL/MariaDB | Banco de dados |
| Bootstrap | Interface e componentes visuais |
| Composer | Gerenciamento de dependencias |

## Rotas Principais

| Rota | Descricao |
| --- | --- |
| `/` | Pagina publica com vagas |
| `/vaga/{id}` | Detalhes de uma vaga |
| `/admin-login` | Login do administrador |
| `/vagas` | Administracao de vagas |
| `/vagas/adicionar` | Cadastro de vaga |
| `/vagas/editar/{id}` | Edicao de vaga |
| `/cargos` | Administracao de cargos |
| `/cargos/adicionar` | Cadastro de cargo |

## Como Rodar Localmente

### Requisitos

- PHP 8.1+
- Composer
- MySQL ou MariaDB
- Servidor local como XAMPP, Laragon ou o servidor embutido do CodeIgniter

### 1. Clonar o repositorio

```bash
git clone https://github.com/Gortona-dev/JobFlow.git
cd JobFlow
```

### 2. Instalar dependencias

```bash
composer install
```

### 3. Configurar ambiente

Copie o arquivo de ambiente, caso exista:

```bash
cp env .env
```

No Windows, voce tambem pode copiar manualmente `env` para `.env`.

Configure a URL base e o banco de dados no `.env`:

```text
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = projetovagas
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```

### 4. Criar o banco

Importe o arquivo SQL:

```text
projetovagas.sql
```

Ele cria o banco `projetovagas`, as tabelas `cargos` e `vagas`, e alguns dados iniciais para teste.

### 5. Iniciar o servidor

```bash
php spark serve
```

Acesse:

```text
http://localhost:8080
```

## Acesso Administrativo

```text
Usuario: admin
Senha: admin123
```

## Estrutura

```text
JobFlow/
+-- app/
|   +-- Controllers/
|   +-- Models/
|   +-- Views/
|   +-- Config/
+-- public/
|   +-- css/
|   +-- js/
+-- writable/
+-- tests/
+-- composer.json
+-- projetovagas.sql
```

## Observacoes

Este projeto usa login simples com usuario e senha fixos para fins academicos. Em um ambiente real, o ideal seria implementar autenticacao com usuarios no banco, hash de senha, controle de sessao mais robusto e protecao adicional para rotas administrativas.

## Autor

Desenvolvido por [Gabriel Ortona](https://github.com/Gortona-dev).

