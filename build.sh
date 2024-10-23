#!/bin/bash

set -xeu

rm -rf build
mkdir build

export LINK_EXT=html
php index.php > build/index.html

languages=("en" "es" "fr" "de" "ru")

files=("public-formulas" "privacy-policy" "faq" "quick-start")

for file in "${files[@]}"; do
  for lang in "${languages[@]}"; do
    php "$file.$lang.php" > "build/$file.$lang.html"
  done
done

cp favicon.ico build/favicon.ico
cp -r images build/images
cp -r favicon build/favicon
cp -r includes build/includes
