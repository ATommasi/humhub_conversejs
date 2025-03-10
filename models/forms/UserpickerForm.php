<?php

namespace humhub\modules\devtools\models\forms;

use Yii;
use yii\base\Model;
use yii\helpers\Html;

class UserpickerForm extends Model
{
    public $guids = [];

    public function rules()
    {
        return [
            ['guids', 'safe'],
        ];
    }

    public function getSelectionString()
    {
        if (empty($this->guids)) {
            return Yii::t('DevtoolsModule.controllers_ShowcaseController', 'Empty selection!');
        } else {
            return Html::encode(implode(', ', $this->guids));
        }
    }
}
