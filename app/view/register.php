<?php require view('partials/header'); ?>

<?php if (isset($error)) { ?>
    <div class="error"><?= $error; ?></div>
<?php } ?>
<form action="" method="POST">

    <?= lang('register_name'); ?>: <input type="text" name="name">
    <button name="submit" type="submit" value="1"><?= lang('register_btn'); ?></button>

</form>

<?php require view('partials/footer'); ?>