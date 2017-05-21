<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger" onclick="this.classList.add('hidden')">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Error!</strong> <?= $message ?>
</div>
