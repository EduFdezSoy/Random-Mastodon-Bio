# Random Mastodon Bio [![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/EduFdezSoy)
Change the Mastodon description/biography programatically

## How to?
Just drop it in somewhere and run `composer install` to add the dependencies.  

Open the `change_bio.php` and edit those const and vars with your api keys and tokens:
```php
// mastodon auth things
const INSTANCE = 'mastodon.social';
const ACCESS_TOKEN = 'your_access_token';
```

Then just run `php change_bio.php` and it will change your header.

It will explode since there is nothing to put atm, lets see how to add some sentences:

## Adding biographies
If you read the code, it says:

```php
// where are the sentences?
$biosFile = 'bios';
```

so we need to add in the file `bios` as many lines as bios we want. One line, one bio, no exception.  

Take in mind the current limit is at 500 characters.

## Something more
Um, oh, do whatever you like with this, I really don't care. *MIT License*.  

If you need some **help** or want to verbally abuse me just drop me a toot [@EduFdezSoy@mastodon.social](https://mastodon.social/@EduFdezSoy).  

If you really liked it and feel like I deserve some money, I don't know whats happening to you, but buy me a [coffee](https://ko-fi.com/EduFdezSoy) and I'll continue transforming caffeine into code.
