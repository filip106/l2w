#!/usr/bin/env bash

echo "deploy started";
php bin/console cache:clear --no-warmup
php bin/console cache:warmup
php bin/console assets:install
php bin/console assetic:dump
echo "deploy finished";
