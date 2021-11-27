<?php
    namespace PaymentInterface\v4;

    interface PaymentInterface {
        public function paymentProcess();
    }

    interface LoginInterface {
        public function loginFirst();
    }

    class Paypal implements PaymentInterface, LoginInterface {
        public function loginFirst() {echo 'paypal login..<br>';}
        public function payNow() {echo 'payed by paypal';}
        public function paymentProcess() {
            $this->loginFirst();
            $this->payNow();
        }
    }

    class BankTransfer implements PaymentInterface, LoginInterface { // new payment site
        public function loginFirst() {echo 'bank transfer login..<br>';}
        public function payNow() {echo 'payed by bank transfer';}
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

    $paymentType = new BankTransfer();
    $buyProduct = new BuyProduct();
    $buyProduct->pay($paymentType);
?>
