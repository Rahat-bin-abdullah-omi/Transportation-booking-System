<?php
namespace App\Models;
class Bookinglist
{
public $bookinglist;
public function setbookinglist($bookinglist)
{
$this->bookinglist = $bookinglist;
}
public function getbookinglist()
{
    return $this->bookinglist;
}
}