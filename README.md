Описание
---
Данный репозиторий является тестовым заданием:
```
Реализовать на Symfony простую форму(через стандартный FormType) с
текстовыми полями : firstname, lastname, description.
Поля формы должны по разному "переводиться", в зависимости от какого-нибудь
параметра в .env
Нужно сделать 3 варианта перевода :
ru, en, ru2

В варианте ru2, прописать значения :
firstname : "Как звать",
lastname : "Чей будешь",
description : "Расскажи еще чего-то"
```

Данная задача была реализова с помощью PersonController.php, PersonType.php, translation.yaml, new.html.twig.

Для запуска и проверки необходимо склонировать репозиторий и ввести команду:
```
symfony server:start
```

Чтобы изменить язык, в файле .env необходимо изменить параметр "APP_LOCALE".
