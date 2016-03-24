<?php
namespace Common\Widget;

use Common\Widget\BaseWidget;

class MenuWidget extends BaseWidget
{
    public function menu()
    {
        layout(false);
        return $this->fetch('Widget:menu');
    }
}