# Install script for Awilum Dev
# Copyright (c) Sergey Romanenko
# usage: bash install.sh

echo "Install script for Awilum Dev in progress...";

echo "Install main vendors";
composer install;

echo "Install docs-crawler vendors";
cd project/plugins/docs-crawler;
composer install;

echo "Install feed vendors";
cd ../;
cd feed;
composer install;

echo "Install icon vendors";
cd ../;
cd icon;
npm install;
npm gulp;

echo "Install site vendors";
cd ../;
cd site;
composer install;

echo "Install sitemap vendors";
cd ../;
cd sitemap;
composer install;

echo "Install twig vendors";
cd ../;
cd twig;
composer install;

echo "Rebuild styles";
cd ../../;
npm install;
npx tailwindcss -i ./assets/src/css/styles.css -o ./assets/dist/css/styles.css --minify