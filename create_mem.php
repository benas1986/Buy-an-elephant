<?php
require_once 'class.php';
$conn = new db_class();
?>



<div class="controls">
    <div class="row">
        <div class="form-group col-lg-12">
            <input type="text" class="form-control" maxlength="50" placeholder="Firstname *" name="firstname" id="firstname" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group col-lg-12">
            <input type="text" class="form-control" maxlength="50" placeholder="Lastname *" name="lastname" id="lastname" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group col-lg-12">
            <input type="email" class="form-control" maxlength="100" placeholder="Email Address *" name="email" id="email"required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group col-lg-12">
            <input type="tel" class="form-control" maxlength="20" placeholder="Phone Number *" name="phone" id="phone" required >
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group col-lg-12">
            <textarea rows="4" class="form-control" maxlength="250" placeholder="Message *" name="message" id="message" required></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group col-lg-12 floating-label-form-group text-left">
            <p class="text-primary"><strong>*</strong> These fields are required.</p>
        </div>
    </div>
</div>
