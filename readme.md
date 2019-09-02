<h1>Trufelo Laravel Ecommerce</h1>

![](demo.gif)

**EN**

•	Trufelo is a small ecommerce website (still under construction) developed with educational purpouses, offering truffles and truffled products. There is also a recipes section. Trufelo has an admin panel which allows to add, delete or edit products, recipes, user accounts, application menus and much more. There is a simple shopping cart, coupons system and a checkout function which keeps a record in the database about all orders made. After successful order each client recievs an email with his order details.

•	In Trufelo are implemented packages like: -Voyager(CMS); -Stripe(Online payment processing); - Axios(HTTP client)

•	For the easier project installation on your local machine there is a custom command $ php artisan trufelo:install.
  1. Clone the repository and CD into it;
  2. run $ composer install;
  3. Rename .env.example to .env or cp .env.example .env and set credentials for the Database and the mail function MAIL_USERNAME=6f0cc86362d1c6 and MAIL_PASSWORD=be895cd11e5b85 (please notice that these are educational user details)
  4. run $ php artisan trufelo:install and follow steps;
  5. run $ npm install;

The following command $php artisan trufelo:install will perform a sequence of crucial for the application processes. It will create Database with utf8mb4_unicode_ci collation, generate APP_KEY required for application's encryption, install Voyager, create Voyager admin user and ask you to enter a username, a password, and an email which will be used further for accessing Voyager's admin panel. Also migrate tables and seed them with example data.

**Fully Manual Installation**
If you wish to perform a manuall installation you should follow the following steps:
  1. Clone the repository and CD into it;
  2. $ composer install;
  3. Rename .env.example to .env or $ cp .env.example .env and set credentials for   the Database; 
  4. $ php artisan db:create;
  5. $ php artisan key:generate;
  6. Set Stripe credentials: STRIPE_KEY and STRIPE_SECRET into .env file;
  7. Register new mailtrap.io   
  8. $ php artisan voyager:admin your@email.com --create;
  9. $ php artisan migrate:fresh;
  10. $ php artisan db:seed;
  11. $ npm install;

• To Log in into Voyager's admin panel you have to add /admin in the end of project's url or follow the steps during the installation.

• To Use Stripe you need to have a registration at https://stripe.com and also uncomment stripe section into scripts.blade.php and set Stripe credentials: STRIPE_KEY and** STRIPE_SECRET** into** .env** file

• Coupon Codes: ABC123 gives you €30 discount; DEF456 gives you 50% discount;

• Upcoming: brand new design compiled with SASS; SEO optimization; SPA index page; more "ecommerce" expressed part with breadcrumbs and products category  navigation; All sections and buttons working. More Products, Image gallery for each product; Weights function on each product; Searchbar; Comments section for each product and much more.. 

**Stripe** <a href="https://stripe.com/">Page</a>

**Shopping Cart** <a href="https://packagist.org/packages/hardevine/shoppingcart">Page</a>

**Voyager Admin** <a href="https://voyager.devdojo.com/">Page</a>

**Mailtrap.io** <a href="https://mailtrap.io">Page</a>

Please notice that this is an educational project and not a commericla one. There are still many bugs to be fixed. I do not own any of the pictures used. 

**BG**

•	Труфело е малък онлайн магазин (все още в процес на конструкция), разработен с учебна цел, предлагащ трюфели и производните на тях продукти. Разполага с админ панел, чрез който могат да се добавят или редактират нови продукти, хранителни рецепти, клиент акаунти, както и много други. Разполага с "кошница за пазаруване", чекаут функция записваща в базата данни детайлите за направената проъчка и доставка. Изпраща имейл до клиента с детайли относно направената покупка. Възможна е и покупка без регистрация. Купонна система за отстъпки

•	В Труфело са имплементирани пакетите: -Voyager(CMS); -Stripe(Online payment processing); -Axios(HTTP client);

•	За да използвате Stripe функцията е необходимо да имате регистрация в https://stripe.com/ и да разкоментирате stripe секцията в scripts.blade.php 

**За инсталиране на проекта е необходимо** 
  1. Клонирайте от Гитхъб; 
  2. $ composer install; 
  3. Прейменувайте .env.example на .env или $ cp .env.example .env и въведете данните си за връзка с базата данни, регистрирайте се в mailtrap.io и въведете данните в следните полета: MAIL_USERNAME=6f0cc86362d1c6 и MAIL_PASSWORD=be895cd11e5b85 (следните детайли са работещи и въпреки, че е недопостимо да се за акаунт с демонстрационна цел);
  4. $ php artisan trufelo:install и следвайте стъпките по време на инсталацията;
  5. $ npm install;
trufelo:install ще създаде база данни с колация utf8mb4_unicode_ci и име truffleshop, ще генерира APP_KEY, необходим за правилната криптацията на апликацията, ще инсталира Voyager, ще създаде Voyager админ акаунт и по време на инсталацията ще поиска да въведете username, password и email. Също така ще създаде таблици с информация и ще ги попълни с примерни данни.

**Изцяло ръчна инсталация**
  1. Клонирайте от Гитхъб;
  2. $ composer install;
  3. Прейменувайте .env.example на .env или $ cp .env.example .env и въведете данните си за връзка с базата данни;
  4. $ php artisan db:create;
  5. $ php artisan key:generate;
  6. Въведете Stripe данните си STRIPE_KEY and STRIPE_SECRET into .env file;
  7. Регистрирайте се в mailtrap.io или друга mail test система или използвайте следните данни: MAIL_USERNAME=6f0cc86362d1c6 и MAIL_PASSWORD=be895cd11e5b85 (следните детайли са работещи и въпреки, че е недопостимо да се за акаунт с демонстрационна цел);
  8. $ php artisan voyager:admin your@email.com --create;
  9. $ php artisan migrate:fresh;
  10. $ php artisan db:seed;
  11. $ npm install;

•	За Лог-ин във Voyager добавете /admin в URL-а на приложението или следвайте стъпките по време на инсталацията.

•	Промо Кодове: ABC123 - €30 отстъпка DEF456 - 50% отстъпка

**Stripe** <a href="https://stripe.com/">Page</a>

**Shopping Cart** <a href="https://packagist.org/packages/hardevine/shoppingcart">Page</a>

**Voyager Admin** <a href="https://voyager.devdojo.com/">Page</a>

**Mailtrap.io** <a href="https://mailtrap.io">Page</a>

**BG**

•Предстои: -Изцяло нов дизайн генериран със SASS ; SEO оптимизация; SPA index page; -Стартиране на неактивните секции и бутони; -Допълнителни продукти; -Имидж галерия за всеки продукт; -Избор на количествена опаковка на всеки продукт; -Търсене на продукти; -Коментари и оценки от клиенти за всеки продукт; -Рецепти в произволен ред за всеки продукт и много други...
