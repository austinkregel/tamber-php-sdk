# The [Tamber](https://tamber.com) PHP SDK
This is an UNOFFICIAL SDK.

## Get your api Token by creating an account
The first thing to do is head to the [official Tamber website](https://tamber.com) to register

## Download the project
When this package is finally on packagist, you'll be able to install it using

```
composer require kregel/tamber
```

# Usage of this package

### Event
```php
<?php
require 'vendor/autoload.php';
use Kregel\Tamber\Tamber;
use Kregel\Tamber\Event;

Tamber::setProjectKey('...');
Tamber::setEngineKey('...'); // If you just created your account you won't be able to set or create an engine until you track at least 1 event.

try {
    $response = (new Event)->track([
        /**
         * This will be created if it doesn't exist by default (via Tamber's code not this package)  
         */
        'user' => 'your user id using whatever format you want',
        
        /**
         * This can be anything from likes, dislikes, purchases, clicks, reads, ect.
         * This will be created if it doesn't exist by default (via Tamber's code not this package) 
         */
        'behavior' => 'like', 
        
        /**
         * If I were using Laravel I might do something like `App\User:1` or `App\Models\Transaction:810`. Something to signify the thing performing
         * that's performing said beahvior and the identifier to track that thing's previous behaviors.
         */
        'item' => 'spotify:track:1JIgaRnqtzS7DuGM3hVZU9',
        
        /**
         * The Tamber docs mention the context could be related to A/B testing for interface changes.
         * but it could also be used to track the user's current url, previous things the user clicked on or other actions that the user preformed
         * like whether or not they played the song or read the book.
         */
        'context' => [
            'home-page',
        ],
        /**
         * This is just to indicate whether or not this specific behavior was related to a recommened/suggested action.
         * i.e. Did they play the song because it was in your recommended list? 
         */
        'hit' => false,
    ]);
    print_r($response->getContents());
} catch (\Kregel\Tamber\Exceptions\TamberException $e) {
    echo $e->getMessage() . "\n";
    print_r($e->getContext());
}
```

### Behaviors
```php
<?php

use Kregel\Tamber\Tamber;
use Kregel\Tamber\Behavior;

Tamber::setProjectKey($projectToken);

try {
    $behavior = (new Behavior)->create([
        'name' => 'purchase',
        'desirability' => 0.6
    ]);
} catch (\Kregel\Tamber\Exceptions\TamberException $e) {
    echo $e->getMessage() . "\n";
    print_r($e->getContext());
}

```

### Items
Creating
```php
<?php

use Kregel\Tamber\Tamber;
use Kregel\Tamber\Item;

Tamber::setProjectKey($projectToken);

try {
    $item = (new Item)->create([
        'id' => 'App\Song:1', // This just needs to be some kind of unique identifier.
        'properties' => [
            'artist' => 'Logic',
            'title' => 'Under Pressure',
            'length' => '9:20',
            'explicit' => true
        ],
        'tags' => [
            'rap', 'hip-hop'
        ],
        'created' => App\Song::find(1)->created_at // This is just to represent when the song was created in your system.
    ]);
} catch (\Kregel\Tamber\Exceptions\TamberException $e) {
    echo $e->getMessage() . "\n";
    print_r($e->getContext());
}
```

Getting an item
```php
<?php
use Kregel\Tamber\Tamber;
use Kregel\Tamber\Item;

Tamber::setProjectKey($projectToken);

$item = (new Item)->retrieve([
    'id' => 'spotify:track:5LME7YULt0enp6UAB8VoDn'
]);

```

### Side notes
It should be noted that each item in the Tamber API uses the `TransformRequest` trait. That means we hijack the 
calls to the SDK and transform them into something a bit more usable.

Using the behavior creation example above. You can access any of the response data by simply trying to access it from the behavior variable.

```php
$behavior->result->name // purchase
$behavior->status // 200
$behavior->success // true
// ect...
```
