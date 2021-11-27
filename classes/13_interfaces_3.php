<?php
    namespace PaymentInterface\v2;

    interface PaymentInterface {
        public function paymentProcess();
    }

    class Paypal implements PaymentInterface {
        public function loginFirst() {echo 'paypal login..<br>';}
        public function payNow() {echo 'payed by paypal';}
        public function paymentProcess() {
            $this->loginFirst();
            $this->payNow();
        }
    }

    class Visa implements PaymentInterface {
        public function payNow() {echo 'payed by visa';}
        public function paymentProcess() { // no need for login first for visa
            $this->payNow();
        }
    }

    class Cash implements PaymentInterface {
        public function payNow() {echo 'payed by cash';}
        public function paymentProcess() { // no need for login first for cash
            $this->payNow();
        }
    }

    class BuyProduct {
        public function pay(PaymentInterface $paymentType) {
            $paymentType->paymentProcess(); // use this method since for visa and cash no need to login
        }
    }

    $paymentType = new Paypal();
    $buyProduct = new BuyProduct();
    $buyProduct->pay($paymentType);
?>
