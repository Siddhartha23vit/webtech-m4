<?php
// Function to callback
function my_callback_function($n) {
   #echo 'welcome to VIT AP';
echo $n;
}
// PASS my_callback_function INTO call_user_func()

call_user_func('my_callback_function','VIT AP');
?>