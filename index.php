<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FusPay Demo App</title>
</head>
<body>

    <h2>FUSpay Merchant DemoApp</h2>

    

        <!-- FUSPAY INLINE -->
        <div id = "fuspayForm">
            
            <script src="http://localhost:3000/fuspay-inline.js"></script>          

            <input type = "hidden" name = "pubKey" value = "009c" />
            <input type = "hidden" name = "reference" value = "unique-reference-code" />
            <input type = "hidden" name = "description" value = "payment for phone" />
            <input type = "hidden" name = "callback_url" value = "http://localhost/fuspay-demo-app/fuspay.php" />
            <!-- <label><b>FusToken</b></label><br> -->
            <input type = "hidden" name = "fusToken" placeholder = "fuspay token" value = ""  /><br><br>
              <!-- <label><b>Amount</b></label><br> -->
            <input type = "hidden" name = "amountToPay" placeholder = "amount to pay" value = "" /><br><br>
            
            <!-- <input type = "submit"  value = "Pay Now" />    -->
              <button id = "fpayBtn" type="button" onclick="$_fp.Pay()"> Pay </button>    
              <div id="overlay"></div>
        
        </div>

        <form >
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button type="button" onclick="payWithPaystack()"> Pay </button> 
</form>
 
<script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_86d32aa1nV4l1da7120ce530f0b221c3cb97cbcc',
      email: 'customer@email.com',
      amount: 10000,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>

  
</body>
</html>