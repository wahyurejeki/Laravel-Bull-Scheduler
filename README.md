# PHP Bull Scheduler
PHP library to schedule jobs for the NodeJS [Bull Redis queue](https://github.com/OptimalBits/bull).

## Requirements
* Laravel 11
* PHP >= 8.2
* PHP JSON extension
* Redis >= 2.8.18

## Installation
Install via composer:
`composer require wahyurejeki/laravel-bull-scheduler`

## Usage
This library operates under the namspace `WahyuRejeki\BullScheduler` and uses [Predis](https://github.com/nrk/predis) under the hood.
```php
<?php

require_once 'vendor/autoload.php';

use WahyuRejeki\BullScheduler\Queue;

// You can specify any value for Redis that Predis considers valid for the first parameter of Predis\Client
$queue = new Queue('example queue', 'tcp://localhost:6379');
$queue2 = new Queue('another queue', array('redis' => array('host' => 'localhost', 'port' => 6379)));
$queue3 = new Queue('different queue', new Predis\Client());

$job_id = $queue->add(array('data' => 'value'));
```

## Caveats
* This library has been tested with Bull v3.6.0. No other versions have been tested, so use at your own risk with other versions.
* This library only handles scheduling (adding new jobs) and will never handle job processing of any form, including job statuses.

## License
The code for PHP Bull Scheduler is distributed under the terms of the MIT license (see [LICENSE](LICENSE)).
