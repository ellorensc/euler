<?php

namespace euler\problem11;

class LargestProduct
{
    private $matrix = [];

    /**
     * LargestProduct constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param array $matrix
     * @throws \Exception
     */
    public function init($matrix = [])
    {
        if (!$matrix) {
            throw new \Exception();
        }

        $this->matrix = $matrix;
    }

    public function calculate()
    {
        $result = 0;
        $product = 0;
        
        for ($y = 0; $y < count($this->matrix); $y++) {
            for ($x = 0; $x < count($this->matrix[$y]); $x++) {
                // Store horizontal numbers based on X position (backwards and forward)
                $_num[0] = array($this->matrix[$y][$x]);
                if (!isset($this->matrix[$y][$x + 1])) { $_num[0][] = 0; } else { $_num[0][] = $this->matrix[$y][$x + 1]; }
                if (!isset($this->matrix[$y][$x + 2])) { $_num[0][] = 0; } else { $_num[0][] = $this->matrix[$y][$x + 2]; }
                if (!isset($this->matrix[$y][$x + 3])) { $_num[0][] = 0; } else { $_num[0][] = $this->matrix[$y][$x + 3]; }
                $_num[1] = array($this->matrix[$y][$x]);
                if (!isset($this->matrix[$y][$x - 1])) { $_num[1][] = 0; } else { $_num[1][] = $this->matrix[$y][$x - 1]; }
                if (!isset($this->matrix[$y][$x - 2])) { $_num[1][] = 0; } else { $_num[1][] = $this->matrix[$y][$x - 2]; }
                if (!isset($this->matrix[$y][$x - 3])) { $_num[1][] = 0; } else { $_num[1][] = $this->matrix[$y][$x - 3]; }

                // Vertical numbers from X point
                $_num[2] = array($this->matrix[$y][$x]);
                if (!isset($this->matrix[$y + 1][$x])) { $_num[2][] = 0; } else { $_num[2][] = $this->matrix[$y + 1][$x]; }
                if (!isset($this->matrix[$y + 2][$x])) { $_num[2][] = 0; } else { $_num[2][] = $this->matrix[$y + 2][$x]; }
                if (!isset($this->matrix[$y + 3][$x])) { $_num[2][] = 0; } else { $_num[2][] = $this->matrix[$y + 3][$x]; }
                $_num[3] = array($this->matrix[$y][$x]);
                if (!isset($this->matrix[$y - 1][$x])) { $_num[3][] = 0; } else { $_num[3][] = $this->matrix[$y - 1][$x]; }
                if (!isset($this->matrix[$y - 2][$x])) { $_num[3][] = 0; } else { $_num[3][] = $this->matrix[$y - 2][$x]; }
                if (!isset($this->matrix[$y - 3][$x])) { $_num[3][] = 0; } else { $_num[3][] = $this->matrix[$y - 3][$x]; }

                // Diagonal position (top left to down right)
                $_num[4] = array($this->matrix[$y][$x]);
                if (!isset($this->matrix[$y + 1][$x + 1])) { $_num[4][] = 0; } else { $_num[4][] = $this->matrix[$y + 1][$x + 1]; }
                if (!isset($this->matrix[$y + 2][$x + 2])) { $_num[4][] = 0; } else { $_num[4][] = $this->matrix[$y + 2][$x + 2]; }
                if (!isset($this->matrix[$y + 3][$x + 3])) { $_num[4][] = 0; } else { $_num[4][] = $this->matrix[$y + 3][$x + 3]; }
                $_num[5] = array($this->matrix[$y][$x]);
                if (!isset($this->matrix[$y - 1][$x - 1])) { $_num[5][] = 0; } else { $_num[5][] = $this->matrix[$y - 1][$x - 1]; }
                if (!isset($this->matrix[$y - 2][$x - 2])) { $_num[5][] = 0; } else { $_num[5][] = $this->matrix[$y - 2][$x - 2]; }
                if (!isset($this->matrix[$y - 3][$x - 3])) { $_num[5][] = 0; } else { $_num[5][] = $this->matrix[$y - 3][$x - 3]; }

                // Diagonal position (top right to down left)
                $_num[6] = array($this->matrix[$y][$x]);
                if (!isset($this->matrix[$y + 1][$x - 1])) { $_num[6][] = 0; } else { $_num[6][] = $this->matrix[$y + 1][$x - 1]; }
                if (!isset($this->matrix[$y + 2][$x - 2])) { $_num[6][] = 0; } else { $_num[6][] = $this->matrix[$y + 2][$x - 2]; }
                if (!isset($this->matrix[$y + 3][$x - 3])) { $_num[6][] = 0; } else { $_num[6][] = $this->matrix[$y + 3][$x - 3]; }
                $_num[7] = array($this->matrix[$y][$x]);
                if (!isset($this->matrix[$y - 1][$x + 1])) { $_num[7][] = 0; } else { $_num[7][] = $this->matrix[$y - 1][$x + 1]; }
                if (!isset($this->matrix[$y - 2][$x + 2])) { $_num[7][] = 0; } else { $_num[7][] = $this->matrix[$y - 2][$x + 2]; }
                if (!isset($this->matrix[$y - 3][$x + 3])) { $_num[7][] = 0; } else { $_num[7][] = $this->matrix[$y - 3][$x + 3]; }

                foreach ($_num as $__num) {
                    $product = $__num[0] * $__num[1] * $__num[2] * $__num[3];
                    if ($product > $result) {
                        $result = $product;
                    }
                }
            }
        }

        return $result;
    }
}
