<?php
/**
 * Print data into HTML easily from array or objects.
 *
 * Using this class, you can set up an html structure and then print data with the structure without using any <?php echo $someArray['Item'];?> blocks
 *
 * @copyright  Copyright (c) 2016 Tareq Mahmood (http://www.tareqmahmood.com)
 * @license    http://www.apache.org/licenses/   Apache License
 */

class PrintEasy {
    /**
     * Print single data item with html
     * Include variable names within a [] block in the html string. 
     *
     * @param string $html
     * @param mixed $data Accepts both array and object format
     * @return boolean
     */
    public static function single($html, $data) {
        $newHtml = preg_replace_callback(
            '/\[([^\]]+)\]/',
            function($match) use ($data) {
                $key = $match[1];
                if(is_object($data)) {
                    return $data->$key;
                } elseif(is_array($data)) {
                    return $data[$key];
                } else return $match[0];

            },
            $html
        );
        echo $newHtml;
        return true;
    }

    /**
     * Print multiple items from a data array with html
     *
     * @param string $html
     * @param array $dataArray the dataArray can contain both array and object format data items
     * @param int $count (optional) If provided, only that number of items will be printed from the array
     * @return boolean
     */
    public static function multiple($html, $dataArray, $count = 0) {
        if(!$count) {
            $count = count($dataArray);
        }

        for($i=0;$i<$count;$i++) {
            PrintEasy::single($html, isset($dataArray[$i]) ? $dataArray[$i] : array());
        }
        return true;
    }
}