#!/bin/sh

#echo "Updating database";
#php bin/console doctrine:schema:update --force
#echo "Database updated";

echo "Dumping assets";
php bin/console assetic:dump --env=prod --no-debug
echo "Assets dumped";
