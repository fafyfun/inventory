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
<fieldset>
    <div class="form-group">
        <input class="form-control" placeholder="Name" name="name" type="text">
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Address Line 1" name="address_1" type="text" value="">
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Address Line 1" name="address_2" type="text" value="">
    </div>    <div class="form-group">
        <input class="form-control" placeholder="City" name="city" type="text" value="">
    </div>    <div class="form-group">
        <input class="form-control" placeholder="State" name="state" type="text" value="">
    </div>    <div class="form-group">
        <input class="form-control" placeholder="Zip Code" name="zip" type="text" value="">
    </div>    <div class="form-group">
        <input class="form-control" placeholder="Country" name="country" type="text" value="">
    </div>    <div class="form-group">
        <input class="form-control" placeholder="Email Address" name="email" type="text" value="">
    </div>    <div class="form-group">
        <input class="form-control" placeholder="Confirm Email" name="confirmEmail" type="text" value="">
    </div>    <div class="form-group">
        <input class="form-control" placeholder="Home Phone" name="hPhone" type="text" value="">
    </div>    <div class="form-group">
        <input class="form-control" placeholder="Business Phone" name="bPhone" type="text" value="">
    </div>    <div class="form-group">
        <input class="form-control" placeholder="Mobile Phone" name="mPhone" type="text" value="">
    </div>
    <!-- Change this to a button or input when using this as a form -->
    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
</fieldset>
</form>