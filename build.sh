#!/bin/bash

set -xeu

rm -rf build
mkdir build

export LINK_EXT=html
php index.php > build/index.html

php quick-start.en.php > build/quick-start.en.html
php quick-start.es.php > build/quick-start.es.html
php quick-start.ru.php > build/quick-start.ru.html

php public-formulas.en.php > build/public-formulas.en.html
php public-formulas.es.php > build/public-formulas.es.html
php public-formulas.ru.php > build/public-formulas.ru.html

php privacy-policy.en.php > build/privacy-policy.en.html
php privacy-policy.es.php > build/privacy-policy.es.html
php privacy-policy.ru.php > build/privacy-policy.ru.html

php faq.en.php > build/faq.en.html
php faq.es.php > build/faq.es.html
php faq.ru.php > build/faq.ru.html

cp favicon.ico build/favicon.ico
cp -r images build/images
cp -r favicon build/favicon
cp -r includes build/includes
