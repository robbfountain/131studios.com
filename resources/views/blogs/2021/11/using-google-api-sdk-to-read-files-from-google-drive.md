---
title: using google API SDK to read files from google drive
categories: Development, Laravel
summary: In this blog we detail the process of using the Google API SDK to get files from a Google Drive shared folder.
preview_image:
preview_image_twitter:
hidden: false
author: Robb Fountain
published: 11/18/21
---

### Introduction

Recently, we were performing some work for a client.  The client wanted us to showcase picures of recent projects their company had completed.  We use Google Workspace for our organizeation which means we use Google Drive for most of our storage.  mWe wanted to give the client the ability to upload photos to a folder in our Google Drive and then have those images displayed on their website.  We use AWS exclusively for hosting our client's websites and we also make use of Amazon S3 for storing all of our client's assets.  So if the client uploads their pictures to Google Drive, and we use S3 to host our client asset files, we needed a way for the files to get from Google Drive to AWS.

We developed 2 ways of handling this task.

1. Using a Laravel scheduled task to read files from Google Drive and write to S3
2. Using a Lambda function that will read from Google Drive and write to S3 on a cron schedule

This blog will be focusing on #1 above, using a Laravel Scheduled Task.

### Configuring Google Drive API
We will be using the Google Drive v3 API to access our drive content.  The first thing we need to do is grant programmatic access to our Google Drive account.

Head over to your Google Cloud Console and create a service account for your Google Drive access in your current project

![Create Service Account](131Studios/create_service_account.png){.shadow-md .rounded-md}

Once the service account is created, generate a private key in `json` and download the private key locally. We'll need this later.

Then enable access to the Google Drive API

![Enable Google Drive](131Studios/enable_google_drive_api.png){.shadow-md .rounded-md}

At this point we have a service account and have given the account access to the Google Drive API but we still haven't given the account access to OUR Google Drive.  In our case I created a Google Drive folder for the client and shared it to them.  I also need to give the service account access to that same folder.

![Share With People](131Studios/share_with_people.png){.shadow-md .rounded-md}

Now we're ready to head over to our Laravel project. We will be using the Google API SDK so install that via composer

``` bash
composer require google/apiclient 
```

### Making the API Calls
Next, we need to place our `credentials.json`{.inline-code} file into our `storage/app` directory. This will allow the API to authenticate as our service account.

Let's create a controller for our test called `GoogleDriveController.php` in our `app\Http\Controllers` directory.  Let's create an `show` function where we can test this out.  First we'll make a connection to the Google Drive Client.

```php

    public function show()
    {
        if (!file_exists(config('services.google_drive.credentials_file'))) {
            throw new \Exception('Cannot find credentials file');
        }
	  
	  	$scopes = [];

        $client = new \Google_Client();
        $client->setScopes($scopes);
        $client->setAuthConfig(config('services.google_drive.credentials_file'));
        $client->setAccessType('offline');
        $client->setRedirectUri(Request::url());

    }

```

The Google Drive Client API needs to know how to autenticae us and also what scopes we are requesting access to.  You can find more about Google Drive scopes [here](https://developers.google.com/identity/protocols/oauth2/scopes#drive).

Now that we have our client established, let's make some calls to the Google Drive API.  We'll add to the ```show``` method above

```php
	// Access the Google Drive Service
    $service = new \Google_Service_Drive($client);
	
	// List of options for retreiving files
	$optParams = [
        'pageSize' => 100,
        'fields' => 'nextPageToken, files(id, name)',
    ];
	
 	$files = [];
    $pageToken = null;

	do {
	  try {
		if ($pageToken !== null) {
		  $optParams['pageToken'] = $pageToken;
		}

		$response = $service->files->listFiles($optParams);

		$files = array_merge($files, $response->files);
		
		$pageToken = $response->getNextPageToken();
	  } catch (Exception $exception) {
		$pageToken = null;
	  }
	} while ($pageToken !== null);
```

Here's what we just did.  First we set up our Google Drive Service by instantiating it and passing our auth client.  Once we have that established we use the `listFiles` method and give it the parameters we want to retrieve.  we are wrapping this in a `do while` loop so we are sure to get all files in case there are multiple pages. Each iteration of the loop passes the `nextPageToken` keeping track of where we are.  When the files are returned we merge it with the existing `$files` variable.  After it's done retrieving the files we will have an array containing all the file ids and name.

Let's say we wanted to get an individual file and it's contents.  We can do that by calling the `get()` method on the Google Drive service

```php
$fileId = 'Xw4r04304s2324234l'; // File ID
$content = '';

$file = $service->files->get($fileId, ['alt' => 'media']);

while (!$file->getBody()->eof()) {
  $content .= $file->getBody()->read(1024);
}

```

The `get()` will return the file metadata but if you want to download the file, supply the `['alt' => 'media']` option when calling the method to get the actual contents.


### Pulling it all together
In this blog you learned how to create a Google Drive service account and link it to a shared folder in your Google Drive.  You were then able to use the Google API SDK in your project to list the contents of your Google Drive and downlaod files from it.  You can further expand on this by adding your own methods to add or delete files and folders.




