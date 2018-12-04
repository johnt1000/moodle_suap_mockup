FROM jonatasra/lumen

WORKDIR /app

COPY . .

RUN [ "chmod", "+x", "startup.sh" ]
RUN [ "sh", "startup.sh" ]

EXPOSE 7777