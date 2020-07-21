<table>
    <tr>
<?php
    $heading = explode( ',', $heading );
    ob_start();
    foreach($heading as $item):
?>
        <th><?= $item; ?></th>
<?php
    endforeach;
    return ob_get_clean();
?>
    </tr>