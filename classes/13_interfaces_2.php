<?php
    namespace PaymentInterface\v1;

    interface PaymentInterface { // made reference to all classes using 'implements'
        public function payNow();
    }

    class Paypal implements PaymentInterface {
        public function payNow() {echo 'payed by paypal';}
    }

    class Visa implements PaymentInterface {
        public function payNow() {echo 'payed by visa';}
    }

    class Cash implements PaymentInterface {
        public function payNow() {echo 'payed by cash';}
    }

    class BuyProduct {
        public function pay(PaymentInterface $paymentType) {
            $paymentType->payNow();
        }
    }

    $paymentType = new Visa(); // can use any payment due to 'interface'
    $buyProduct = new BuyProduct();
    $buyProduct->pay($paymentType);
?>
