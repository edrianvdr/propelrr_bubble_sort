<?php
// Sorter.php
class Sorter {
    private $array;

    public function __construct(array $array) {
        $this->array = $array;
        $this->bubbleSort();
    }

    private function bubbleSort() {
        $n = count($this->array);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($this->array[$j] > $this->array[$j + 1]) {
                    // Swap the elements
                    $temp = $this->array[$j];
                    $this->array[$j] = $this->array[$j + 1];
                    $this->array[$j + 1] = $temp;
                }
            }
        }
    }

    public function getMedian() {
        $n = count($this->array);
        if ($n % 2 == 0) {
            // Even number of elements
            $mid1 = $this->array[$n / 2 - 1];
            $mid2 = $this->array[$n / 2];
            return ($mid1 + $mid2) / 2;
        } else {
            // Odd number of elements
            return $this->array[floor($n / 2)];
        }
    }

    public function getLargest() {
        return end($this->array);
    }

    public function getSortedArray() {
        return $this->array;
    }
}
?>
