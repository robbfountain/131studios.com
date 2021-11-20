---
title: Running Multiple Instances of Laravel Horizon on the Same Server
categories: Laravel, Horizon, Development
summary: Learn how to run multiple instances of Laravel Horizon on the same server.
preview_image:
preview_image_twitter:
hidden: false
published: 09/23/19
---

If you're like me you tend to have a staging and production instance of your code on the same server.  Recently I've been running into an issue where my [Laravel Horizon](https://laravel.com/docs/master/horizon) queues were not processing when I had multiple instances of Horizon on the same server.  Here's how I fixed that issue:

In your ```config/horizon.php``` file you'll need to create a new environment for your staging environment.  There should be one for local and production already but nothing for staging.  Create that

```php
 'staging' => [
  'supervisor-staging' => [
	'connection' => 'redis',
	'queue' => ['queue.staging'],  // Use a unique name for your staging queue
	'balance' => 'simple',
	'processes' => 3,
	'tries' => 3
  ],
```
   
  Once that is done we'll want to use a different Redis database than our production application uses so we don't have any collisions with the queues.  Head over to your ```config/database.php``` file and add some values under the ```redis``` option.  
  
  ```php
'options' => [
  'prefix' => env('REDIS_PREFIX', 'prod:')
],
```

The last step is to edit your ```.env``` file and add some references to your staging queues. You'll need to define a ```REDIS_QUEUE``` key/value pair as well as some other key/value pairs for Redis.

```properties
REDIS_QUEUE=queue.staging

HORIZON_PREFIX="staging:"
REDIS_PREFIX="staging:"
REDIS_DB=2
```

That should be all you need to separate your Laravel Horizon instances on the same server.
