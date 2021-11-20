---
title: Upgrade PHP on Laravel Valet
categories: Development, Laravel
summary: Upgrade PHP on your Laravel Valet development environment
preview_image:
preview_image_twitter:
hidden: false
published: 2/28/20
---

The first step in the upgrade process is to upgrade your homebrew php instance

First update homebrew

```
brew update
```

Next upgrade your version of php

```
brew upgrade php
```

Next update your global composer instance

```
composer global update
```

Install Valet

```
valet install
```

Finally tell Valet to use your new version of php. At the time of writing this, we're using PHP 7.4

```
valet use php@7.4
```

That's it.  Your version of php on Laravel Valet should be updated.  You can check by typing ```php -v```

```
PHP 7.4.4 (cli) (built: Mar 19 2020 20:12:27) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.4, Copyright (c), by Zend Technologies
```

