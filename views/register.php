<?php
    /**
     * @var $model \app\models\User
     */
?>
<h1>Create account</h1>
<?php $form = \app\core\form\Form::begin("", "post"); ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname') ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email') ; ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <?php echo $form->field($model, 'confirmpassword')->passwordField() ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php echo \app\core\form\Form::end() ?>

<!-- <div class="row">
        <div class="col">
            <div class="mb-3">
                <label class="form-label">First name</label>
                <input type="text" name="firstname" value="<?php //echo $model->firstname ?>"
                       class="form-control <?php //echo $model->hasError('firstname') ? "is-invalid" : "" ?>">
                <div class="invalid-feedback">
                    <?php //echo $model->getFirstError("firstname") ?>
                </div>
                <div class="form-text">We'll never share your email with anyone else.</div>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label class="form-label">Last name</label>
                <input type="text" name="lastname" class="form-control">
                <div class="form-text">We'll never share your email with anyone else.</div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
        <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" name="confirmpassword" class="form-control">
        <div class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> -->