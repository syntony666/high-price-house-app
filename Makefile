service.up:
	docker-compose up -d
	sleep 5
	docker-compose exec laravel php artisan migrate 

service.down:
	docker-compose down