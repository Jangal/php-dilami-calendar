<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Jangal\DilamiCalendar;

final class AlgorithmsTest extends TestCase
{
    public function testDilamiToJalali(): void
    {
        $this->assertEquals(
            array(1398, 5, 1),
            DilamiCalendar::dilamiToJalali(1592, 12, 15)
        );
        $this->assertEquals(
            array(1592, 12, 15),
            DilamiCalendar::jalaliToDilami(1398, 5, 1)
        );

        # leap year
        $this->assertEquals(
            array(1594, 8, 30),
            DilamiCalendar::jalaliToDilami(1400, 1, 14)
        );
        $this->assertEquals(
            array(1594, 0, 0),
            DilamiCalendar::jalaliToDilami(1400, 1, 15)
        );
        $this->assertEquals(
            array(1400, 1, 14),
            DilamiCalendar::dilamiToJalali(1594, 8, 30)
        );
        $this->assertEquals(
            array(1400, 1, 15),
            DilamiCalendar::dilamiToJalali(1594, 0, 0)
        );
    }
}
