<?php
// include("inc/constant.php");
// session_start();

// error_reporting(0);
// if (isset($_POST['Pay'])) {

//     $account_name = $_POST['account_name'];
//     $amount = $_POST['amount'];
//     $card_number = $_POST['card_number'];
//     $card_cvv = $_POST['card_cvv'];
//     $card_exprie = $_POST['card_exprie'];
//     $sql = "insert into payment_details(account_name,card_number,card_cvv,card_exprie,amount)values(:account_name,:card_number,:card_cvv,:card_exprie,:amount)";
//     $query = $dbh->prepare($sql);
//     $query->bindParam(':amount', $account_name, PDO::PARAM_STR);
//     $query->bindParam(':card_exprie', $card_exprie, PDO::PARAM_STR);
//     $query->bindParam(':card_cvv', $card_cvv, PDO::PARAM_STR);
//     $query->bindParam(':card_number', $card_number, PDO::PARAM_STR);
//     $query->bindParam(':account_name', $account_name, PDO::PARAM_STR);
//     $query->execute();
//     $_SESSION['card_number'] = $result['card_number'];
//     $LastInsertId = $dbh->lastInsertId();
//     if ($LastInsertId > 0) {
//         echo '<script>alert("Your Paid successfully. Card Number is "+"' . $card_number . '")</script>';

//         echo "<script>window.location.href ='Pay_sucess.php'</script>";
//     } else {
//         echo '<script>alert("Something Went Wrong. Please try again")</script>';
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <link href="pay.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="pay.css"> -->
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #f5f5f5;
        font-family: Arial, Helvetica, sans-serif;
    }

    .wrapper {
        background-color: #fff;
        width: 500px;
        padding: 25px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        margin: 150px auto 0;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    }

    .wrapper h2 {
        background-color: #fcfcfc;
        color: darkblue;
        font-size: 24px;
        padding: 10px;
        margin-bottom: 20px;
        text-align: center;
        border: 1px dotted #333;
    }

    h4 {
        padding-bottom: 5px;
        color: darkblue;
    }

    .input-group {
        margin-bottom: 8px;
        width: 100%;
        position: relative;
        display: flex;
        flex-direction: row;
        padding: 5px 0;
    }

    .input-box {
        width: 100%;
        margin-right: 12px;
        position: relative;
    }

    .input-box:last-child {
        margin-right: 0;
    }

    .name {
        padding: 14px 10px 14px 50px;
        width: 100%;
        background-color: #fcfcfc;
        border: 1px solid #00000033;
        outline: none;
        letter-spacing: 1px;
        transition: 0.3s;
        border-radius: 3px;
        color: #333;
    }

    .name:focus,
    .dob:focus {
        -webkit-box-shadow: 0 0 2px 1px darkblue;
        -moz-box-shadow: 0 0 2px 1px darkblue;
        box-shadow: 0 0 2px 1px darkblue;
        border: 1px solid darkblue;
    }

    .input-box .icon {
        width: 48px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 0px;
        left: 0px;
        bottom: 0px;
        color: #333;
        background-color: #f1f1f1;
        border-radius: 2px 0 0 2px;
        transition: 0.3s;
        font-size: 20px;
        pointer-events: none;
        border: 1px solid #00000033;
        border-right: none;
    }

    .name:focus+.icon {
        background-color: darkblue;
        color: #fff;
        border-right: 1px solid darkblue;
        border: none;
        transition: 1s;
    }

    .dob {
        width: 30%;
        padding: 14px;
        text-align: center;
        background-color: #fcfcfc;
        transition: 0.3s;
        outline: none;
        border: 1px solid #c0bfbf;
        border-radius: 3px;
    }

    .radio {
        display: none;
    }

    .input-box label {
        width: 50%;
        padding: 13px;
        background-color: #fcfcfc;
        display: inline-block;
        float: left;
        text-align: center;
        border: 1px solid #c0bfbf;
    }

    .input-box label:first-of-type {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
        border-right: none;
    }

    .input-box label:last-of-type {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    .radio:checked+label {
        background-color: darkblue;
        color: #fff;
        transition: 0.5s;
    }

    .input-box select {
        display: inline-block;
        width: 50%;
        padding: 12px;
        /* background-color: #fcfcfc; */
        float: left;
        text-align: center;
        font-size: 16px;
        outline: none;
        border: 1px solid #c0bfbf;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .input-box select:focus {
        /* background-color: darkblue; */

        text-align: center;
    }

    .button {
        width: 100%;
        background: transparent;
        border: none;
        background: red;
        color: #fff;
        padding: 15px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        border-radius: 4px;
        font-size: 16pt;
        transition: all 0.35s ease;
    }

    .button:hover {
        cursor: pointer;
        background: darkblue;
    }

    .amount {

        margin-left: 75%;
        font-size: 14pt;
        color: red;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        border: none;
    }

    a {
        text-decoration: none;
        color: gray;
    }

    a:hover {
        color: white;
    }
</style>

<body>
    <div class="wrapper">
        <h2>PAYMENT</h2>
        <form method="POST" action="">
           
            <input type="text" id="amount" name="amount" class="amount" value="Amount: 4000" disabled>
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" name="account_name" id="account_name" placeholder="Account Holder Name" required
                        class="name">
                    <i class="fa fa-user icon"></i>
                </div>

                <!-- <div class="input-box">
                    <input type="text" placeholder="Nick Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div> -->
            </div>
            <!-- <div class="input-group">
                <div class="input-box">
                    <input type="email"  placeholder="Email Adress" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div> -->
            <!-- <div class="input-group">
                <div class="input-box">
                    <h4> Date of Birth</h4>
                    <input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYYY" class="dob">
                </div>
                <div class="input-box">
                    <h4> Gender</h4>
                    <input type="radio" id="b1" name="gendar" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gendar" class="radio">
                    <label for="b2">Female</label>
                </div>
            </div> -->
            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i><a href="pay_success.php">
                                Paypal</a></span></label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" name="card_number" maxlength='16' id="card_number" placeholder="Card Number"
                        required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="tel" name="card_cvv" id="card_cvv" placeholder="Card CVC" maxlength='3' required
                        class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input maxlength='5' name="card_exprie" id="card_exprie" placeholder="MM/YY" type="text"
                        onkeyup="formatString(event);" class="name">
                    <!-- <select>
                        <option>01 jun</option>
                        <option>02 jun</option>
                        <option>03 jun</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                    </select> -->
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="submit" name="Pay" class="button"
                    onclick="window.location.href='Pay_sucess.php'"
                    value="Pay Now">
                    <!-- <button type="submit">PAY NOW</button> -->
                </div>
            </div>
        </form>
    </div>
    <script>
        function formatString(e) {
            var inputChar = String.fromCharCode(event.keyCode);
            var code = event.keyCode;
            var allowedKeys = [8];
            if (allowedKeys.indexOf(code) !== -1) {
                return;
            }

            event.target.value = event.target.value.replace(
                /^([1-9]\/|[2-9])$/g, '0$1/' // 3 > 03/
            ).replace(
                /^(0[1-9]|1[0-2])$/g, '$1/' // 11 > 11/
            ).replace(
                /^([0-1])([3-9])$/g, '0$1/$2' // 13 > 01/3
            ).replace(
                /^(0?[1-9]|1[0-2])([0-9]{2})$/g, '$1/$2' // 141 > 01/41
            ).replace(
                /^([0]+)\/|[0]+$/g, '0' // 0/ > 0 and 00 > 0
            ).replace(
                /[^\d\/]|^[\/]*$/g, '' // To allow only digits and `/`
            ).replace(
                /\/\//g, '/' // Prevent entering more than 1 `/`
            );
        }

    </script>
</body>

</html>