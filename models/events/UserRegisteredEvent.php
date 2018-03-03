<?php

namespace models\events;

use yii\base\Event;
use frontend\models\User;
use common\components\UserNotificationInterface;

/**
 * @author admin
 */
class UserRegisteredEvent extends Event implements UserNotificationInterface
{

    /**
     * @var User 
     */
    public $user;


    public function getEmail()
    {
        return $this->user->email;
    }
}
