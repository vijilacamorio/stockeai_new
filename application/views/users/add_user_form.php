<?php error_reporting(1); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon"> <i class="pe-7s-note2"></i> </div>
        <div class="header-title">
            <h1>Add User</h1> <small></small>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a>
                </li>
                <li>
                    <a href="<?php echo base_url('user/managecompany'); ?>">Manage Company
                    </a>
                </li>
                <li class="active" style="color:orange;">Add Company</li>
            </ol>
        </div>
    </section>
    <section class="content">
        <?php
            $message = $this->session->userdata('message');
            if (isset($message)) {
        ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $message ?>
        </div>
        <?php 
            $this->session->unset_userdata('message');
            }
            $error_message = $this->session->userdata('error_message');
            if (isset($error_message)) {
        ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $error_message ?>
        </div>
        <?php 
            $this->session->unset_userdata('error_message');
            }
        ?>
        <div class='row'> </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php if($this->permission1->method('manage_user','read')->access()){ ?> <a
                                        href="<?php echo base_url('User/managecompany')?>"
                                        style="color:white;background-color:#38469f;"
                                        class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>Manage
                                        Company</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="errormessage"></div>
                        <?php echo form_open_multipart('User/company_insert', array('name' => 'addCompany', 'id' =>'addCompany'));?>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Company Name<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="1" class="form-control" name="company_name"
                                    id="company_name" placeholder="Enter the Company name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Company Email<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="1" class="form-control" name="email" id="email"
                                    placeholder="Enter the Company email" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mobile<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="number" tabindex="1" class="form-control" name="mobile" id="mobile"
                                    placeholder="Enter the mobile" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo 'City'; ?><i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="1" class="form-control" name="c_city" id="c_city"
                                    placeholder="Enter the city"
                                    oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '')" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><?php echo 'State'; ?><i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="1" class="form-control" name="c_state" id="c_state"
                                    placeholder="Enter the state"
                                    oninput="this.value = this.value.replace(/[^A-Za-z ]/g, '')" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="1" class="form-control" name="address" id="address"
                                    placeholder="Enter the address" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Website<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="1" class="form-control" name="website" id="website"
                                    placeholder="Enter the website" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Logo<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="file" class="form-control" name="image" id="logo" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Payment Reminder Period<i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <div class="datepicker" style="width: 100%;">
                                    <input type="text" name="payment_reminder_date" id="datepickerInput"
                                        class="form-control" readonly>
                                    <div class="date-container" id="dateContainer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Currency<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                    <select class="form-control" id="currency" name="currency" required
                                        style="max-width: -webkit-fill-available; width: 100%; border: 2px solid #d7d4d6;">
                                        <?php $default_currency = 'USD'; ?>
                                        <?php if (!empty($currency_table)) : ?>
                                        <?php foreach ($currency_table as $currency) : ?>
                                        <option value="<?php echo $currency['code'] . ' - ' . $currency['description'] . ' - ' . $currency['symbol']; ?>"
                                            <?php echo ($currency['code'] == $default_currency) ? 'selected' : ''; ?>>
                                            <?php echo $currency['code'] . ' - ' . $currency['description'] . ' - ' . $currency['symbol']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                        <?php else : ?>
                                        <option value="">No currencies found</option>
                                        <?php endif; ?>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Payment Due Date<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <div class="datepicker1" style="width: 100%;">
                                    <input type="text" name="due_date" id="datepickerInput1" class="form-control"
                                        readonly>
                                    <div class="date-container1" id="dateContainer1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Subscription Fees / Month<i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="number" tabindex="1" class="form-control" name="subscription_fees"
                                    id="subscription_fees" placeholder="Enter the subscription fees" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Payment Follow Up Mail<i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="email" tabindex="1" class="form-control" name="mail" id="follow_up_mail"
                                    placeholder="Enter the Payment Follow Up Mail" />
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="1" class="form-control" name="username" id="username"
                                    placeholder="Enter the username" autocomplete="off" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">
                                <?php echo display('password') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="password" tabindex="4" class="form-control" id="password" name="password"
                                    placeholder="<?php echo display('password') ?>" autocomplete="off" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">User Email<i
                                    class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="email" tabindex="1" class="form-control" name="user_email" id="user_email"
                                    placeholder="Enter the user email" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_type" class="col-sm-3 col-form-label">
                                <?php echo display('user_type') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="user_type" id="user_type" tabindex="6">
                                    <option selected value="2">
                                        <?php echo display('admin') ?>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>"
                                    value="<?php echo $this->security->get_csrf_hash();?>">
                                <input type="hidden" name="uid" value="<?php echo $_SESSION['user_id']; ?>">
                                <input type="submit" id="add-customer" style="color:white;background-color:#424f5c;"
                                    class="btn   btn-large" name="add-user" value="<?php echo display('save') ?>"
                                    tabindex="6" />
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<style>
.datepicker {
    position: relative;
    display: inline-block;
}
.datepicker input {
    width: 100%;
    padding: 10px;
    border: 1px solid #CED4DA;
    border-radius: 0.25rem;
    cursor: pointer;
}
.datepicker .date-container {
    display: none;
    position: absolute;
    top: calc(100% + 5px);
    left: 0;
    z-index: 999;
    background: #fff;
    border: 1px solid #CED4DA;
    border-radius: 0.25rem;
    padding: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.datepicker .date-container .date {
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    margin: 5px;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    transition: background-color 0.3s, color 0.3s;
}
.datepicker .date-container .date:hover {
    background-color: #E9ECEF;
}
.datepicker1 {
    position: relative;
    display: inline-block;
}
.datepicker1 input {
    width: 100%;
    padding: 10px;
    border: 1px solid #CED4DA;
    border-radius: 0.25rem;
    cursor: pointer;
}
.datepicker1 .date-container1 {
    display: none;
    position: absolute;
    top: calc(100% + 5px);
    left: 0;
    z-index: 999;
    background: #fff;
    border: 1px solid #CED4DA;
    border-radius: 0.25rem;
    padding: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.datepicker1 .date-container1 .date {
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    margin: 5px;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    transition: background-color 0.3s, color 0.3s;
}
.datepicker1 .date-container1 .date:hover {
    background-color: #E9ECEF;
}
</style>
<script type="text/javascript">
var dateContainer = document.getElementById("dateContainer");
var datePickerInput = document.getElementById("datepickerInput");
datePickerInput.addEventListener("click", function() {
    dateContainer.style.display = "block";
});
for (var i = 1; i <= 10; i++) {
    var dateElement = document.createElement("div");
    dateElement.classList.add("date");
    dateElement.textContent = i;
    dateContainer.appendChild(dateElement);
    dateElement.addEventListener("click", function() {
        var selectedDate = this.textContent;
        datePickerInput.value = selectedDate;
        dateContainer.style.display = "none";
    });
}
document.addEventListener("click", function(event) {
    if (!dateContainer.contains(event.target) && event.target !== datePickerInput) {
        dateContainer.style.display = "none";
    }
});
var dateContainer1 = document.getElementById("dateContainer1");
var datePickerInput1 = document.getElementById("datepickerInput1");
datePickerInput1.addEventListener("click", function() {
    dateContainer1.style.display = "block";
});
for (var i = 1; i <= 31; i++) {
    var dateElement = document.createElement("div");
    dateElement.classList.add("date");
    dateElement.textContent = i;
    dateContainer1.appendChild(dateElement);
    dateElement.addEventListener("click", function() {
        var selectedDate = this.textContent;
        datePickerInput1.value = selectedDate;
        dateContainer1.style.display = "none";
    });
}
document.addEventListener("click", function(event) {
    if (!dateContainer1.contains(event.target) && event.target !== datePickerInput1) {
        dateContainer1.style.display = "none";
    }
});
$(document).ready(function() {
    $("#addCompany").submit(function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        var succalert = '<div class="alert alert-success alert-dismissible" role="alert">';
        var failalert = '<div class="alert alert-danger alert-dismissible" role="alert">';
        var alert2 =
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        $.ajax({
            url: '<?php echo base_url('User/company_insert'); ?>',
            type: 'POST',
            data: formData,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.status == 'success') {
                    $('.errormessage').html(succalert + response.msg + alert2);
                    setTimeout(function() {
                        window.location.href =
                            "<?php echo base_url(); ?>User/managecompany";
                    }, 3000);
                } else if (response.status == 'failure') {
                    $('.errormessage').html(failalert + response.msg + alert2);
                }
            }
        });
    });
});
</script>