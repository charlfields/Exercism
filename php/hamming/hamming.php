<?php

function distance(string $strandA, string $strandB) : int
{
        //Compare if two strands are the same length
        if (strlen($strandA)  == strlen($strandB)) {

            $strandA = str_split($strandA);
            $strandB = str_split($strandB);
            $hammingDistance = 0;

            //Compare each one of the characters, if they are different add it to the Hamming Distance
            foreach($strandA as $index=>$strandAChar) {
                if ($strandAChar != $strandB[$index]) {
                    $hammingDistance++;
                }
            }
            return $hammingDistance;
        }
        else {
            throw new InvalidArgumentException('DNA strands must be of equal length.');
        }


}
