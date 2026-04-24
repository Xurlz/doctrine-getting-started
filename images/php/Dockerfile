FROM php:8.2-cli

ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

COPY --link \
    --from=ghcr.io/symfony-cli/symfony-cli:latest \
    /usr/local/bin/symfony /usr/local/bin/symfony

RUN install-php-extensions @composer

COPY . /usr/src/app/

WORKDIR /usr/src/app/

CMD ["tail", "-f", "/dev/null"]

