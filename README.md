# laravel-realtime
[![Gitter chat](https://badges.gitter.im/duxet/laravel-realtime.png)](https://gitter.im/duxet/laravel-realtime)
[![Build Status](https://travis-ci.org/duxet/laravel-realtime.svg?branch=master)](https://travis-ci.org/duxet/laravel-realtime)
[![Test Coverage](https://codeclimate.com/github/duxet/laravel-realtime/badges/coverage.svg)](https://codeclimate.com/github/duxet/laravel-realtime)
[![Code Climate](https://codeclimate.com/github/duxet/laravel-realtime/badges/gpa.svg)](https://codeclimate.com/github/duxet/laravel-realtime)
[![Packagist](https://img.shields.io/packagist/dt/duxet/laravel-realtime.svg)](https://packagist.org/packages/duxet/laravel-realtime)

Laravel package for realtime communication using publish/subscribe pattern.

# What is that?
Ajax is not cool anymore. Now we have websockets, which gives us realtime communication with minimal delay. But how to use it with Laravel? This package gives answer to this question!

# Supported services
* PubNub
* Pusher (only publish method)

# How to use it?
```php
Realtime::publish('my_channel', 'Hello world!');
```

```php
Realtime::subscribe('my_channel', function($message) {
  ...
);
```

# Installation
Require this package by using following command:

```
composer require duxet/laravel-realtime
```

After updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
'duxet\Realtime\RealtimeServiceProvider',
```

And if you want, you can add alias to Facade in your 'config/app.php'
```php
'Realtime' => 'duxet\Realtime\Facades\Realtime',
```

# License
Package is licensed under MIT License.
