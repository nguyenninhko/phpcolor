<?php
function rmdir_recurse($delete) {
$delete = rtrim($delete , '/') . '/';
$handle = opendir($delete);
while (false !== ($file = readdir($handle))) {
if($file != '.' and $file != '..' ) {
$fullxoa = $delete.$file;
if (is_dir($fullxoa)) {
  rmdir_recurse($fullxoa);
}else{
  unlink($fullxoa);
}
}
}
closedir($handle);
rmdir($delete);
}
?>