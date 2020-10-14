<?php
/**
 * 数字格式化测试类
 * @author XinLiang
 */

require '../vendor/autoload.php';

use numberFormatLc\NumberFormatLc;

$number = '102400010';
echo NumberFormatLc::byte_format($number);

//输出：97.7 MB