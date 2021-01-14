<?php
class PayTest extends \PHPUnit\Framework\TestCase
{
public function testThatWeCanGetThePayment()
{
$pay = new \App\Models\Pay;
$No_of_tickets_sold= 2;
$Amount =500;
$Total_cost = $No_of_tickets_sold*$Amount;
$pay->setPay($Total_cost);
$this->assertEquals($pay->GetPay(), '1000');
}
}