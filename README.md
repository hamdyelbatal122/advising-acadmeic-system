# Academic Advising System

A **university academic registration and advising system** built with Laravel (PHP). Helps students manage course registration, view academic plans, and interact with advisors.

## ✨ Features

- 🎓 Student course registration and management
- 📋 Academic plan and progress tracking
- 👨‍🏫 Advisor–student interaction workflow
- 🔐 Role-based access (Student / Advisor / Admin)
- 📊 Dashboard with academic status overview
- 💾 MySQL database with Laravel Eloquent ORM
- 🌐 Responsive UI with Blade templating

## 🛠️ Tech Stack

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)

## ⚙️ Requirements

- PHP >= 7.4
- Composer
- MySQL >= 5.7
- Node.js & npm

## 🚀 Getting Started

1. **Clone the repository**
   ```bash
   git clone https://github.com/hamdyelbatal122/advising-acadmeic-system.git
   cd advising-acadmeic-system
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install frontend dependencies**
   ```bash
   npm install && npm run dev
   ```

4. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Update `.env` with your database credentials:
   ```env
   DB_DATABASE=advising_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Run migrations and seeders**
   ```bash
   php artisan migrate --seed
   ```

6. **Start the development server**
   ```bash
   php artisan serve
   ```
   Visit: `http://localhost:8000`

## 📁 Project Structure

```
advising-acadmeic-system/
├── app/            # Models, Controllers, Middleware
├── database/       # Migrations and Seeders
├── resources/      # Blade views and assets
├── routes/         # Web and API routes
├── .env.example    # Environment template
└── README.md
```

## 👤 Default Credentials

| Role    | Email               | Password |
|---------|---------------------|----------|
| Admin   | admin@system.com    | password |
| Student | student@system.com  | password |

> ⚠️ Change default credentials after first login.

## 📄 License

This project is open source and available under the [MIT License](LICENSE).
