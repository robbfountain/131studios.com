<?php
echo "Hello \n\n";

echo $info->name . " just submitted the long contact form on your website.\n\n";

echo "View Contact Form: " . url('/admin/contact/') .  "\n\n";

echo 'Regards,', "\n";
echo config('app.name'), "\n";
