FROM jonatasra/lumen

WORKDIR /app

COPY . .

RUN composer install

ADD startup.sh / 
CMD chmod +x /startup.sh && /startup.sh

EXPOSE 7777

