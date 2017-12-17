<?php
/**
 * Copyright (c) 2017. Shantwo
 */
include __DIR__.DIRECTORY_SEPARATOR.'includes.php';

$user = new \Tlbs\Models\User();
?>
<pre>
<?php print_r($user->ReadAll()); ?>
</pre>
