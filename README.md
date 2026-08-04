# 🌿 Vina Gestão de Resíduos Sólidos — Website & Tema WordPress

Este repositório contém o código-fonte do tema e as configurações de build do site da **Vina Gestão de Resíduos Sólidos** ([vinaec.com.br](https://vinaec.com.br)).

---

## 🚀 Arquitetura do Projeto

O projeto adota uma arquitetura moderna e isolada para WordPress, priorizando performance, facilidade de manutenção e segurança:

- **Tema Principal:** [`wp-content/themes/vina-2025`](wp-content/themes/vina-2025/)
- **Build & Compilation:** Webpack 5 com Sass (Dart Sass), Autoprefixer, PurgeCSS e Imagemin (WebP).
- **Gerenciamento de Plugins e Core:** [Composer](https://getcomposer.org/) com [Wpackagist](https://wpackagist.org/) para controle determinístico de versões via `composer.lock`.
- **Gerenciamento de Dependências Frontend:** NPM com `package-lock.json`.
- **CI/CD & Deploy Automático:** GitHub Actions ([`.github/workflows/master.yml`](.github/workflows/master.yml)) via FTP/SFTP.

---

## 🛠️ Requisitos do Sistema

- **PHP:** `>= 8.0`
- **Node.js:** `>= 18.0.0`
- **Composer:** `2.x`
- **Servidor Local:** LocalWP, XAMPP ou Docker.

---

## 📦 Instalação e Configuração Local

### 1. Clonar o Repositório
```bash
git clone https://github.com/tfpeixoto/vina.git
cd vina
```

### 2. Instalar Dependências do Frontend
```bash
npm install
```

### 3. Gerar o Lockfile do Composer (Plugins & Core)
```bash
composer update --no-install
```

---

## 💻 Comandos de Desenvolvimento (Scripts NPM)

| Comando | Descrição |
| :--- | :--- |
| `npm run dev` | Inicia o Webpack em modo *watch* com recompilação automática e BrowserSync. |
| `npm run build` | Compila os arquivos de CSS e JS para produção com otimizações e PurgeCSS. |

---

## 🎼 Gerenciamento de Plugins e WordPress Core (Composer)

Todos os plugins ativos no site e o WordPress Core são gerenciados declarativamente no arquivo `composer.json`.

### Plugins Gerenciados:
- **Advanced Custom Fields (ACF)** (`wpackagist-plugin/advanced-custom-fields`)
- **Rank Math SEO** (`wpackagist-plugin/seo-by-rank-math`)
- **Contact Form 7** (`wpackagist-plugin/contact-form-7`)
- **All-in-One WP Migration** (`wpackagist-plugin/all-in-one-wp-migration`)
- **Cloudflare** (`wpackagist-plugin/cloudflare`)
- **WebP Express** (`wpackagist-plugin/webp-express`)
- **Asset CleanUp: Page Speed Booster** (`wpackagist-plugin/wp-asset-clean-up`)
- **Classic Editor** (`wpackagist-plugin/classic-editor`)
- **Export Featured Images** (`wpackagist-plugin/export-featured-images`)

### Atualizando Plugins ou o WordPress Core:
Para atualizar todos os plugins e o core para as versões estáveis mais recentes:
```bash
composer update --no-install
```
O comando atualizará o arquivo `composer.lock`. Ao commitar este arquivo e enviar para o GitHub, a pipeline de CI/CD fará o deploy automático das novas versões.

---

## 🔄 Pipeline de CI/CD & Deploy Automático

A hospedagem é atualizada automaticamente via **GitHub Actions** em cada `push` nas branches `main` ou `master`:

1. **Build do Frontend:** Executa `npm ci` e `npm run build` para compilar o tema.
2. **Download de Plugins:** Executa `composer install --no-dev` para baixar as versões exatas.
3. **Deploy FTP:** Envia apenas o código compilado e os plugins atualizados para o servidor, **preservando pastas de upload (`/wp-content/uploads/`) e configurações (`.htaccess`)**.

---

## 🛡️ Segurança e Auditoria

Para auditar e garantir que não existam vulnerabilidades no projeto:
```bash
# Auditoria de dependências Node.js
npm audit

# Auditoria de dependências PHP/Composer
composer audit
```

---

## 📄 Licença e Autor

- **Autor:** Thiago Peixoto
- **Repositório:** [github.com/tfpeixoto/vina](https://github.com/tfpeixoto/vina)