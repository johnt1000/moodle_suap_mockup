FROM jonatasra/lumen

WORKDIR /app

COPY . .

RUN composer install

# ADD startup.sh /app 
# RUN chmod +x /app/startup.sh && /app/startup.sh

# RUN rm -r database/database.sqlite
# RUN touch database/database.sqlite
# RUN php artisan migrate
# RUN php artisan db:seed

CMD php -S 0.0.0.0:7777 -t public

EXPOSE 7777

