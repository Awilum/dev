# Release build script for Site Plugin
# Copyright (c) Sergey Romanenko
# usage: bash release.sh [version] 

version="$1";
curl "https://github.com/flextype-plugins/site/archive/refs/tags/v$version.zip" -L -O;
unzip "v$version.zip";
rm "v$version.zip";
cd "site-$version";
composer install --no-dev;
rm -rf __MACOSX;
find . -name '.DS_Store' -type f -delete;
zip -r "site-$version.zip" . ;
cd ../;
mv "site-$version/site-$version.zip" .;
rm -r "site-$version/";