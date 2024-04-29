serve:
	php artisan serve

npm-start:
	npm run dev

tinker:
	php artisan tinker

fresh:
	php artisan migrate:fresh

migrate:
	php artisan migrate:fresh

run-docker-mailhog:
	docker run -p 8025:8025 -p 1025:1025 mailhog/mailhog
