<?php

include_once 'fungsi.php';
$id = $_GET['id_form'];
$data3 = hapusfm($id);
?>

<script>
    window.history.back()
</script>