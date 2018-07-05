# BileMo-API

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/a39a9bb5b89649259177d2827788c3b6)](https://www.codacy.com/app/nverjus/BileMo-API?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=nverjus/BileMo-API&amp;utm_campaign=Badge_Grade)

Tests accounts :

<ul>
  <li>Role Admin
    <ul>
      <li>username : admin</li>
      <li>password : admin</li>
    </ul>
  </li>
  <li>Role client
    <ul>
      <li>username : client</li>
      <li>password : client</li>
    </ul>
  </li>
</ul>

### Installation

#### Requirements

-   Docker (1.12+)
-   docker-compose (1.10+)
-   GNU make

#### Clone the project

    $ git clone git@github.com:nverjus/BileMo-API.git
    $ cd BileMo-API

#### Configuration

Duplicate `docker-compose.override.yml.dist` and name the copy `docker-compose.override.yml`. In this file you can choose the port and the database informations for the application.

Duplicate `.env.dist` and name the copy `.env`, edit this line with your database informations : `DATABASE_URL=mysql://bilemo:bilemo@mysql:3306/bilemo`


Use `make` to see the Makefile help :

    $ make
    start                          Install and start the project
    stop                           Remove docker containers
    clear                          Remove all the cache, the logs and the sessions
    clean                          Clear and remove dependencies
    cc                             Clear the cache in dev and prod env
    tty                            Run app container in interactive mode
    db                             Reset the database and load fixtures

Run `make start` to start the app.

By default, the documentation is reachable at `http://localhost/api`
