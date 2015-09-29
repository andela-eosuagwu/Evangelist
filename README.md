
[![Build Status](https://travis-ci.org/andela-eosuagwu/Evangelist.svg?branch=master)](https://travis-ci.org/andela-eosuagwu/Evangelist)
[![Quality Score](https://img.shields.io/scrutinizer/g/andela-eosuagwu/Evangelist.svg?style=flat-square)](https://scrutinizer-ci.com/g/andela-eosuagwu/Evangelist)

# Evangelist
This is a light PHP package that helps you access Github user status and more from Github API.

# Install
Via Composer

To add open-source-evangelist as a dependency, run the following in your project directory.

```php
$ composer install emeka/evangelist
```
Then to install, run

```php
$ composer install 
```

# Usage

```
$user = new GetUserStatus('$git_username');
echo $user->getStatus();
```
# Testing
To test, type the following into the terminal from the project directory

```
$ phpunit
```
or
```
$ composer test
```
# Security
f you discover any security related issues, please email <a href = "emekaosuagwuandela@gmail.com">emekaosuagwuandela@gmail.com</a> instead of using the issue tracker.

# Credit
###Emeka Osuagwu
# License
The MIT License (MIT). Please see <a href = "LICENSE.md">License File</a> for more information.
