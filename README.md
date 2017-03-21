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

### Creating a behavior
```php
use Kregel\Tamber\Tamber;
use Kregel\Tamber\Behavior;
Tamber::setApiToken($apiToken);
$behavior = (new Behavior)->create([
    'name' => 'purchase',
    'desirability' => 0.6
]);
```
### Creating an event
```php
use Kregel\Tamber\Tamber;
use Kregel\Tamber\Event;
Tamber::setApiToken($apiToken);
(new Event)->create([
    'name' => 'purchase'
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
