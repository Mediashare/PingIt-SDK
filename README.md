# PingIt
**[DEPRECATED] Go to [Gitlab Project](https://gitlab.marquand.pro/MarquandT/ping-it-sdk)**

Interact with PingIt API with PHP Library.
# Installation
```bash
composer require mediashare/pingit
```
# Usage
```php
$pingIt = new PingIt("<ApiKey>");
$pingIt->send($title = 'Hello', $message = 'Welcome to PingIt', $icon = 'fa fa-home', $color = 'success');
```
