# EVENT-CALENDAR

### CODING CHALLENGE APPLICATION

---
## LOCAL SETUP
1. > cp .env.example .env
1. > docker-composer run --rm artisan key:generate

---

# 🛠️ Application Containers

#### 1. [**Laravel 7**](https://laravel.com/)
#### 2. [**Composer**](https://getcomposer.org/)
To run the composer container use the following command
👉  &nbsp; `docker-compose run --rm composer [command]`
#### 3. [**MySQL**](https://www.mysql.com/)
#### 4. [**NPM**](https://www.npmjs.com/)
To run the npm container use the following command
👉  &nbsp; `docker-compose run --rm npm [command]`
#### 5. [**PHP 7.4**](https://www.php.net/releases/7_4_0.php)

---


## 🚀 Local Setup

> **Requires [Docker 18+](https://docs.docker.com/release-notes/)**

### Bring Up all the containers
> `docker-compose up -d --build`

### Bring Down all containers
> `docker-compose down --rmi=local`

---

## 📝 Local Linting + Testing

### _For Testing 👇
* [**PHPUNIT**](https://phpunit.de/)
* [**PHP Insights**](https://phpinsights.com/)

### Run this to lint your code using the [**PSR 12**](https://www.php-fig.org/psr/psr-12/meta/).
> `docker-compose run --rm composer lint:psr12`

### Run below command to check your PHP Insights Score
> `docker-compose run --rm artisan insights`
The acceptable code score for
* **CODE** - **90%**
* **COMPLEXITY** - **90%**
* **Architecture** - **90%**
* **Style** - **90%**
<br/> so make your code **PASS** that threshold.

> using the composer container `docker-compose run --rm composer run test:insights`