#!/bin/bash

set -xeu

rm -rf build
mkdir build
mkdir build/formulas

export LINK_EXT=html
php index.php > build/index.html

languages=("en" "es" "fr" "de" "ru")

files=("public-formulas" "privacy-policy" "faq" "quick-start" "formulas/formula1", "tos")


for lang in "${languages[@]}"; do
  for file in "${files[@]}"; do
    php "$file.$lang.php" > "build/$file.$lang.html"
    mkdir "build/$file.$lang"
    cp "build/$file.$lang.html" "build/$file.$lang/index.html"
  done
done

cp favicon.ico build/favicon.ico
cp -r images build/images
cp -r favicon build/favicon
cp -r includes build/includes
