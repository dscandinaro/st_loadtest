#!/usr/local/zend/bin/php
<?php
for($i=0;$i<1000;$i++){
  exec('./fork.php > /dev/null &');
  echo "request $i fired\n";
}
