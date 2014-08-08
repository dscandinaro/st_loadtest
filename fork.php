#!/usr/local/zend/bin/php
<?php
for($i=0;$i<5;$i++){
  exec('./request.php > /dev/null &');
}