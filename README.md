# About Project
.....

# Install Project

```
git clone git@github.com:ilolicon-Team/ilolicon-Cloud.git
cp .env.example .env
# Write your database username and password
composer install
php artisan admin:publish
php artisan admin:install
php artisan vendor:publish --provider="Yansongda\LaravelPay\PayServiceProvider" --tag=laravel-pay
```