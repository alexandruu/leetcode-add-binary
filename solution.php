class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $aLen = strlen($a);
        $bLen = strlen($b);
        $maxLen = max($aLen, $bLen);
        
        $sum = "";
        $carry = 0;
        
        for ($i = 0; $i < $maxLen; $i++) {
            $elA = $aLen - 1 - $i >= 0 ? $a[$aLen - 1 - $i] : 0;
            $elB = $bLen - 1 - $i >= 0 ? $b[$bLen - 1 - $i] : 0;
            
            $sumTemp = $elA + $elB + $carry;            
            if ($sumTemp === 3) {
                $carry = 1;
                $add = 1;
            } else if ($sumTemp === 2) {
                $carry = 1;
                $add = 0;
            } else {
                $carry = 0;
                $add = $sumTemp;
            }
            
            $sum = strval($add) . $sum;
        }
        
        $sum = ($carry === 1 ? strval($carry) : '') . $sum;
        
        return $sum;
    }
}
