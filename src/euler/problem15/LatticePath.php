<?php

namespace euler\problem15;

/**
 * Euler Project - Problem 15
 *
 * Lattice paths
 *
 * Starting in the top left corner of a 2×2 grid, and only being able to move to the right and down, there are
 * exactly 6 routes to the bottom right corner.
 *
 * How many such routes are there through a 20×20 grid?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class LatticePath
{
    /**
     * Brute force method
     *
     * @param $latticePaths
     * @param $row
     * @param $col
     * @return mixed
     */
    public function latticePaths($latticePaths, $row, $col)
    {
        if (!isset($latticePaths[$row])) {
            $latticePaths[$row] = [];
        }

        if (isset($latticePaths[$row][$col  ]) && $latticePaths[$row][$col]) {
            return $latticePaths[$row][$col];
        } else {
            $latticePaths[$row][$col] = 0;
        }

        if ($col == 1) {
            $latticePaths[$row][$col] = $row + 1;
            return $latticePaths[$row][$col];
        }

        if ($row == $col) {
            $latticePaths[$row][$col] = $this->latticePaths($latticePaths, $row, $col - 1) * 2;
            return $latticePaths[$row][$col];
        }

        if ($row > $col) {
            for ($i = $col; $i >= 1; $i--) {
                $latticePaths[$row][$col] = bcadd($latticePaths[$row][$col], $this->latticePaths($latticePaths, $row - 1, $i));
            }
            $latticePaths[$row][$col]++;

            return $latticePaths[$row][$col];
        }
    }

    /**
     * Combinatorial method
     *
     * @param $size
     * @return float|int
     */
    public function combinationalLatticePaths($size)
    {
        $result = 1;

        for ($i=1; $i < $size; $i++) {
            $result = $result * ($size + $i) / $i;
        }

        return $result*2;
    }
}
