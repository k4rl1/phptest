<?php

namespace TicketFinder\Tests;

use PHPUnit\Framework\TestCase;
use TicketFinder\SeatFinder;

class SeatFinderTest extends TestCase
{
    /**
     * @test
     */
    public function should_check_availability_of_seats_in_first_row()
    {
        $seatFinder = new SeatFinder(4);

        $availableSeats = $seatFinder->checkRow(1);

        $this->assertEquals(4, $availableSeats);
    }

    /**
     * @test
     */
    public function should_check_availability_of_adjacent_seats_in_the_first_row()
    {
        $seatFinder = new SeatFinder(4);

        $availableSeats = $seatFinder->checkAdjacency(1, 2);

        $this->assertTrue($availableSeats);
    }
}
