#!/usr/bin/env bash

echo "deploy started";
php bin/console cache:clear
php bin/console assets:install
php bin/console assetic:dump
echo "deploy finished";
