<?php

class Experience extends Eloquent{
    
    public function get_datedebut()
    {
	return date('d m Y', strtotime($this->get_attribute('debut')));
    }
    public function get_datefin()
    {
	return date('d m Y', strtotime($this->get_attribute('fin')));
    }
    public static $timestamps = true;
    
}

?>