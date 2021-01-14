<?php
namespace App\Models;
class Pay
{
public $pay;
public function setPay($pay)
{
$this->pay = $pay;
}
public function getPay()
{
    return $this->pay;
}
}