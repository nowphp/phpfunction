<?php
$number = 23131234.5;
echo '以千位分组来格式化数字number_format:'.number_format($number, 2);
echo '<br>把字符串填充为新的长度str_pad:'.str_pad($number,20,0,STR_PAD_LEFT)
echo '<br>str_split:'.str_split($number);
?>