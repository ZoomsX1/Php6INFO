<?php if(!defined('LOADED')) {
    die;
} ?>
<hr>
<ul style="color:red">
    <?php foreach($fouten as $fout): ?>
    <li><?php echo $fout ?></li>
    <?php endforeach; ?>
</ul>

