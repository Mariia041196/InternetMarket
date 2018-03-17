<?php

class Comment
{
    public static function getComment()
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Получение и возврат результатов
        $result = $db->query('SELECT id, userEmail, userText FROM comment ORDER BY id DESC');
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['userEmail'] = $row['userEmail'];
            $ordersList[$i]['userText'] = $row['userText'];
            $i++;
        }
        return $ordersList;
    }

}