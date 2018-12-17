# Makefile

clear-cache:
	rm -rf var/cache/*

db-init:
	php bin/console doctrine:database:drop --force
	php bin/console doctrine:database:create
	rm -rf var/cache/*

db-update:
    php bin/console doctrine:schema:update --force
