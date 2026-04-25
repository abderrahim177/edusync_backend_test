<?php
function isvalid($data){
    return filter_var($data,FILTER_VALIDATE_EMAIL);
}