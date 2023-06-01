# DevOps - итоговая работа

## Описание приложения

### Характеристики
Проект представляет собой веб-приложение на PHP (7.4) с использованием фреймворка Symfony (5.4) и СУБД PostgreSQL. Развёртывание приложения осуществляется с помощью Docker. Логирование обеспечивается с помощью Loki. Просмотр логов осуществляется через Grafana.

### Функционал
- Авторизация (http://localhost:8080/login)
  
  ![alt text](images/auth.png)
- Регистрация (http://localhost:8080/register)

  ![alt text](images/register.png)
- Добавление новых пользователей и вывод всех пользователей (http://localhost:8080/)
  
  ![alt text](images/main.png)

### Просмотр логов
Просмотр логов с использованием Loki осуществляется через Grafana (http://127.0.0.1:3000/)

![alt text](images/grafana_loki.png)

## Запуск приложения
```docker-compose up -d```

![alt text](images/container.png)

В результате выполнения сборки контейнера будут доступны:

- Сервер PostgreSQL с примененными миграциями

  ![alt text](images/database.png)
- Сервер Apache
- Grafana
- Loki
- Promtail

Все конфигурационные файлы и entrypoint находятся в папке ```docker```
