# php-dilami-calendar

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
compose install
./vendor/bin/phpunit tests
```
