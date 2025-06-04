 # Yak
Yet Another best-practice WordPress local environment Kandidate.

What's done beyond the default:

 * Uses PHP 8.2.
 * Composer based project dependencies, with dependency patching.
 * WP installed under `wordpress/`.
 * `wp-content` available under `content/`.
 * [ElasticPress](https://www.elasticpress.io/) ready to rock.
 * All tooling provided.

The following tools are installed:

* Plugins: [User Switching](https://wordpress.org/plugins/user-switching/), [Query Monitor](https://wordpress.org/plugins/query-monitor/), [ElasticPress Debug Bar](https://wordpress.org/plugins/debug-bar-elasticpress/), [Redis Object Cache](https://wordpress.org/plugins/redis-cache/).
* Page caching.
* Object caching via Redis.
* Coding standards (todo)
* Linting (todo)
* Testing framework (todo)

[DDEV](https://ddev.readthedocs.io/en/stable/) provides, among the following:

 * Email trapping on port 8026
 * Simple xdebug
 * Works well with Ngrok via `ddev share`


# First start

Under `Use this template` > `Create a new repository` to create a copy of this template repository.

Then install the dependencies and launch the environment:
```
ddev composer install
ddev launch
```

![Screenshot 2024-12-04 at 16-20-07 Yak](https://github.com/user-attachments/assets/d1f7a37e-8407-4fb8-bdc0-6c9f60d13fff)
