FROM php:7-buster

RUN mkdir -p /usr/calculadoraApacheThrift

COPY . /usr/calculadoraApacheThrift

WORKDIR /usr/calculadoraApacheThrift

EXPOSE 50000

CMD ["php", "index.php"]