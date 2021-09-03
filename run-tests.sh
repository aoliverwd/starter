#!/usr/bin/env bash
./vendor/bin/php-cs-fixer fix ./src
./vendor/bin/php-cs-fixer fix ./tests
./vendor/bin/phpstan analyse -c phpstan.neon
./vendor/bin/phpunit ./tests -c ./tests/phpunit.xml