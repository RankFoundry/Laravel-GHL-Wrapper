# Laravel GHL Wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rankfoundry/laravel-ghl-wrapper.svg?style=flat-square)](https://packagist.org/packages/rankfoundry/laravel-ghl-wrapper)
[![Total Downloads](https://img.shields.io/packagist/dt/rankfoundry/laravel-ghl-wrapper.svg?style=flat-square)](https://packagist.org/packages/rankfoundry/laravel-ghl-wrapper)


**A Laravel wrapper for High Level (GHL).**

## Install

Via Composer

``` bash
$ composer require rankfoundry/laravel-ghl-wrapper
```

## Usage
See documention for params and others at [GHL Api docs](https://developers.gohighlevel.com/)

List of methods: 

### Location

``` php
use GhlLocation;

$locations     = GhlLocation::locations($apikey);       // list of all agency locations
$location      = GhlLocation::single($id,$apikey);     // single location
```

