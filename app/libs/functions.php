<?php
function display($msg){
if(isset($msg)){
echo htmlentities($msg);
}
}
