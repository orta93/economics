<?php namespace Orta\Economics;

use Exception;

/**
 *  Economics Class
 *
 *  Generate present/future values for economic operations
 *
 *  @author Jonathan Orta | orta93
 */
class Economics {

    public $present;
    public $future;
    public $interest;
    public $periods;

    public function __construct($present = 0, $interest = 0, $periods = 0, $future = 0)
    {
        $this->present = $present;
        $this->interest = $interest;
        $this->periods = $periods;
        $this->future = $future;
    }

    /**
     * @param null $present
     * @return int|Economics
     * @throws Exception
     */
    public function present($present = null)
    {
        if (!is_null($present)) {
            if (is_numeric($present)) {
                $this->present = $present;
                return $this;
            } else {
                throw new Exception('Present value has to be a numeric value');
            }
        } else {
            if ($this->future > 0 && $this->interest > 0 && $this->periods > 0) {
                return 1;
            } else {
                throw new Exception('Impossible to get present value without all parameters');
            }
        }
    }

    /**
     * @param null $future
     * @return $this|int
     * @throws Exception
     */
    public function future($future = null)
    {
        if (!is_null($future)) {
            if (is_numeric($future)) {
                $this->future = $future;
                return $this;
            } else {
                throw new Exception('Future value has to be a numeric value');
            }
        } else {
            if ($this->present > 0 && $this->interest > 0 && $this->periods > 0) {
                return 8;
            } else {
                throw new Exception('Impossible to get future value without all parameters');
            }
        }
    }

    /**
     * @param null $interest
     * @return $this|int
     * @throws Exception
     */
    public function interest($interest = null)
    {
        if (!is_null($interest)) {
            if (is_numeric($interest)) {
                if ($interest > 1) {
                    if ($interest > 100) {
                        $interest = $interest - 100;
                    }
                    $interest = $interest/100;
                }
                $this->interest = $interest;
                return $this;
            } else {
                throw new Exception('Interest value has to be a numeric value');
            }
        } else {
            if ($this->present > 0 && $this->future > 0 && $this->periods > 0) {
                return 5;
            } else {
                throw new Exception('Impossible to get interest value without all parameters');
            }
        }
    }

    /**
     * @param null $periods
     * @return $this|int
     * @throws Exception
     */
    public function periods($periods = null)
    {
        if (!is_null($periods)) {
            if (is_numeric($periods)) {
                $this->periods = $periods;
                return $this;
            } else {
                throw new Exception('Period value has to be a numeric value');
            }
        } else {
            if ($this->present > 0 && $this->future > 0 && $this->interest > 0) {
                return 9;
            } else {
                throw new Exception('Impossible to get periods value without all parameters');
            }
        }
    }
}
