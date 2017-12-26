<?php include "db.php" ?>
<?php include "register_function.php" ?>

<?php

form_submission();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <style>
        /*
        // For number inputs
        input[type="number"]:invalid {
            box-shadow: none;
        }
        input[type="number"] {
            height: 3em;
        }
        input[type="number"] {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none;
            background: #f8f8f8;
            border-radius: 6px;
            border: solid 1px #e5e5e5;
            color: inherit;
            display: block;
            outline: 0;
            padding: 0 1em;
            text-decoration: none;
            width: 100%;
        }
        input[type="number"]:focus {
            border-color: #e89980;
			box-shadow: 0 0 0 2px #e89980;
        }
        .bef-lab {
            float:left;
        } */
        div .lab {
            margin: 0 0 0 2em;
            height: 3em;
            padding: 0.75em 0 0 0;
        }
        p {
            text-align: right;
        }
        .err {
            color: red;
        }
    </style>

    <title>Register</title>
</head>
<body>

<div id="page-wrapper">
    <!-- Main (No nav bar) -->
    <section id="main" class="container">

        <header>
            <h2>Register</h2>
            <p>Fill in the following details to register.</p>
        </header>
        <div class="row">
            <div class="12u">
                <!-- Form -->
                <section class="box">
                    <!-- Form Header here -->
                    <form method="post" action="register.php">
                        <div class="row uniform 50%">
                            <div class="12u">
                                <input type="text" name="name" id="name" value="" placeholder="Name *" required/>
                                <label for="name" class="err" id="name_err_label"></label>
                            </div>
                            <div class="12u">
                                <input type="email" name="email" id="email" value="" placeholder="Email *" required/>
                                <label for="email" class="err" id="emaileq_err_label"></label>
                            </div>
                            <div class="12u">
                                <input type="text" name="contact_no" id="contact_no" value="" placeholder="Contact No. *" required/>
                                <label for="contact_no">(eg: "0712345678" --> Enter "712345678")</label>
                                <label for="contact_no" class="err" id="contact_err_label"></label>
                            </div>
                            <div class="12u">
                                <input type="password" name="password" id="password" value="" placeholder="Password *" required/>
                            </div>
                            <div class="12u">
                                <input type="password" name="confirm_password" id="confirm_password" value="" placeholder="Confirm Password *" required/>
                                <label for="confirm_password" class="err" id="password_mismatch_err_label"></label>
                            </div>
                            <div class="12u">
                                <input type="text" name="nic_no" id="nic_no" value="" placeholder="NIC No. *" required/>
                                <label for="nic_no" class="err" id="contact_err_label"></label>
                            </div>
                            <div class="12u">
                                <input type="text" name="index_no" id="index_no" value="" placeholder="Index No. "/>
                                <label for="index_no">( If you are a university student )</label>
                                <label for="index_no" class="err" id="index_err_label"></label>
                            </div>
                            <div class="12u">
                                <div class="select-wrapper">
                                    <select name="gender" id="Gender">
                                        <option value="">- Gender -</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <label for="gender" class="err" id="gender_err_label"></label>
                            </div>
                            <div class="12u">
                                <input type="text" name="house_no" id="name" value="" placeholder="House No. *" required/>
                                <label for="house_no" class="err" id="house_err_label"></label>
                            </div>
                            <div class="12u">
                                <input type="text" name="street_name" id="street_name" value="" placeholder="Street Name"/>
                                <label for="street_name" class="err" id="street_err_label"></label>
                            </div>
                            <div class="12u">
                                <input type="text" name="city" id="city" value="" placeholder="City *" required/>
                                <label for="city" class="err" id="city_err_label"></label>
                            </div>
                        </div>
                        <div class="row uniform">
                            <div class="12u">
                                <ul class="actions">
                                    <li><input type="submit" name="submit" value="Register" /></li>
                                    <li><input type="reset" value="Reset" class="alt" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>

                    <hr />
                    <p>* - required</p>
                </section>

            </div>
        </div>
    </section>
</div>
</body>
</html>