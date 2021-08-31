<?php

namespace oop\oopgeneratetoken\token;

class token
{
    private $token='';

    private $length=0;

    public function __construct($length)
    {
        $this->length=$length;
    }
 

    const TEXT='AB23456CDEFGHyuifghjklmnbIJK789LMNPopasdQRSTVqwertvcxz01';

    public function getToken()
    {
        return $this->token;
    }

    public function geneateToken()
    {
        
        for($i=1;$i<=$this->length;$i++)
        {
            $this->token .= self::TEXT[rand(1,strlen(self::TEXT)-1)];
        }

    }
}


?>