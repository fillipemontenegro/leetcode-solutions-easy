/*
https://leetcode.com/problems/contains-duplicate
03/09/2022

Runtime: 292 ms
Memory Usage: 31.3 MB
*/
<?
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        return (count(array_unique($nums)) < count($nums));
    }
}
