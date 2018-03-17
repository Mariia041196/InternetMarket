<?php
/**
 * Контроллер AdminOrderController
 * Управление заказами в админпанели
 */
class AdminCommentController extends AdminBase
{
    /**
     * Action для страницы "Управление заказами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();
        // Получаем список заказов
        $commentList = Comment::getComment();
        // Подключаем вид
        require_once(ROOT . '/views/admin_comment/index.php');
        return true;
    }

}