# Quick Setup

### Clone the repository
ssh:
```bash
git clone git@github.com:krshkov/slobo-project.git
cd slobo-project
```

https:
```bash
git clone https://github.com/krshkov/slobo-project.git
cd slobo-project
```

### Install dependencies
```bash
composer install && npm install
```

### Create .env file
```bash
cp .env.example .env
```

### Generate key
```bash
php artisan key:generate
```

### Create database
```bash
php artisan migrate --seed
```

### Run the server
```bash
php artisan serve
```
