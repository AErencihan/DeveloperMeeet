
php artisan make:migration 2014_10_12_000000_create_users_table.php
php artisan make:migration 2014_10_12_100000_create_activity_registrations_table.php
php artisan make:migration 2019_08_19_000000_create_activity_table.php
php artisan make:migration 2019_12_14_000001_create_comments_table.php
php artisan make:migration 2019_12_14_000001_create_form_component_table.php

composer dump-autoload
composer require aws/aws-sdk-php
composer require league/flysystem-aws-s3-v3
