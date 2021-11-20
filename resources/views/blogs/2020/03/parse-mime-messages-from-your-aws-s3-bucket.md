---
title: Parse MIME Messages from your S3 Bucket
categories: Package, Laravel, Development
summary: Parse incoming mail messages with Laravel and AWS S3.
preview_image:
preview_image_twitter:
hidden: false
published: 3/17/20
---

You can use this to parse incomming messages to a mailbox and then import them into a ticketing system or blog, etc.	

You check out the [Github repository](https://github.com/robbfountain/aws-s3-mime-handler)

## Installation
Require the package with composer.

```bash
composer require onethirtyone/aws-s3-mime-handler
```

You'll also need to make sure your AWS environment variables are set

```dotenv
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=
AWS_BUCKET=
```

## Usage
The `MessageCollector`{.p-1 .bg-gray-200 .rounded-md .text-pink-400} facade will return a collection of `OneThirtyOne\Mime\Message`{.p-1 .bg-gray-200 .rounded-md .text-pink-400} instances.  Each of these instances is a fully parsed MIME message from your bucket. You can access the properties:

```php
MessageCollector::fromBucket()->each(function ($message) {
    $message->id;    // The message file name
    $message->to;    // Message recipient
    $message->from; // Message Sender
    $message->subject;  // Message Subject
    $message->body;  // The body of the message (plain text)
});
```

You can delete a message by calling the `delete()`{.p-1 .bg-gray-200 .rounded-md .text-pink-400} method on a message object

```php
$message = MessageCollector::fromBucket()->first();

$message->delete();
```

## Contributing
Pull requests are welcome.  For major changes, please open an issue first to discuss what you would like to change

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
