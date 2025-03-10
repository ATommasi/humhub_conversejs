<?php

namespace humhub\modules\devtools\widgets;

use yii\helpers\Markdown;

class CodeView extends \yii\base\Widget
{
    public $type = '';

    public const PHP_START = '<?php';
    public const PHP_START_ECHO = '<?=';

    public function init()
    {
        parent::init();
        ob_start();
        ob_implicit_flush(false);
    }

    public function run()
    {
        $content = ob_get_clean();
        $codeblock = '```' . $this->type . $content . '```';
        return Markdown::process($codeblock);
    }
}
