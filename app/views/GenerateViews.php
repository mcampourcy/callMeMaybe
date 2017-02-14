<?php

namespace App\Views;

/**
 * Class GenerateViews
 * @package App\Views
 */
class GenerateViews
{

    private $_layout;
    private $_template;

    /**
     * generateView constructor.
     * @param $template
     * each content is wrapped in a layout
     */
    public function __construct($template)
    {
        $this->_template = PRIVATE_ROOT.'views/templates/'.$template.'View.php';
        //define the layout template path
        $this->_layout = PRIVATE_ROOT.'views/templates/layout.php';
    }

    /**
     * generate method
     * @param $datas
     */
    public function generate($datas){
        //generate the HTML of the content view
        $content = $this->render($this->_template, $datas);
        //generate the HTML of the layout, include the content
        $view = $this->render($this->_layout, $content, 'content');
        echo $view;
    }

    /**
     * render methode
     * @param $template
     * @param array $data_array
     * @param $name
     * @return string
     */
    public function render($template, $data_array = [], $name = null){
        if(file_exists($template)){

            $data_name = is_null($name) ? $template : $name;
            $datas = [$data_name.'Data' => $data_array];

            if(!empty($data_array)) extract($datas);
            ob_start();
            require_once $template;
            return ob_get_clean();

        }
    }

}