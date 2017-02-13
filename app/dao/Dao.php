<?php

namespace App\Dao;

/**
 * Class Dao
 * @package App\Dao
 */

class Dao {

    /** @var resource */
    private $_file;
    /** @var string */
    private $_delimiter;
    /** @var array */
    private $_headers;
    /** @var array */
    private $_datas = [];

    /**
     * Dao constructor.
     * @param $url
     * @param $delimiter
     * @throws \Exception
     */
    public function __construct($url, $delimiter){

        try {
            $this->_file = fopen($url, 'r');
        } catch (\Exception $e){
            throw $e;
        }

        $this->_delimiter = $delimiter;
        $this->_headers = fgetcsv($this->_file, 1000, $this->_delimiter);
    }

    public function __destruct(){
        fclose($this->_file);
    }

    /**
     * Parse CSV file
     * Build an associative array : header_name => cell
     * @param int $max_lines : if 0, get all datas
     * @return array
     */
    public function parseFile($max_lines = 0){

        if ($max_lines > 0){
            $line_count = 0;
        } else {
            $line_count = -1;
        } //endif

        while ($line_count < $max_lines && ($row = fgetcsv($this->_file, 1000, $this->_delimiter)) !== FALSE) {

            foreach ($this->_headers as $k => $header){
                $cell[$header] = $row[$k];
            }

            array_push($this->_datas, $cell);

            if ($max_lines > 0) $line_count++;
        }

        return $this->_datas;

    }

}