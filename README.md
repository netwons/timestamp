# Timestamp
### Packages Home: Masoud/Time
This is my packages test in laravel

Installation:

STEP 1:

```
composer require "netwons/time":"dev-master"
```
STEP 2: Add `provider` and `facade` in config/app.php

```
'providers' =>[
...
\Masoud\Time\TimeServiceProvider::class,
],


'aliases' =>[
...
'MyFacadeTimer'=>\Masoud\Time\Facade\TimerFacade::class,
]
```

STEP 3:
```
php artisan vendor:publish
```

