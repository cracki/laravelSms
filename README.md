SMS for Laravel 5.1
==========

package for send sms with laravel (published for [Fara Payamak](http://www.farapayamak.ir/) or any reseller)
this package only work for iranian mobile operator

installation
------------
For install this package Edit your project's ```composer.json``` file to require livana/sms

```php
"require": {
    "livana/sms": "dev-master"
},
```
Add repositories to ```composer.json```

```php
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/cracki/laravelSms"
        },
    ],
```

Now, update Composer:
```
composer update
```
Once composer is finished, you need to add the service provider. Open ```app/config/app.php```, and add a new item to the providers array.
```
Livana\Sms\SmsServiceProvider::class,
```
Next, add a Facade for more convenient usage. In ```app/config/app.php``` add the following line to the aliases array:
```
'Sms'       => Livana\Sms\Facades\Sms::class,
```
Publish config files:
```
php artisan vendor:publish --provider="Livana\Sms\SmsServiceProvider"
```
for change username, password and other configuration change ```app/config/sms.php```
or add this code to .env file
```SMS_WEBSERVICE=http://api.payamak-panel.com/post/Send.asmx?wsdl
SMS_USERNAME=9123456789
SMS_PASSWORD=****
SMS_FROM=****
```
in production server you can use ```php artisan config:cache ``` to cache new configs

Usage
-----
for use this package, please register on [Fara Payamak](http://www.farapayamak.ir/) or any reseller

### Send Message
```php
Sms::send('9123456789', 'text message'); // send message for a person

Sms::send(['9123456789', '91234567890'], 'text mesage'); // send message for persons
```
### Get Credit
```php
Sms::getCredit();
```
