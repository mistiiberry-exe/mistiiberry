
<!DOCTYPE html>
<html>
<head>
<meta name="viewpoint" content="width=device-width, initial-scalw=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7,0/css/font-awesome.min.css">  
</head>
<body>
<center>
<form method="POST" action="action.pay.php" style="width: 60%;height: 20;position: absolute;top: 25%;left: 25%;text-align: center;font-size: 20px;background-color: white;border:2px solid black;">
            <h2>Payment</h2>
            <p style="color:red">*Payments can only be done using credit or debit card</p>
            <label for="bank">Choose Bank :</label>
            <select name="bank" >
              <option>State Bank Of India</option>
              <option>HDFC Bank</option>
              <option>Axis Bank</option>
            </select> &nbsp;&nbsp;&nbsp;
            <label for="bank">Payment Method :</label>
            <select name="bank" >
              <option>Credit Card</option>
              <option>Debit Card</option>
            </select><br><br>
            <label for="cnum">Card Number :</label>
            <input type="text" name="cardnum" placeholder="Card number">
            <label for="cname">Card Holder's Name :</label>&nbsp;&nbsp;
            <input type="text" name="cardname" placeholder="Card Holder's Name"><br><br>
            <label for="exp">Expiry Date:</label>
            <span style="border:1px solid #bbbbbb">
            <input style="border:0;" type="text" name="month" placeholder="MM" maxlength="2" size="2" />
            <span>/</span>
            <input style="border:0;" type="text" name="year" placeholder="YY" maxlength="2" size="2" />
            </span>&nbsp;&nbsp;
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="cvv"><br><br>
             
                <button type="submit" name="pay" >PAY NOW</button><br><br>
</form>
  
  </center>
</body>
</html>

