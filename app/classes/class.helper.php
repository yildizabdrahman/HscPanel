<?php

class Helper
{
    public function Load()
    {
        $helperDir = realpath('.') . '/app/helper';

        if ($dh = opendir($helperDir)) {

            while ($file = readdir($dh)) {

                if (is_file($helperDir . '/' . $file)) {

                    require_once $helperDir . '/' . $file;
                }
            }
        }
    }
}
