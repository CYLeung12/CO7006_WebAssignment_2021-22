<?php
// session_start();
if (empty($_SESSION['messages'])) {
    return;
}
$msg = $_SESSION['messages'];
unset($_SESSION['messages']);
foreach ($msg as $m) : ?>
    <p style="color: #c30000">
        <?php echo $m; ?>
    </p>
<?php endforeach; ?>