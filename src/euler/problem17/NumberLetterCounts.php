<?php

namespace euler\problem17;

/**
 * Euler Project - Problem 17
 *
 * Number letter counts
 *
 * If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19
 * letters used in total.
 *
 * If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?
 *
 * NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters
 * and 115 (one hundred and fifteen) contains 20 letters. The use of "and" when writing out numbers is in compliance
 * with British usage.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class NumberLetterCounts
{
    private $units = [
        'one',
        'two',
        'three',
        'four',
        'five',
        'six',
        'seven',
        'eight',
        'nine',
    ];

    private $firstTens = [
        'eleven',
        'twelve',
        'thirteen',
        'fourteen',
        'fifteen',
        'sixteen',
        'seventeen',
        'eighteen',
        'nineteen',
    ];

    private $tens = [
        'twenty',
        'thirty',
        'forty',
        'fifty',
        'sixty',
        'seventy',
        'eighty',
        'ninety',
    ];

    private $hundreds = [
        'onehundred',
        'twohundred',
        'threehundred',
        'fourhundred',
        'fivehundred',
        'sixhundred',
        'sevenhundred',
        'eighthundred',
        'ninehundred',
    ];

    private $thousand = 'thousand';

    public function unitsLength()
    {
        $result = 0;

        foreach ($this->units as $unit) {
            $result += strlen($unit);
        }

        return $result;
    }

    public function tenLength()
    {
        return strlen('ten');
    }

    public function firstTensLength()
    {
        $result = 0;

        foreach ($this->firstTens as $tens) {
            $result += strlen($tens);
        }

        return $result;
    }

    public function tensLength()
    {
        $result = 0;

        foreach ($this->tens as $ten) {
            foreach ($this->units as $unit) {
                $result += strlen($ten . $unit);
            }
        }

        foreach ($this->tens as $ten) {
            $result += strlen($ten);
        }

        return $result;
    }

    public function hundredsLength()
    {
        $result = 0;
        $and = 'and';

        foreach ($this->hundreds as $hundred) {
            $result += strlen($hundred); // 100/200...
            foreach ($this->units as $unit) { // 101-109/201-209...
                $result += strlen($hundred . $and . $unit);
            }

            $result += strlen($hundred . $and . 'ten'); // 110

            foreach ($this->firstTens as $ten) { // 111-119/211-219...
                $result += strlen($hundred . $and . $ten);
            }

            foreach ($this->tens as $ten) {
                $result += strlen($hundred . $and . $ten); // 120/130...

                foreach ($this->units as $unit) { // 121-129/131-139...
                    $result += strlen($hundred . $and . $ten . $unit);
                }
            }

        }

        return $result;
    }

    public function thounsandLength()
    {
        return strlen($this->units[0] . $this->thousand);
    }

    public function calculate()
    {
        $result =   $this->unitsLength() +
                    $this->tenLength() +
                    $this->firstTensLength() +
                    $this->tensLength() +
                    $this->hundredsLength() +
                    $this->thounsandLength();

        return $result;
    }
}
