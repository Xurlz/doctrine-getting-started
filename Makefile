up:
	docker compose up -d
down:
	docker compose down
build:
	docker compose build
attach:
	docker compose exec app bash
clean:
	docker rmi app
	docker volume rm doctrine-getting-started_db-data

.PHONY: up down build clean
