<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Payment form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
     * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("bg.jpg");
    background-size: cover;
    background-position: center;
}

.main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.payment {
    background:linear-gradient(rgba(0, 0, 0, 1), rgba(0, 0, 0, 1));
    padding: 20px;
    /* border-color: white; */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
   
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
    color: white;
    font-weight: 600;
}

form#payment {
    margin-left: 20px;
}

label {
    font-size: 16px;
    font-weight: bold;
    color: white;
    display: block;
    margin-bottom: 6px;
}

input[type="text"],
input[type="date"],
select,
textarea,
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 14px;
    border: 1px solid #ddd;
    border-radius: 3px;
    background-color: #f9f9f9;
    outline: none;
}

select {
    appearance: none;
    -webkit-appearance: none;
    background: url("arrow-down.png") no-repeat right center;
    background-size: 20px;
    cursor: pointer;
}

input[type="submit"] {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>



</head>

<body>
    <div class="main">
        <div class="payment">
            <h2>Enter your Payment details</h2>
            <form action="process_payment.php" method="POST" id="payment" enctype="multipart/form-data">

                
                <label for="ATL_code"><b>ATL CODE</b></label>
                <br>
                <input type="text"name="ATL_CODE" id="name" required>
                <br><br>

                <label for="pay_catg">Pay catg</label>
                <br>
                <select class="select" name="pay_catg">
                    <option></option>
                    <option value="Paytm">Paytm</option>
                    <option value="Google Pay">Google Pay</option>
                    <option value="Credit card">Credit card</option>
                    <option value="Debit card">Debit card</option>
                </select>
                <br><br>


                <label for="pay_slab">Pay Slab</label>
                <br>
                <select class="select" name="pay_slab">
                    <option></option>
                    <option value="5%">5%</option>
                    <option value="10%">10%</option>
                    <option value="15%">15%</option>
                    <option value="20%">20%</option>
                </select>
                <br><br>

                <label for="date">Date</label>
                <br>
                <input type="date" id="name" name="date" required>
                <br><br>

                <label for="amount">Amount </label>
                <br>
                <input type="text" id="name" name="amount" required>
                <br><br>

                <label for="comment">Comment</label><br>
                <textarea name="comment" id="name"></textarea>
                <br><br>

                <label for="file">File</label><br>
                <input type="file" id="filename" name="file" placeholder="Choose file" required>
                <br><br>

                <label for="vendor">Vendor</label>
                <br>
                <select class="select" name="vendor">
                    <option></option>
                    <option value="UPI">UPI</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="E-Wallet">E-Wallet</option>
                    <option value="Mobile-payment">Mobile-payment</option>
                </select>
                <br><br>

                <label for="pay_type">Pay Type</label>
                <br>
                <select class="select" name="pay_type">
                    <option></option>
                    <option value="Paytm">Paytm</option>
                    <option value="Google Pay">Google Pay</option>
                    <option value="Credit card">Credit card</option>
                    <option value="Debit card">Debit card</option>
                </select>
                <br><br>

                <label for="ref_no">Ref No.</label>
                <br>
                <input type="text" id="name" name="ref_no" required>
                <br><br>

                <label for="pfms">PFMS</label>
                <br>
                <select class="select" name="pfms">
                    <option></option>
                    <option value="PPA">Print Payment Advise(PPA)</option>
                    <option value="DSC">Digital Signature Certificate(DSC)</option>
                    <option value="CINB">Corporate Internet Banking(CINB)</option>
                </select>
                <br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="submit" id="submit" name="submit" onclick="redirect()">
            </form>
        </div>
    </div>

</body>

</html>

</html>