/*
https://leetcode.com/problems/two-sum
18/07/2022

Runtime: 1045 ms, faster than 46.18% of PHP online submissions for Two Sum.
Memory Usage: 19.8 MB, less than 93.82% of PHP online submissions for Two Sum.
*/
<?

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] + $nums[$j] == $target) return [$i, $j];
            }
        }
        return [];
    }
}
