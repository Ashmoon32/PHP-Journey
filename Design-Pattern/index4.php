<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategy</title>
</head>
<body>
    <?php
    
        interface PaymentInterface
        {
            public function amount();
        }

        class CashPayment implements PaymentInterface
        {
            public function amount()
            {
                return 100;
            }
        }

        class MobilePayment implements PaymentInterface
        {
            public function amount()
            {
                return 90;
            }
        }


        class Payment
        {
            private $paymentMethod;

            public function pay($context)
            {
                switch($context)
                {
                    case "cash":
                        $this->paymentMethod = new CashPayment;
                        break;

                    case "mobile":
                        $this->paymentMethod = new MobilePayment;
                        break;

                    default:
                        $this->paymentMethod = new CashPayment;

                }

                return $this->paymentMethod->amount();
            }
        }


        $payment = new Payment;

        echo $payment->pay("cash") . " USD ";
        echo "<br>";
        echo $payment->pay("mobile") . " USD ";
    
    ?>
</body>
</html>