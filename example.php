<?php


include_once './WordnetApi.class.php';

echo WordnetApi::_new("happy")->getRandomSynonym();