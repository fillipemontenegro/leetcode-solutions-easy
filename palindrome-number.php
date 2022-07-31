/*
https://leetcode.com/problems/palindrome-number
31/07/2022

Runtime: 63 ms, faster than 78.51% of PHP online submissions for Palindrome Number.
Memory Usage: 19.1 MB, less than 88.95% of PHP online submissions for Palindrome Number.
*/
<?
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $num = (string)$x;
        for ($i = 0, $j = strlen($num) - 1; $i <= (strlen($num) / 2); $i++, $j--) {
            if ($num[$i] !== $num[$j]) return false;
        }
        return true;
    }
}
