### Install Packages
`composer install` <p>
`npm install` <p>
*development mode* `npm run dev` <p>
*for production* `npm run build`

### Create Migration
`php artisan migrate`

### Necessory Stuffs
*create user roles:* `php artisan create:role` <p>
custom roles can be created by optional parameters <p>
`php artisan create:role optionalrolename` <p>

*create permission:* `php artisan create:permission` <p>
custom permission can also be created same as role <p>

*create super-admin:* `php artisan create:admin`

### Start Dev Server
`php artisan serve`

### Globally Host Project Files
`ngrok --scheme http http 8000`