<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-success" onclick="this.classList.add('hidden')">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> <?= $message ?>
</div>

