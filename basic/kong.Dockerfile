FROM kong:latest

RUN mkdir /usr/local/kong/declarative
COPY ./kong/kong.yml /usr/local/kong/declarative