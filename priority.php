<?php
/**
 * Copyright (c) 2017. Shantwo
 */

include __DIR__.DIRECTORY_SEPARATOR.'includes.php';

$priority = new \Tlbs\Models\Priority();
?>
<pre>
<?php print_r($priority->ReadAll()); ?>
</pre>
