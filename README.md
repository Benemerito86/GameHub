<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# GamerHub - Catálogo de Videojuegos

Proyecto Laravel que muestra un catálogo de videojuegos con datos estáticos. Interfaz creada con Blade y diseño personalizado.

## Requisitos Previos

Antes de empezar, necesitas tener instalado:

- PHP 8.1 o superior
- Composer (gestor de dependencias de PHP)
- Git (para clonar el repositorio)

---

## Instalación desde CERO (Sin nada instalado)

### 1 Instalar PHP

#### En Windows:
1. Descarga XAMPP desde: https://www.apachefriends.org/
2. Instala XAMPP (incluye PHP, Apache y MySQL)
3. Añade PHP al PATH:
   - Busca "Variables de entorno" en Windows
   - Edita la variable Path
   - Añade: C:\xampp\php

#### En Linux (Ubuntu/Debian):
sudo apt update
sudo apt install php php-cli php-mbstring php-xml php-curl unzip

#### En macOS:
brew install php

Verifica la instalación:
php -v

---

### 2 Instalar Composer

#### En Windows:
1. Descarga el instalador desde: https://getcomposer.org/download/
2. Ejecuta Composer-Setup.exe y sigue el asistente

#### En Linux/macOS:
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

Verifica la instalación:
composer -v

---

### 3 Instalar Git

#### En Windows:
Descarga desde: https://git-scm.com/download/win

#### En Linux:
sudo apt install git

#### En macOS:
brew install git

Verifica la instalación:
git --version

---

## Configuración del Proyecto

### 1. Clonar el repositorio
git clone https://github.com/TuUsuario/GamerHub.git
cd GamerHub

### 2. Instalar dependencias de PHP
composer install

Este comando descarga todas las librerías necesarias de Laravel (carpeta vendor/).

---

## Iniciar el Servidor

### Opción 1: Con php artisan serve (Recomendado)

php artisan serve

Verás algo como:
INFO  Server running on [http://127.0.0.1:8000](http://127.0.0.1:8000).

Abre tu navegador en: http://127.0.0.1:8000

### Opción 2: Con puerto personalizado

php artisan serve --port=8080

Accede en: http://127.0.0.1:8080

### Opción 3: Con host personalizado

php artisan serve --host=0.0.0.0 --port=8000

Esto permite acceder desde otros dispositivos en tu red local.

---

## Uso del Proyecto

Una vez iniciado el servidor:

1. Página principal: Lista todos los videojuegos
   - URL: http://127.0.0.1:8000/

2. Detalle de juego: Muestra información completa
   - URL: http://127.0.0.1:8000/game/1
   - Cambia el número (1, 2, 3) para ver diferentes juegos

---

## Estructura del Proyecto
```
GamerHub/
├── app/
│   └── Http/
│       └── Controllers/
│           └── GameController.php    # Controlador con datos estáticos
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php         # Plantilla principal
│       └── games/
│           ├── index.blade.php       # Lista de juegos
│           └── show.blade.php        # Detalle de juego
├── routes/
│   └── web.php                       # Definición de rutas
└── .env                              # Configuración del entorno
```
---

## Detener el Servidor

Para detener php artisan serve:
- Presiona Ctrl + C en la terminal

---

## Solución de Problemas

### Error: "command not found: php"
- PHP no está instalado o no está en el PATH
- Vuelve al paso 1

### Error: "command not found: composer"
- Composer no está instalado
- Vuelve al paso 2

### Error: "No application encryption key has been specified"
php artisan key:generate

### Error: "Database file does not exist"
- Cambia SESSION_DRIVER=database a SESSION_DRIVER=file en .env

### El navegador no carga la página
- Verifica que el servidor esté corriendo: php artisan serve
- Asegúrate de usar la URL correcta: http://127.0.0.1:8000

---

## Colaboradores

- Miguel Benjumea Hidalgo
- Elena Mesa Requena
