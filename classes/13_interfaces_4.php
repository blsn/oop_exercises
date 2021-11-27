<?php
    namespace PaymentInterface\v3;

    interface PaymentInterface { // rule #1
        public function paymentProcess();
    }

    interface LoginInterface { // rule #2
        public function loginFirst();
    }

    class Paypal implements PaymentInterface, LoginInterface { // two rules
        public function loginFirst() {echo 'paypal login..<br>';}
        public function payNow() {echo 'payed by paypal';}
        public function paymentProcess() {
            $this->loginFirst();
            $this->payNow();
        }
    }

    class Visa implements PaymentInterface {
        public function payNow() {echo 'payed by visa';}
        public function paymentProcess() {
            $this->payNow();
        }
    }

    class Cash implements PaymentInterface {
        public function payNow() {echo 'payed by cash';}
        public function paymentProcess() {
            $this->payNow();
        }
    }

    class BuyProduct {
        public function pay(PaymentInterface $paymentType) {
            $paymentType->paymentProcess();
        }
    }

    $paymentType = new Paypal();
    $buyProduct = new BuyProduct();
    $buyProduct->pay($paymentType);
?>
