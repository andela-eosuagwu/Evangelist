
[![Coverage Status](https://coveralls.io/repos/andela-eosuagwu/Evangelist/badge.svg?branch=master&service=github)](https://coveralls.io/github/andela-eosuagwu/Evangelist?branch=master)

# Evangelist
This is a light PHP package that helps you access Github user infomation from Github API.

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
$user = new GetUser('git_user_name');
echo $user->getName();
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
