<?

namespace flutter;// /flutter/list.php

use flutter\widget;

class widgetList extends widget
{
    /**
     * @param array of widgets to build
     */
    function __construct($obj)
    {
        $this->obj = $obj;
    }
    function build()
    {
        foreach ($this->obj as $buildable) {
            if (!$buildable instanceof widget) throw new \Exception("Expected instance of widget", 1);
            $buildable->build();
        }
    }
}
