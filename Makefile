build:
	docker-compose build

up:
	docker-compose up -d

ssh:
	docker exec -u www-data -it kvak_app /bin/bash

ssh-root:
	docker exec -it kvak_app /bin/bash