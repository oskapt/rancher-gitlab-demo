<?php

if( file_exists('down')) {
  header("HTTP/1.0 503 Down For Maintenance");
} else {
  print("OK\n");
}
?>