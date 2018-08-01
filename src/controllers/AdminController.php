<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */


namespace powerkernel\yiifaq\controllers;

use yii\filters\AccessControl;


/**
 * Class AdminController
 */
class AdminController extends \powerkernel\yiicommon\controllers\ActiveController
{
    public $modelClass = 'powerkernel\yiifaq\models\FAQ';

    /**
     * @inheritdoc
     * @return array
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['access'] = [
            '__class' => AccessControl::class,
            'rules' => [
                [
                    'verbs' => ['OPTIONS'],
                    'allow' => true,
                ],
                [
                    'roles' => ['admin'],
                    'allow' => true,
                ]
            ],
        ];
        return $behaviors;
    }
}
