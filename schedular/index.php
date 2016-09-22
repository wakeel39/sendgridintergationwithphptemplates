<?php require_once __DIR__.'/../vendor/autoload.php';

use GO\Scheduler;

function myFunc() {
  return "Hello world from function!";
}

$scheduler = new Scheduler([
  'emailFrom' => 'wakeel@appliconic.com'
]);


/**
 * Schedule cronjob.php to run every minute
 *
 */
$scheduler->php(__DIR__.'/cronjob.php')->at('* * * * *')->output(__DIR__.'/cronjob.log');



/**
 * Send the output to an email address
 *
 */
$scheduler->call(function () {
    return "This will be sent via email";
  })->at('* * * * *')->output(__DIR__.'/call.log')->email('wakeel@appliconic.com');

$scheduler->run();