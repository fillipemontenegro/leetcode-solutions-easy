/*
https://leetcode.com/problems/valid-parentheses
27/07/2022

Runtime: 15 ms, faster than 51.69% of PHP online submissions for Valid Parentheses.
Memory Usage: 19.6 MB, less than 31.01% of PHP online submissions for Valid Parentheses.
*/

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $parKeys = ["(" => ")", "{" => "}", "[" => "]"];
        $opened = [];
        
        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($parKeys[$s[$i]])) {
                array_push($opened, $s[$i]);
            } else {
                $currPar = array_pop($opened);
                if ($parKeys["$currPar"] !== $s[$i]) return false;
            }
        }
        
        return empty($opened);
    }
}
