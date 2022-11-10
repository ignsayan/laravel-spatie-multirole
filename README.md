### Install Packages
`composer install` <p>
`npm install` <p>
*development mode* `npm run dev` <p>
*for production mode* `npm run build`

### Create Migration
`php artisan migrate`

### Necessory Stuffs
*create user roles:* `php artisan create:role` <br>
custom roles can be created by optional parameters <br>
`php artisan create:role optionalrolename` <p>

*create permission:* `php artisan create:permission` <br>
custom permission can also be created same as role <p>

*create super-admin:* `php artisan create:admin`

### Start Dev Server
`php artisan serve`