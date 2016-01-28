<?php if (validation_errors()) : ?>
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            <?php echo validation_errors() ?>
        </div>
    </div>
<?php endif; ?>
<?php if (isset($error)) : ?>
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
        </div>
    </div>
<?php endif; ?>

<?php echo form_open() ?>

<input type="text" name="email" />

<button type="submit" name="submit"> Submit</button>


