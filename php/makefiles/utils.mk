start:
	docker compose up -d

stop:
	docker compose down

sh:
	docker exec -it kataclisma-tennis-php sh

test:
	docker exec -it kataclisma-tennis-php ./vendor/bin/phpunit