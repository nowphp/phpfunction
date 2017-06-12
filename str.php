<?php
$number = 23131234.5;
echo '以千位分组来格式化数字number_format:'.number_format($number, 2);
echo '<br>把字符串填充为新的长度str_pad:'.str_pad($number,20,0,STR_PAD_LEFT);
echo '<br>把字符串分割到数组中str_split:';var_dump(str_split($number));
echo '<br>比较两个字符串0 - 如果两个字符串相等<0 - 如果 string1 小于 string2>0 - 如果 string1 大于 string2 strcmp:'.strcmp('Hel','hell');
?>