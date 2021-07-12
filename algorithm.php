<?php 
function kiem_tra($nums,$target)
{
    if($target < 0)
    {
        return false;
    }else{
        for($i = 0; $i < count($nums); $i++)
        {
            for($j = $i + 1; $j < count($nums);$j++)
            {
                if($nums[$i] + $nums[$j] == $target)
                {
                    print_r([$i,$j]);
                }
            }
        }
    }
}
$mang = array(2,7,11,5);
kiem_tra($mang,9);

//-10^9 <= target <= 10^9
 ?>