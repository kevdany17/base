## Scripts ##
husky-init:
	npx husky install

husky-chmod:
	chmod +x .husky/pre-commit

## PHP ARTISAN ##
db-reset:
	php artisan migrate:refresh --seed

basic-seeder:
	php artisan iseed data_types,data_rows,permissions,permission_role,menu_items --force

## PHP DOCKER CONFIG ##
get-memory:
	php -r 'echo ini_get("memory_limit")."\n";'

verify-env:
	php -i | grep -E "memory_limit|max_execution_time|post_max_size|upload_max_filesize|max_input_vars|max_input_time"

## DOCKER ##
docker-image:
	docker build -t laravel-sigi_base .

docker-up:
# 	this command exec require: sudo chmod +x ./vendor
# 	this command exec require: sudo chmod +x ./storage
#   this command exec require: sudo chown -R $USER:$USER proyect_name
#	this require .htaccess files
# 	example run: make docker-up network=network_name --> docker network ls || docker network inspect container_id
	docker run -d -p 8000:80 --name laravel-sigi_base_app \
		--network $(network) \
		-v $(shell pwd):/var/www/html \
		-v $(shell pwd)/vendor:/var/www/html/vendor \
  		-v $(shell pwd)/storage:/var/www/html/storage \
		laravel-sigi_base

# run on host with up container
docker-permissions:
	docker exec -it laravel-sigi_base_app chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
	docker exec -it laravel-sigi_base_app chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

#run on container
container-permissions:
	chown -R www-data:www-data storage
	chown -R www-data:www-data bootstrap/cache
