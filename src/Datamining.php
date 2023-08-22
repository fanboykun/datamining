<?php

namespace Fanboykun\Datamining;
use Fanboykun\Datamining\KMeans\Space;

class Datamining
{
    // Build your next great package.
    public function initKMeans(int $dimention) : Space
    {
        return new Space($dimention);
    }
}
