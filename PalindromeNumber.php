/**

 Given an integer x, return true if x is palindrome integer.

An integer is a palindrome when it reads the same backward as forward.

For example, 121 is a palindrome while 123 is not.

*/

class Solution {

/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) {
    if($x < 0 ){
        return false;
    }
    
    $fromLeft = (string)$x;
    $fromRight = strrev((string)$x);
    
    if($fromLeft == $fromRight){
        return true;
    } else{
        return false;
    }
}
}