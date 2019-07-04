<?php

namespace DateFormatter;

class DateFormatter
{

    /**
     * Instance of DateTime
     * @param string $date
     * @return instance of DateTime
     */
    public function newDateTime($date)
    {
        return new \DateTime($date);
    }

    /**
     * Convert a Date from db to human
     * @param string $date
     * @param string $format
     * @return string Converted date
     */
    public function dateDbToHuman($date, $format = '')
    {
        if ($date == null || strtotime($date) == 0) {
            return null;
        }
        if (empty($format)) {
            return str_replace('-', '/', date_format($this->newDateTime($date), 'd-m-Y'));
        }
        return date_format($this->newDateTime($date), $format);
    }

    /**
     * Convert a date from human to db
     * @param string $date
     * @return string Converted date
     */
    public function dateHumanToDb($date)
    {
        if ($date == null) {
            return null;
        }
        return date_format($this->newDateTime(str_replace('/', '-', $date)), 'Y-m-d');
    }

    /**
     * Convert a datetime from db to human
     * @param string $date
     * @param string $format
     * @return string Converted date
     */
    public function datetimeDbToHuman($date, $format = '')
    {
        if ($date == null || strtotime($date) == 0) {
            return null;
        }
        if (empty($format)) {
            return str_replace('-', '/', date_format($this->newDateTime($date), 'd-m-Y H:i:s'));
        }
        return date_format($this->newDateTime($date), $format);
    }

    /**
     * Converte um datetime do formato Front para o Banco
     * @param  string $date Date
     * @return string Date convertida
     */
    public function datetimeHumanToDb($date)
    {
        if ($date == null) {
            return null;
        }
        return date_format($this->newDateTime(str_replace('/', '-', $date)), 'Y-m-d H:i:s');
    }
}
