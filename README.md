# ticket_reservation
## Packages
- [Admin LTE 3 Template](https://github.com/ColorlibHQ/AdminLTE)
- Laravel UI (Bootstrap)
- Laravel Auth
- [Google recaptcha](https://laravel-recaptcha-docs.biscolab.com/docs/intro)
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)
- [Spatie](https://spatie.be/docs/laravel-permission/v5/introduction)
- [Sweet Alert](https://github.com/realrashid/sweet-alert)
- [File Manager](https://github.com/alexusmai/laravel-file-manager)
- [Laravel Module](https://nwidart.com/laravel-modules/v6/introduction)
- [Laravel Module Generator](https://github.com/dcblogdev/laravel-module-generator)

## Requirements
- php 8
- mysql
- composer

## How To Install
### Clone repository
``` bash
git clone https://https://github.com/Sutrasugi24/ticket_reservation
```
### Change directory to directory project
``` bash
cd .\ticket_reservation\
```
### Intsall packages
``` bash
composer install
```
### Copy environment example file
``` bash
cp .env.example .env
```
### Create database 'admin_lte3'
### Change some configuration in .env file from root project
``` bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=admin_lte3
DB_USERNAME=root
DB_PASSWORD=
```
### Generate laravel key
```bash
php artisan key:generate
```
### Create storage link
``` bash
php artisan storage:link
```
### Database migration and seed data
``` bash
php artisan migrate:fresh --seed
```
### Run in development server
``` bash
php artisan serve
```
### Login with
``` bash
email : superadmin@superadmin.com
password : superadmin
```


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
