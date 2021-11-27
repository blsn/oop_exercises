<?php
    class Paypal {
        public function payNow() {echo 'payed by paypal';}
    }

    class Visa {
        public function payNow() {echo 'payed by visa';}
    }

    class Cash {
        public function payNow() {echo 'payed by cash';}
    }

    class BuyProduct {
        public function pay(Cash $paymentType) {
            $paymentType->payNow();
        }
    }

    $paymentType = new Cash(); // can use only Cash
    $buyProduct = new BuyProduct();
    $buyProduct->pay($paymentType);
?>
