<?php

class ContactForm
{

    public static function contact($userEmail, $userText)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO comment (user_mail, user_comment) '
            . 'VALUES (:user_mail, :user_comment)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_email', $userEmail, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userText, PDO::PARAM_STR);

        return $result;
    }

}
