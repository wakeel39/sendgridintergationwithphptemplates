<?php
require 'vendor/autoload.php';
//Dotenv::load(__DIR__);
$options = array(
    'turn_off_ssl_verification' => false,
    'protocol' => 'https',
    'host' => 'api.sendgrid.com',
    'endpoint' => '/api/mail.send.json',
    'port' => null,
    'url' => null,
    'raise_exceptions' => false
);
$sendgrid = new SendGrid('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', $options);
$html ='<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZZUM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style type="text/css">
    .invoice 
    {
      background: #fff none repeat scroll 0 0;
      border: 1px solid #f4f4f4;
      margin: 10px 25px;
      padding: 20px;
      position: relative;
    }
    .line 
    {
      border-bottom: 4px solid #eee;
    }
    .page-header 
    {
      border-bottom: 10px solid #eee;
      margin: 20px 0 20px;
      padding-bottom: 7px;
      border-color: red;
    }
    .btn-circle 
    {
      border-radius: 25px;
      font-size: 18px;
      height: 50px;
      line-height: 1.33;
      padding: 10px 16px;
      width: 50px;
    }
    .icons
    {
      margin-left: 15%;
    }
    .linkedin
    {
      background-color: #33adff; 
      color: white;
    }
    @media only screen and (max-width: 500px) {
      .pull-right 
      {
        margin: 10% 46% 3% 0;
        width: 55%;
      }
      .icons
      {
        margin-left: 0%;
      }
      .btn-circle
      {
        height: 40px;
        width: 40px;
      }
    }
    </style>
  </head>
  <body>
    <div class="row">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <img src="logo.PNG">
              <small class="pull-right"><b style="font-size: 30px;">Receipt</b><br>September 10,2015</small>
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row">
        <p class="col-sm-12">Thanks for riding <strong>ZZUM,</strong><b>Customer Name!</b></p>
          <div class="col-sm-6">
            <address>
              Build To:<br>
              <strong>Ikhlaq Hussain</strong><br>
              Pick Up Location at 16:00:<br>
              <strong>500 London Road, Oxford. OX3 1AB</strong><br>
              Drop Up Location at 16:15:<br>
              <strong>500 London Road, Oxford. OX3 1AB</strong><br>
            </address>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <address>
              Booking Reference:<strong>ABC1234</strong><br>
              Driver Name:<strong>Richard Khan</strong><br>
              Plat No:<strong>ND151ABC</strong><br>
              Car Model:<strong>Toyota Prius</strong><br>
            </address>
          </div><!-- /.col -->
          <div class="col-sm-12">
            <p style="font-size: 30px">Charged</p>
            <img src="mastercard.png" alt="Mastercard" height="20" width="40" style="margin-bottom: 10px;"><i> ......5678</i>
            <i style="margin-left: 5%; font-size: 20px"><strong>&pound;</strong> 20</i>
          </div>
        </div><!-- /.row -->
        <h2 class="line"></h2>
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-6 table-responsive">
            <p style="font-size: 20px">Fare Breakdown</p>
            <table class="table table-striped" style="text-align: left;">
              <tbody>
                <tr>
                  <th>Distance</th>
                  <td><strong>&pound;</strong> 15</td>
                </tr>
                <tr>  
                  <th>Time</th>
                  <td><strong>&pound;</strong> 10</td>
                </tr>
                <tr>  
                  <th>Tip (5%)</th>
                  <td><strong>&pound;</strong> 10</td>
                </tr>
                <tr>  
                  <th style="font-size: 20px;">Sub-Total</th>
                  <td><strong>&pound;</strong> 30</td>
                </tr>
                <tr style="color: red;">  
                  <th>Promo</th>
                  <td>- <strong>&pound;</strong> 10</td>
                </tr>
                <tr style="font-size: 20px;">  
                  <th>Total to charge</th>
                  <td><strong>&pound;</strong> 20</td>
                </tr>
              </tbody>
            </table>
          </div><!-- /.col -->
            <div class="col-xs-6 table-responsive">
              <p style="font-size: 20px">Trip Statistics</p>
              <table class="table table-striped">
                <tr>
                  <th style="width:50%">Distance</th>
                </tr>
                <tr>
                  <td>5 Miles</td>
                </tr>
                <tr>
                  <th>Duration</th>
                </tr>
                <tr>
                  <td>15 Minutes</td>
                </tr>
              </table>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <h2 class="line"></h2>
          <div class="col-sm-12">
            <p style="text-align: center"> Share your Code: <strong>XD56734</strong></p>
              <div class="col-sm-12 col-md-offset-1">
                <a href="https://www.facebook.com/" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-facebook"></i></a> 
                <a href="https://twitter.com/" class="btn btn-info btn-circle btn-lg icons"><i class="fa fa-twitter"></i></a> 
                <a href="https://www.linkedin.com/" class="btn btn-primary btn-circle btn-lg icons"><i class="fa fa-linkedin"></i></a> 
                <a href="https://plus.google.com/collections/featured" class="btn btn-danger btn-circle btn-lg icons"><i class="fa fa-google-plus"></i></a> 
                <a href="mailto:riders@zzum.co.uk?Subject=ZZUM%20Feedback" target="_top" class="btn btn-warning btn-circle btn-lg icons"><i class="fa fa-envelope"></i></a>
              </div> 
          </div>
        <h2 style="border-bottom: 10px solid; border-color: red; margin-top: 7%;"></h2>
        <!-- info row -->
        <div class="row">
          <div class="col-sm-6">
            <address>
              <strong style="font-size: 30px;"><i style="color: red;">ZZUM</i> Support</strong><br>
              <strong>riders@zzum.co.uk</strong><br>
              <strong>Contact us with questions about your trip</strong><br>
            </address>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <address>
              <i class="fa fa-star" style="color: red"></i> Tell Friend to sign up with your code. their first rides free!<br>
              <i class="fa fa-star" style="color: red"></i> Once your friend complete his/her first trip, you will get a free ride too!<br>
              <i class="fa fa-star" style="color: red"></i> keep sharing your promo code: collect as many rides as you can!<br>
            </address>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
    </div><!-- ./wrapper -->
  </body>
</html>';

$email = new SendGrid\Email();
$email
    ->addTo('sujjad@appliconic.com')
    //->addTo('bar@foo.com') //One of the most notable changes is how `addTo()` behaves. We are now using our Web API parameters instead of the X-SMTPAPI header. What this means is that if you call `addTo()` multiple times for an email, **ONE** email will be sent with each email address visible to everyone.
    ->setFrom('rider@zzum.co.uk')
    ->setSubject('ZZUM Invoice')
    ->setHtml($html)
;
$res = $sendgrid->send($email);

print_r($res);
exit();


?>