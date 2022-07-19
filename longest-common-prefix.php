/*
https://leetcode.com/problems/longest-common-prefix/
19/07/2022

Runtime: 16 ms, faster than 48.70% of PHP online submissions for Longest Common Prefix.
Memory Usage: 19.5 MB, less than 32.24% of PHP online submissions for Longest Common Prefix.
*/
<?

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if (count($strs) == 1) return $strs[0];
        $shortestString = 200;
        
        foreach ($strs as $value) {
            if (strlen($value) == 0) return "";
            $shortestString = min($shortestString, strlen($value));
        }
        
        $prefix = "";
        for ($j = 0; $j < $shortestString; $j++) {
            for ($i = 1; $i < count($strs); $i++) {
                $currChar = ($strs[0][$j] == $strs[$i][$j]) ? $strs[0][$j] : "";
                if ($currChar == "") break 2;
            }
            $prefix .= $currChar;
        }
        return $prefix;
    }
}
