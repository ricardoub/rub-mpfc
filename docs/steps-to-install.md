# MPFC - MY PERSONAL FINANCE CONTROL by rub

## LARAVEL

```bash
composer create-project laravel/laravel mpfc
npm install
npm run dev
```

## GIT

```bash
git init
git add .
git commit -m "FIRST COMMIT: laravel install"
git branch -M main
git remote add origin https://github.com/ricardoub/rub-mpfc.git
git push -u origin main
```

## Dependencias

```bash
composer require laravel/jetstream
php artisan jetstream:install livewire
php artisan migrate
composer require livewire/livewire
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
```

### editar o arquivo tailwind.config.js e acrescentar  './resources/views/**/*.js' a chave content

```js
export default {
    content: [
        './resources/views/**/*.js',
    ],
```

```bash
npm run build
npm install alpinejs
```

### editar o arquivo bootstrap.js e acrescentar as linhas abaixo ao final do arquivo

```javascript
import Alpine from 'alpinejs'
Alpine.start()
window.Alpine = Alpine
```

```bash
npm run build
```

## ROLES

```bash
composer require santigarcor/laratrust
php artisan vendor:publish --tag="laratrust"
php artisan laratrust:setup
```

### editar o model Userconforme abaixo

```php
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements LaratrustUser
{
    use HasRolesAndPermissions;

    // ...
}
```

```bash
composer dump-autoload
php artisan migrate
```
