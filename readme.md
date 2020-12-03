# Laravel GHL Wrapper

[![Latest Version on Packagist](https://img.shields.io/packagist/v/RankFoundry/Laravel-GHL-Wrapper.svg?style=flat-square)](https://packagist.org/packages/RankFoundry/Laravel-GHL-Wrapper)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/RankFoundry/Laravel-GHL-Wrapper/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/RankFoundry/Laravel-GHL-Wrapper/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/RankFoundry/Laravel-GHL-Wrapper/badges/build.png?b=master)](https://scrutinizer-ci.com/g/RankFoundry/Laravel-GHL-Wrapper/build-status/master)
[![Total Downloads](https://img.shields.io/packagist/dt/RankFoundry/Laravel-GHL-Wrapper.svg?style=flat-square)](https://packagist.org/packages/RankFoundry/Laravel-GHL-Wrapper)


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

