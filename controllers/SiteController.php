<?php
class SiteController
{
    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();
        // Список последних товаров
        $latestProducts = Product::getLatestProducts(6);
        // Подключаем вид

        require_once(ROOT . '/views/site/index.php');
        return true;
    }
    public function actionSort() {
        $sortPriceAsc = Sort::getSortPriceAsc();
        require_once(ROOT . '/views/sort/priceasc.php');
        return true;
    }
    /**
     * Action для страницы "Контакты"
     */

    public function actionContact()
    {
        // Переменные для формы
        $userEmail = false;
        $userText = false;
        $result = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            // Флаг ошибок
            $errors = false;
            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }
            if ($errors == false) {
                // Если ошибок нет
                // Отправляем письмо администратору

                $result = User::contact($userEmail, $userText);
            }
        }
        // Подключаем вид
        require_once(ROOT . '/views/site/contact.php');
        return true;
    }
    /**
     * Action для страницы "О магазине"
     */
    public function actionAbout()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/about.php');
        return true;
    }
}
