Binary Studio Academy PHP 2017
====

### Домашнее задание #1

#### Требования

Внимание: До начала выполнения задания следует убедиться, что у вас настроено рабочее окружение.
А именно:
 - php7
 - git
 - composer

Рекомендуется использовать Vagrant и виртуальную машину Homestead.
Подробнее здесь: https://laravel.com/docs/5.4/homestead

***

#### Установка

Установка показана в рабочем окружении OS Linux:

```bash
git clone git@github.com:BinaryStudioAcademy/bsa-2017-php-1.git
cd bsa-2017-php-1
composer install
```

#### Структура заданий

Все задания разделены по папкам внутри `/src`.

Вашей задачей, в большинтсве случаев, будет дополнить существующий код недостающей
функциональностью.
Набор данных для каждого задания будет жёстко задан с целью проверки в тестах.

***

#### Задание 1

В первом задании (Task1) вам предстоит почувстовать себя в роли тренера покемонов.
Представьте, что вы выбираете покемона вслепую и он вам представляется.

Необходимо реализовать метод `pick(Pokemon $pokemon)` в классе `PokemonTrainer`,
чтобы он возвращал результат в виде:

```
<Pokemon>: <Battlecry>. Например,
Pikachu: Pika-Pika!
```

Так же вам необходимо реализовать следующих покемонов по описанию интерфейса `Pokemon`.

| Pokemon   | Battlecry    | Image                                           |
|-----------|--------------|-------------------------------------------------|
| Pikachu   | Pika-Pika!   | https://img.pokemondb.net/artwork/pikachu.jpg   |
| Bulbasaur | Bool bool!   | https://img.pokemondb.net/artwork/bulbasaur.jpg |
| Psyduck   | PSY!PSY!PSY! | https://img.pokemondb.net/artwork/psyduck.jpg   |
| Slowpoke  | So slow!     | https://img.pokemondb.net/artwork/slowpoke.jpg  |


Проверить себя можно запустив:
```bash
./vendor/bin/phpunit --testsuite task1
```

***


#### Задание 2

Во втором задании (Task2) нужно реализовать простой генератор (используя `yield`), который возвращает следующие emoji:


'😀', '😃', '😄', '😁', '😆', '😅', '😂'.

Для этого нужно расширить метод `generate` в классе `EmojiGenerator`.


Проверить себя можно запустив:
```bash
./vendor/bin/phpunit --testsuite task2
```

***


#### Задание 3

В третьем задании (Task 3) мы будем практиковаться со встроенным web-сервером php.
Ваша задача состоит в том, чтобы отрендерить список изображений для созданных вами в задании 1
покемонов и отобразить страницу используя встроенный web-сервер.

Если вы используете Homestead, то для начала нужно остановить `nginx`.

```shell
sudo pkill nginx
```
Затем запустить встроенный веб-сервер:

```
php -S 0.0.0.0:80 -t .
```
Мoжет потребоваться команда "sudo php -S 0.0.0.0:80 -t .".

Страница будет доступна в браузере по адресу:  

[http://192.168.10.10:8000](http://192.168.10.10:8000)

Часть кода уже содержится в файле `index.php`. Не забудьте реализовать метод `imageUrl()`
у каждого из покемонов.

Проверить себя можно запустив:
```bash
./vendor/bin/phpunit --testsuite task3
```

***


#### Проверка

Вы уже, наверное, заметили, что для проверки заданий мы используем [PHPUnit](https://phpunit.de/getting-started.html).
Это необходимо для того, чтобы проверить соответсвуют ли ваши решения нашим ожиданиям (предложенной спецификации).
Если вы ранее не знакомы с PHPUnit, то не расстраивайтесь. Мы рассмотрим его в дальнейших лекциях более подробно.

На данном этапе можете считать, что лишь автопроверка (как на [codewars.com](codewars.com))

В начале все тесты "красные", т.е. поломанные. Для того чтобы они стали рабочими (зелёными) и не было ошибок,
вам необходимо реализовать необходимые решения.

**Какой профит от тестов?**

* **Для вас**: Уверенность, что вы на правильном пути. (В тестах ну ооочень много подсказок)
* **Для нас**: Рутинная проверка сводится к минимуму, и мы сможем сосредоточится на рекомендациях и фидбеке.

**Чего делать не стоит**
* Менять код assert-ов в тестах
* Тупо подгонять ответы под ожидаемые результаты.(Код мы все равно будем смотреть)


Запуск всех тестов:

```bash
./vendor/bin/phpunit
```

Запуск теста для конкретного задания:

```bash
./vendor/bin/phpunit --testsuite task1
```

#### Приём решений

В идеале необходимо разместить ваше решение в одельном репозитории или форке текущего на Github или Bitbucket
и прислать ссылку на него.
Крайний вариант прислать ссылку на архив с решением.
