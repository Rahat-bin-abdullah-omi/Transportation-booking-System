<?php
class BookinglistTest extends \PHPUnit\Framework\TestCase
{
public function testThatWeCanGetThelist()
{
$bookinglist = new \App\Models\Bookinglist;
$Booking_ID = '01';
$Route = 'Dhaka-Chittagong';
$Schedule = '1.00AM-3.00PM';
$Price = '1500';
$bookinglist->setBookinglist("$Booking_ID $Route $Schedule $Price");
$this->assertEquals($bookinglist->GetBookinglist(), '01 Dhaka-Chittagong 1.00AM-3.00PM 1500');
}
}
