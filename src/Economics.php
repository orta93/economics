<?php namespace Orta\Economics;

use Exception;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class Economics {

   /**  @var string $m_SampleProperty define here what this variable is for, do this for every instance variable */
   protected $present = 0;
   protected $future = 0;
   protected $interest = 0;
   protected $periods = 0;

    /**
     * @param null $present
     * @throws Exception
     */
    public function present($present = null)
   {
       if (!is_null($present)) {
           if (is_numeric($present)) {
               $this->present = $present;
           } else {
               throw new Exception('Present value has to be a numeric value');
           }
       }
   }
}
