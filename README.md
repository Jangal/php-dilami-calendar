# PHP Dilami Calendar

Dilami calendar for PHP


## Install

```
composer require jangal/dilami-calendar
```


## Usage

```
use Jangal\DilamiCalendar;

echo implode('/', DilamiCalendar::dilamiToJalali(1592, 12, 15));
// output: '1398/5/1'

echo implode('/', DilamiCalendar::jalaliToDilami(1398, 5, 1));
// output: '1592/12/15'
```


## Development

on Ubuntu 20.04:

```
sudo apt install php7.4-xml php7.4-mbstring
git clone git@github.com:jangal/php-dilami-calendar.git
cd php-dilami-calendar
composer install
./vendor/bin/phpunit tests
```

## Some Famous Websites That Use This Library
[تقویم دیلمی](http://giltime.ir)
<br/>
[گيلکي ديکشنري](http://gdic.ir)

## Maybe You Like
[Python Dilami Calendar](https://github.com/Jangal/python-dilami-calendar)
<br/>
[C++ Dilami Calendar](https://github.com/LordArma/Dilami-Calendar-C-)
<br/>
[Arduino Dilami Calendar](https://github.com/LordArma/Dilami-Calendar-Arduino)
<br/>
[.Net Dilami Calendar](https://github.com/Jangal/Dilami-Calendar-.Net)
