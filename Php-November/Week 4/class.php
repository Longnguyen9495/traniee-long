<?php
Class Information
{
    public $long = array('long',22,'IT');
    public $hung = array('hung',25,'Master');
    public function getInformation()
    {
      $user =
        [
            'name' => $this->long,
            'names' => $this->hung
        ];
        return $user;
    }
}
$info = new Information();
$infos = $info->getInformation();
print_r($infos);