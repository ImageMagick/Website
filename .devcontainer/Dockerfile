FROM mcr.microsoft.com/vscode/devcontainers/php

ARG DISABLE_CACHE=true

RUN sudo set -eux; \
    sed -i 's/8080/7070/' /etc/apache2/ports.conf; \
    sed -i 's/:80/:7070/' /etc/apache2/sites-available/000-default.conf; \
    sed -i 's/\/var\/www\/html/\/workspaces\/Website/' /etc/apache2/sites-available/000-default.conf; \
    sed -i 's/\/var\/www\//\/workspaces\/Website/' /etc/apache2/apache2.conf; \
    echo "SetEnv MAGICK_DEVCONTAINER true" >> /etc/apache2/apache2.conf; \
    echo "SetEnv MAGICK_DISABLE_CACHE ${DISABLE_CACHE}" >> /etc/apache2/apache2.conf