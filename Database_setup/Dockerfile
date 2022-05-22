FROM mysql:8.0.19

COPY ./database-setup/init.sql /docker-entrypoint-initdb.d/init.sql

RUN ls -l /docker-entrypoint-initdb.d