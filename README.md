# PHP Project with Docker & Tailwind CSS

This is a PHP application running on Apache, containerized using Docker, with Tailwind CSS integrated for modern styling.

---

## 🚀 Features

- PHP 8.2 with Apache
- Tailwind CSS 3.4.17 (compiled using Tailwind PostCSS)
- Docker-based development environment
- Clean folder structure (`app/`, `public/`, etc.)

---

## 📁 Project Structure

```
project_name/
├── app/
│   ├── assets/css/style.css               # Tailwind input CSS
│   ├── controllers/HomeController.php     # Controller
│   ├── models/Home.php                    # Model
│   └── views/layouts/main.php             # Main layout
├── public/
│   └── assets/css/styles.css              # Compiled Tailwind output
├── database/
│   └── migrate.php                        # It will run your migration file
│   └── seed.php                           # It will run your seed file
├── docker/
│   └── vhost.conf                         # Apache virtual host config
├── php/
│   └── Dockerfile                         # PHP + Apache image
├── docker-compose.yml                     # Docker services
├── package.json                           # Tailwind build scripts
├── tailwind.config.js                     # Tailwind config
```

---

## 🐳 How to Run the Project

### 1. Clone the repository

```bash
  git clone https://github.com/your-username/your-project.git
  cd your-project
```

### 2. Build & start the containers

```bash
  docker-compose up --build
```

- PHP + Apache will be served at: http://localhost:8080
- Tailwind will be compiled from app/assets/css/style.css to public/assets/css/styles.css

### 3. Tailwind Development (Optional)
- Run this command to compile and live rebuilding your CSS (Run this once, and it will automatically compile your css everytime you save your CSS)

```bash
  npm run build-css
```

## ✅ Requirements
- Docker

## 📝 Notes
- The `public/` folder is the web root.
- `tailwindcss` compiles styles from `app/assets/css/style.css` to `public/assets/css/styles.css`.
- PHP views live inside `app/views/`.