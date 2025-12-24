# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is an international conference management application built with Laravel 12 and Tailwind CSS 4. The project uses Pest for testing and Vite for frontend asset compilation.

## Development Environment Setup

### Initial Setup
```bash
composer setup
```
This script will:
- Install Composer dependencies
- Copy `.env.example` to `.env` if it doesn't exist
- Generate application key
- Run database migrations
- Install NPM dependencies
- Build frontend assets

### Development Server
```bash
composer dev
```
This starts multiple services concurrently:
- PHP development server (`php artisan serve`)
- Queue worker (`php artisan queue:listen`)
- Laravel Pail for log streaming
- Vite dev server for hot module replacement

Alternatively, run services individually:
```bash
php artisan serve           # Start development server
npm run dev                 # Start Vite dev server
php artisan queue:listen    # Start queue worker
```

## Common Commands

### Testing
```bash
composer test              # Run all tests
php artisan test           # Run all tests (alternative)
php artisan test --filter=TestName  # Run specific test
```

The project uses **Pest** testing framework with two test suites:
- `tests/Unit/` - Unit tests
- `tests/Feature/` - Feature/integration tests

Test environment uses in-memory SQLite database.

### Code Quality
```bash
./vendor/bin/pint          # Format code using Laravel Pint
./vendor/bin/pint --test   # Check code style without fixing
```

### Database
```bash
php artisan migrate                    # Run migrations
php artisan migrate:fresh              # Drop all tables and re-run migrations
php artisan migrate:fresh --seed       # Migrations + seed database
php artisan db:seed                    # Run database seeders
php artisan make:migration create_table_name  # Create new migration
```

### Frontend Assets
```bash
npm run dev                # Start Vite dev server with HMR
npm run build              # Build production assets
```

### Artisan Console
```bash
php artisan tinker         # REPL for Laravel
php artisan route:list     # List all registered routes
php artisan make:model ModelName -mfc  # Create model with migration, factory, controller
php artisan make:controller ControllerName  # Create controller
php artisan cache:clear    # Clear application cache
php artisan config:clear   # Clear config cache
```

## Architecture

### Standard Laravel Structure
- **app/Http/Controllers/** - HTTP request handlers
- **app/Models/** - Eloquent ORM models
- **app/Providers/** - Service providers
- **routes/web.php** - Web routes
- **routes/console.php** - Console commands
- **database/migrations/** - Database migrations
- **database/factories/** - Model factories for testing
- **database/seeders/** - Database seeders

### Frontend Architecture
- **resources/js/** - JavaScript entry points
  - `app.js` - Main application entry
  - `bootstrap.js` - Bootstrap configuration
- **resources/css/** - CSS entry points
  - `app.css` - Tailwind CSS imports and custom styles
- **resources/views/** - Blade templates
- **public/** - Public assets and entry point

### Vite Configuration
- Entry points: `resources/css/app.css`, `resources/js/app.js`
- Hot module replacement enabled with auto-refresh
- Ignores `storage/framework/views/` to prevent watch loops
- Integrated with Tailwind CSS 4 via `@tailwindcss/vite`

## Technology Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Frontend**: Vite 7 + Tailwind CSS 4
- **Testing**: Pest 4 with Laravel plugin
- **Code Style**: Laravel Pint
- **Database**: Configured per environment (SQLite in-memory for tests)
- **Queue**: Configured per environment

## Development Notes

### Composer Scripts
The project includes several convenient Composer scripts (see `composer.json`):
- `composer setup` - Full project setup
- `composer dev` - Start all development services with concurrently
- `composer test` - Clear config cache and run tests

### Laravel Pail
Laravel Pail is included for real-time log streaming during development. It starts automatically with `composer dev`.

### Queue Processing
Queue worker starts with `composer dev` and retries failed jobs once (`--tries=1`).
