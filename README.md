# TEDxBern Website

## Develop Locally

On OSX - Install the Local Environment first: http://lagoon.readthedocs.io/en/latest/using_lagoon/local_development_environments/

> composer install
> docker-compose build
> docker-compose up -d

visit http://wordpress-nginx.docker.amazee.io

## Installing plugins/themes
All plugins and themes come from https://wpackagist.org/

> composer require wpackagist-theme/twentyseveneen

## Connect to the envs
Make sure your ssh key is loaded `ssh-add -L` should show it

> ssh tedxbern-com-develop@api-lagoon-master.lagoon.ch.amazee.io -p 31472 -o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no

## Deployed Branches

- Master - Production Site
- Develop - Development Site
