<?php
# front conroller

use App\Utilities\Lang;

include "bootsrap/init.php";

$text = "در سال 1400 سون لرن بیش از 100 هزار کاربر ثبت نامی دارد";
echo Lang::persian_numbers($text);
