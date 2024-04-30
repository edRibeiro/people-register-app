# Cadastro de Pessoas usando Laravel Sail

Um simples sistema de cadastro de pessoas desenvolvido com Laravel Sail.

## 🚀 Começando

Estas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

### 📋 Pré-requisitos

Você precisa ter o Docker e o Docker Compose instalados na sua máquina.

### 🔧 Instalação

1. Clone o repositório para sua máquina local:

```
git clone https://github.com/edRibeiro/people-register-app.git
```

2. Navegue até o diretório do projeto:

```
cd people-register-app
```

3. Inicie o ambiente com o Laravel Sail:

```
./vendor/bin/sail up -d
```

4. Instale as dependências do PHP:

```
./vendor/bin/sail composer install
```

5. Copie o arquivo de ambiente de exemplo e configure-o conforme necessário:

```
cp .env.example .env
```

6. Gere a chave de aplicativo:

```
./vendor/bin/sail artisan key:generate
```

7. Execute as migrações do banco de dados:

```
./vendor/bin/sail artisan migrate
```

8. Acesse o aplicativo em seu navegador em `localhost`.

## ⚙️ Executando os testes

Para executar os testes automatizados, você pode usar o Laravel Sail. Basta executar o comando:

```
./vendor/bin/sail test
```

Isso executará todos os testes disponíveis no aplicativo.

## 📦 Implantação

Para implantar este aplicativo em um ambiente ativo, você pode seguir as instruções de implantação do Laravel Sail.

## 🛠️ Construído com

* [Laravel](https://laravel.com/) - O framework PHP usado
* [Sail](https://laravel.com/docs/8.x/sail) - Ambiente de desenvolvimento Docker para Laravel
* [Tailwind CSS](https://tailwindcss.com/) - Estrutura CSS utilizada


## ✒️ Autores

* **Ederson Ribeiro** - *Trabalho Inicial* - [edRibeiro](https://github.com/edRibeiro)
* **Ederson Ribeiro** - *Documentação* - [edRibeiro](https://github.com/edRibeiro)


## 📄 Licença

Este projeto está sob a licença MIT - veja o arquivo [LICENSE.md](LICENSE.md) para detalhes.

## 🎁 Expressões de gratidão

* Conte a outras pessoas sobre este projeto 📢;
* Um agradecimento publicamente 🫂;
* etc.

---
⌨️ Atenciosamente por [Ederson Ribeiro](https://github.com/edRibeiro)
