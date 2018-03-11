<?php

class ContactForm
{
    public static function contactForm($userName, $userComment)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO feedback (user_mail, comment) '
            . 'VALUES (:user_mail, :comment)';
        $result = $db->prepare($sql);
        $result->bindParam(':user_mail', $userName, PDO::PARAM_STR);
        $result->bindParam(':comment', $userComment, PDO::PARAM_STR);
        return $result->execute();
    }

}
