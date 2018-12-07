FROM jonatasra/lumen

WORKDIR /app

COPY . .

RUN [ "composer", "install" ]
CMD [ "php", "-S", "0.0.0.0:7777", "-t", "public" ]

EXPOSE 7777