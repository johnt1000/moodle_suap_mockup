# rm -r /app/database/database.sqlite
# touch /app/database/database.sqlite
# cd /app && php artisan migrate
# cd /app && php artisan db:seed
# cd /app && php -S 0.0.0.0:7777 -t public

cd /app && php artisan migrate
cd /app && php artisan db:seed