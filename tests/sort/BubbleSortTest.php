<?php

namespace DataStructuresAndAlgorithms\Test\sort;

use DataStructuresAndAlgorithms\sort\BubbleSort;
use DataStructuresAndAlgorithms\Test\TestCase;

class BubbleSortTest extends TestCase
{
    /**
     * @var BubbleSort $bubbleSort
     */
    protected $bubbleSort;

    public function setUp()
    {
        $this->bubbleSort = new BubbleSort();
    }

    public function dpRun()
    {
        return [
            [
                null, null
            ],
            [
                [], []
            ],
            [
                [1], [1]
            ],
            [
                [2, 5, 3, 2, 9], [2, 2, 3, 5, 9]
            ],

            [
                [8,5,4,6,2,3,7,1,9], [1,2,3,4,5,6,7,8,9]
            ]
        ];
    }

    /**
     * @dataProvider dpRun
     * @param $array1
     * @param $expectation
     */
    public function testRun($array1, $expectation)
    {
        $this->assertEquals($expectation, $this->bubbleSort->run($array1));
    }

}