# 📬 Message Moodle Plugin

![Moodle Plugin](https://img.shields.io/badge/Moodle-Plugin-blue) ![PHP](https://img.shields.io/badge/PHP-%3E%3D%207.4-green) ![License](https://img.shields.io/badge/License-GPLv3-yellow)

## Descrição
O **Message Moodle Plugin** é um plugin personalizado desenvolvido para o Moodle que permite criar e gerenciar mensagens diretamente no ambiente Moodle. Com este plugin, você pode:

- **Criar mensagens** através de um formulário intuitivo.
- **Armazenar** as mensagens em um banco de dados dedicado.
- **Visualizar todas as mensagens** em uma página de gerenciamento centralizada.

## 🚀 Funcionalidades
- **Formulário de Criação**: Permite a criação de novas mensagens, definindo o texto e o tipo de notificação (sucesso, aviso, erro ou informativo).
- **Armazenamento no Banco de Dados**: As mensagens criadas são armazenadas de forma segura no banco de dados do Moodle.
- **Página de Gerenciamento**: Interface amigável para listar todas as mensagens criadas, facilitando a organização e visualização.

## 🛠 Tecnologias Utilizadas
- **PHP**
- **Moodle API**
- **MySQL** (para armazenamento de dados)
- **Mustache** (para templates de exibição)
- **HTML e CSS** (para estilização da interface)

## 💻 Como Usar
1. Acesse a página de gerenciamento do plugin no Moodle.
2. Utilize o formulário para criar novas mensagens.
3. As mensagens criadas podem ser visualizadas na página de gerenciamento, com etiquetas de status indicando o tipo de mensagem.

## 📋 Requisitos
- **Moodle 3.9** ou superior.
- Acesso administrativo para instalar e configurar plugins.

## 🎯 Exemplo de Uso
- Professores podem usar o plugin para enviar notificações para os alunos.
- Administradores podem criar mensagens de aviso ou lembretes importantes para toda a comunidade acadêmica.

## 🛠 Instalação
1. Baixe o repositório e extraia-o.
2. Copie a pasta para o diretório `/local` do seu Moodle.
3. Acesse o Moodle como administrador e siga as instruções para concluir a instalação do plugin.

```bash
git clone https://github.com/seu-usuario/message-moodle-plugin.git
