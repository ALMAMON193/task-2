<?php

function searchInsertPosition($nums, $target)
{
  $left = 0;
  $right = count($nums) - 1;

  while ($left <= $right) {
    $mid = $left + intval(($right - $left) / 2);
    if ($nums[$mid] == $target) {
      return $mid;
    } elseif ($nums[$mid] < $target) {
      $left = $mid + 1;
    } else {
      $right = $mid - 1;
    }
  }

  return $left;
}

// Test cases
$nums1 = [1, 7, 3, 5, 6, 9, 15];
$target1 = 5;
echo searchInsertPosition(sort($nums1), $target1);  // Output: 2

$nums2 = [5, 6, 1, 3];
$target2 = 2;
echo searchInsertPosition(sort($nums2), $target2);  // Output: 1

$nums3 = [1, 3, 5, 6];
$target3 = 7;
echo searchInsertPosition(sort($nums3), $target3);  // Output: 4
