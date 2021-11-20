---
title: Laravel Migrate Assets to S3 Package
categories: Package, Laravel, Development
summary: Migrate your assets from local storage to Amazon S3 to reduce bandwidth and storage costs.
preview_image:
preview_image_twitter:
hidden: false
published: 7/16/20
---

Today we released the [Laravel S3 Migrate](https://github.com/robbfountain/laravel-s3-migrate) Package.  This package will migrate anything on your local Laravel project storage to Amazon S3. 

Check out the package on [Github](https://github.com/robbfountain/laravel-s3-migrate)

## Installation
Install with composer
```bash
composer require onethirtyone/laravel-s3-migrate
```

Publish the config
```bash
php artisan vendor:publish --tag=s3migrate-config
```

## Usage
in `config/s3migrate.php` set your S3 bucket name and local disks for migrating

Run the artisan command
```bash
php artisan onethirtyone:s3-migrate
```
This will migrate all files in your selected local disks to S3.  

When the migration is complete a `OneThirtyOne\S3Migration\Events\S3MigrationCompleted` event will be fired. The event will receive a collection of `Illuminate\Support\File` files. These are the files that have been migrated.

You should listen for this event to perform actions locally such as updating a database table with the new S3 image path or delete the local storage files.
