# laravel-realtime
[![Gitter chat](https://badges.gitter.im/duxet/laravel-realtime.png)](https://gitter.im/duxet/laravel-realtime)
[![Build Status](https://travis-ci.org/duxet/laravel-realtime.svg?branch=master)](https://travis-ci.org/Strimoid/Strimoid)
[![Test Coverage](https://codeclimate.com/github/duxet/laravel-realtime/badges/coverage.svg)](https://codeclimate.com/github/duxet/laravel-realtime)
[![Code Climate](https://codeclimate.com/github/duxet/laravel-realtime/badges/gpa.svg)](https://codeclimate.com/github/duxet/laravel-realtime)
[![Packagist](https://img.shields.io/packagist/dt/duxet/laravel-realtime.svg)](https://packagist.org/packages/duxet/laravel-rethinkdb)

Laravel package for realtime communication using publish/subscribe pattern.

# Installation
Require this package by using following command:

```
composer require duxet/laravel-realtime
```

After updating composer, add the ServiceProvider to the providers array in `config/app.php`

```php
'duxet\Realtime\RealtimeServiceProvider',
```

# License
Package is licensed under MIT License.
