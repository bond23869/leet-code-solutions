class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
    
    for($i = 0; $i < count($nums);$i++){
        
        $firstSumInt = $nums[$i];
        
        for($j = 0; $j < count($nums);$j++){
            
            
            if(count($nums) == 2){
                return [0,1];
            }
            
            if($i == $j){
                continue;
            }

            if($target == ($firstSumInt + $nums[$j])){
                
                return [$i,$j];
            }
        }
    }
}
}