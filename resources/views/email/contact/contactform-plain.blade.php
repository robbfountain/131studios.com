<?php
echo "Hello " . env('APP_NAME') .  "\n\n";

echo $info->name . " just submitted the contact form on your website.\n\n";

echo "View Contact Form: " . url('/admin/contact/') .  "\n\n";

echo "The subject of the message was: \n";
echo $info->subject . "\n\n";

echo "The message that was sent was : \n";
echo $info->message . "\n\n";

echo 'Regards,', "\n";
echo config('app.name'), "\n";
