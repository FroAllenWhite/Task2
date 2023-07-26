<?php

namespace app\modules\admin;
use Yii;
use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $layout = '/admin';

    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */

    public function behaviors()
    {
        return [
            'access'    =>  [
                'class' =>  AccessControl::className(),
                'denyCallback'  =>  function($rule, $action)
                {
                    throw new \yii\web\NotFoundHttpException();
                },
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            // Проверяем, авторизован ли пользователь
                            if (!Yii::$app->user->isGuest) {
                                // Теперь проверяем, является ли пользователь администратором
                                return Yii::$app->user->identity->isAdmin;
                            }
                            return false; // Если пользователь гость или не является администратором, запрещаем доступ
                        }
                    ]
                ]
            ]
        ];
    }

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}