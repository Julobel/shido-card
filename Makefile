# Makefile
# Utilisation: make + cmd. Ex: make db-init

# MAJ du cache
clear-cache:
	rm -rf var/cache/*

# Réinitialisation de la BDD
db-init:
	php bin/console doctrine:database:drop --force
	php bin/console doctrine:database:create
	rm -rf var/cache/*

# MAJ du schéma
db-update:
    bin/console doctrine:schema:update --force
