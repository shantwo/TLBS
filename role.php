<?php
/**
 * Copyright (c) 2017. Shantwo
 */

include __DIR__.DIRECTORY_SEPARATOR.'includes.php';

$role = new \Tlbs\Models\Role();
?>
<pre>
<?php print_r($role->ReadAll()); ?>
</pre>
