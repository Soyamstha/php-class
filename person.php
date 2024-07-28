<?php
class person
{
    public $name="Soyam";
    public $email="shrestha.soyam111@gmail.com";
    public $password="soaym123";
    public function __construct($name)
    {
        $this->name=$name;
    }
}

$member1=new person("soyam");
$member2=new person("soyam1");
$member3=new person("soyam2");
echo $member1->name;
echo $member2->name;
echo $member3->name;
?>