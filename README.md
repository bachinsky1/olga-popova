# Мета завдання:
Створити простий блог з можливістю перегляду, створення, редагування та видалення записів блогу.

# Вимоги до завдання:

В якості технологічного стеку використовувати HTML, CSS, JavaScript на фронтенді та PHP, MySQL на бекенді.
Верстка повинна бути адаптивною та кроссбраузерною.
Записи блогу повинні містити заголовок, текст і дату публікації.
На сторінці повинні бути кнопки для додавання, редагування та видалення записів блогу.
Всі записи блогу повинні зберігатися в базі даних.
В якості CMS можна використовувати будь-який фреймворк, такий як Laravel, Symfony або Yii.

# Завдання:

Створити базу даних для зберігання записів блогу.
Створити сторінку перегляду записів блогу, на якій будуть відображатися всі записи, відсортовані за датою публікації (від нових до старих).
Додати форму для створення нового запису блогу.
Додати можливість редагування та видалення записів блогу.
Додати пагінацію на сторінці перегляду записів блогу, щоб вона не завантажувала всі записи одразу.
Покрити сутність "Unit" тестами.

# Solution
Для першого запуску запустіть наступні команди
`cd blog` 

`cp .env.example .env`

`npm install`

`composer install` 

`npm run build`

`docker compose up --build -d`

Після запуска контейнерів почекайте 20 секунд і запустіть міграції і сідер

`php artisan migrate`

`php artisan db:seed`

Перейдіть на сторінку `http://localhost`
![image](https://github.com/bachinsky1/olga-popova/assets/24652722/103df425-28f3-466e-bb68-8eb4fe6206e1)

Для того щоб з'явилась можливість управління постами необхідно авторизуватись. Клікніть Login
![image](https://github.com/bachinsky1/olga-popova/assets/24652722/edb021d9-5b53-4d8e-9b97-c6df9495a8f1)
Користувач - admin@admin.com

Пароль - password

Авторизуйтесь, та скористайтесь лінками Edit, Delete та Add post
![image](https://github.com/bachinsky1/olga-popova/assets/24652722/c38b61bc-8caa-45c6-a2d8-c1ebfd73b9d6)

Також внизу є кнопки пагінації
![image](https://github.com/bachinsky1/olga-popova/assets/24652722/bf2bed43-aacd-43c7-8fad-9639939569d1)



