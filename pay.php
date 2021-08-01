<?php
require("session.php");
?>
<?php
require("user_header.php");
require("config.php");
?>
<div class="hk-pg-wrapper">
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <div class="container">
                <!-- Title -->
                <div class="hk-pg-header mb-10">
                    <div>
                        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="book"></i></span></span>Invoice</h4>
                    </div>
                    <div class="d-flex">
                        <a href="#" class="text-secondary mr-15"><span class="feather-icon"><i data-feather="printer"></i></span></a>
                        <a href="#" class="text-secondary mr-15"><span class="feather-icon"><i data-feather="download"></i></span></a>
                    </div>
                </div>
                <!-- /Title -->
                <!-- Row -->
				<?php
    $query = "SELECT invoice_number from payment_details order by invoice_number DESC LIMIT 1";
    $stmt = mysqli_query($con, $query)or die(mysqli_error($con));
    $rowin=mysqli_fetch_array($stmt);
    $value=$rowin['invoice_number'];
    ?>
                
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper hk-invoice-wrap pa-35">
                            <div class="invoice-from-wrap">
                                <?php
                                 $id=$_SESSION["isloginid"];
                                 $_SESSION["number"]=$value;
                                    $sql="SELECT * FROM register WHERE id='$id'";
                                        $result=mysqli_query($con,$sql)or die (mysqli_error($con));
                                        while($row=mysqli_fetch_array($result))
                                        {
                                          ?>
                                <div class="row">
                                    <div class="col-md-7 mb-20">
                                        <img class="img-fluid invoice-brand-img d-block w-100p mb-20" src="assets/img/logo1.png" alt="brand" style="width:60%;"/>
                                        <h6 class="mb-5">mymarriageinvitation.com</h6>
                                        <address>
                                                <span class="d-block">Phone : +916309502137</span>
                                                <span class="d-block">Email : mymarriageinvitation.com@gmail.com</span>
                                            </address>
                                    </div>
                                    <div class="col-md-5 mb-20">
                                        <h4 class="mb-35 font-weight-600">Invoice / Receipt</h4>
                                        <span class="d-block">Date:<span class="pl-10 text-dark"><?php echo date("d-m-Y")?></span></span>
                                        <span class="d-block">Invoice / Receipt <span class="pl-10 text-dark"></span><?php echo $value;?></span>
                                        <span class="d-block">Customer ID<span class="pl-10 text-dark"><?php if(isset($row)){echo $row['customer_id'];}?></span></span>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-0">
                            <div class="invoice-to-wrap pb-20">
                                <div class="row">
                                    <div class="col-md-7 mb-30">
                                        <span class="d-block text-uppercase mb-5 font-13">billing to</span>
                                        <h6 class="mb-5"><?php if(isset($row)){echo $row['name'];}?></h6>
                                        <address>
                                                <span class="d-block">Phone : <?php if(isset($row)){echo $row['mobile_no'];}?></span>
                                                <span class="d-block">Email : <?php if(isset($row)){echo $row['email'];}?></span>
                                            </address>
                                    </div>
                                    <div class="col-md-5 mb-30">
                                        <!--<span class="d-block text-uppercase mb-5 font-13">Payment info</span>
                                        <span class="d-block">Scott L Thompson</span>
                                        <span class="d-block">MasterCard#########1234</span>
                                        <span class="d-block">Customer #<span class="text-dark">324148</span></span>
                                        <span class="d-block text-uppercase mt-20 mb-5 font-13">amount due</span>
                                        <span class="d-block text-dark font-18 font-weight-600">$22,010</span>-->
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <h5>Demo Details</h5>
                            <hr>
                            <div class="invoice-details">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-border mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="w-70">Demo Name</th>
                                                    <th class="text-right">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                    <?php
                                        $sql1="SELECT * FROM payment_details WHERE user_id='$id'";
                                        $result1=mysqli_query($con,$sql1)or die (mysqli_error($con));
                                        while($row=mysqli_fetch_array($result1))
                                        {
                                            $sum=0;
                                            $sum=$sum+$row["amount"];
                                            ?>
                                                <tr>
                                                    <td class="w-70"><?php if(isset($row)){echo $row['demo_name'];}?></td>
                                                    <td class="text-right"><?php if(isset($row)){echo $row['amount'];}?></td>
                                                </tr>
                                                     <?php
                                        }
                                    ?>
                                            </tbody>
                                            <tfoot class="border-bottom border-1">
                                                <tr>
                                                    <th class="text-right font-weight-600"><b>total</b></th>
                                                    <th class="text-right font-weight-600"><?php echo $sum;?></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-sign-wrap text-right py-60">
                                    <img class="img-fluid d-inline-block" src="dist/img/sign.png" alt="sign" />
                                    <span class="d-block text-light font-14">Digital Signature</span>
                                </div>
                            </div>
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
                             <?php
require('config.php');
require('razorpay-php/Razorpay.php');

// Create the Razorpay Order

use Razorpay\Api\Api;
$keyId='rzp_live_lEdaCaoDylKo9L';
$keySecret='PxM8i5uQPiwmfTRkG6PLUMNn';
$displayCurrency='INR';
$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
//$list = array("$name", "$email");
$orderData = [
    'receipt'         => $_SESSION["number"],
    'amount'          => $sum * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];
//print_r($orderData);
$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];
$_SESSION['payamount']=$displayAmount;
if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "mymarriageinvitation.com",
    "description"       => "Online marriage invitation",
    "image"             => "dist/img/logo1.png",
    "prefill"           => [
    "name"              => $_SESSION['islogin'],
    "email"             => $_SESSION['email'],
    "contact"           => $_SESSION['mobile'],
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];
//print_r($data);
if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");
?>
</div>
<div class="col-md-4">
</div>
</div>
                            <hr>
                            <ul class="invoice-terms-wrap font-14 list-ul">
                                <li>Non-Refundable.</li>
                                <li></li>
                            </ul>
                        </section>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->


</div>
</div>
<?php
require("user_footer.php");
?>