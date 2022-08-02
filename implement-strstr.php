/*
https://leetcode.com/problems/implement-strstr
02/08/2022

Runtime: 8 ms, faster than 77.66% of PHP online submissions for Implement strStr().
Memory Usage: 19.5 MB, less than 10.65% of PHP online submissions for Implement strStr().
*/
<?
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        return preg_match("#$needle#", $haystack, $res, PREG_OFFSET_CAPTURE) ? $res[0][1] : -1;
    }
}
