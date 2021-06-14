##  Introduction

Asynchronous / Parallelism in PHP using PHP-FPM pool; One of the best solution for PHP so far.

Repo is about the thin docker implementation of [hollodome/fast-cgi-client](https://github.com/hollodotme/fast-cgi-client); only for demo purpose.

## Usage

- update your nginx port in docker-compose if you are not using `8088`
- `docker-compose up`

> `curl http://localhost:8088`

- The response will be written to he log stream after 5s.
- Uncomment the sendSyncRequest to feel the difference.


*The code has only tried the fire and forget mechanism defined by the author*
