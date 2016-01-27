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
        <input class="form-control" placeholder="User Name" name="username" type="text" autofocus>
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Password" name="password" type="password" value="">
    </div>
    <div class="checkbox">
        <label>
            <input name="remember" type="checkbox" value="Remember Me">Remember Me
        </label>
    </div>
    <!-- Change this to a button or input when using this as a form -->
    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
</fieldset>
</form>