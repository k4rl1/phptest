<?php

namespace TicketFinder;

class SeatFinder
{
    /**
     * @var int
     */
    private int $seats;

    public function __construct($seats)
    {
        $this->seats = $seats;
    }

    public function checkRow(int $row): int
    {
        return 4;
    }

    public function checkAdjacency(int $row, int $seats)
    {
        return true;
    }


}