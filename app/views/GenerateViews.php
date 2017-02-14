<?php

namespace App\Views;

/**
 * Class GenerateViews
 * @package App\Views
 */
class GenerateViews
{

    private $_template;
    private $_view;
    private $_content;

    /**
     * GenerateViews constructor.
     * @param $view
     */
    public function __construct($view) {
        $this->_view = $view;
        $this->_template = PRIVATE_ROOT.'views/templates/'.$this->_view.'View.php';
    }

    /**
     * Generate the HTML of the content view
     * @param $datas
     */
    public function generateContent($datas) {
        $this->_content = $this->render($datas);
        $this->generateLayout();
    }

    /**
     * Generate the HTML of the layout, include the content
     */
    public function generateLayout(){
        $this->_view = 'content';
        $this->_template = PRIVATE_ROOT.'views/templates/layout.php';;
        $content_view = $this->render($this->_content);
        echo $content_view;
    }

    /**
     * render method
     * @param array $data_array
     * @return string
     */
    public function render($data_array = []){
        if(file_exists($this->_template)){

            $datas = [$this->_view.'Data' => $data_array];

            if(!empty($data_array)) extract($datas);
            ob_start();
            require_once $this->_template;
            return ob_get_clean();

        }
    }

}