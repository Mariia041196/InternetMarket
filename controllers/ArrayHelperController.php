<?php

namespace controllers;

use models;
/**
 * @author admin
 */
class ArrayHelperController extends \yii\web\Controller
{

    public function actionDemo()
    {
        $employees = Employee::find();
        return $this->render('demo', [
            'employees' => $employees,
        ]);
    }

}
