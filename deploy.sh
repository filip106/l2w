#!/usr/bin/env bash

php bin/console cache:clear --no-warmup --env=dev
#php bin/console cache:clear --no-warmup --env=prod

php bin/console assetic:dump --env=dev --no-debug
#php bin/console assetic:dump --env=prod --no-debug