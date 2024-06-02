<?php
// {"disco_name":disco,
//     "amount":amount to pay,
//     "meter_number": meter number,
//     "MeterType": meter type id (PREPAID:1,POSTPAID:2)
    
//     }
header("Content-Type: application/json");
require_once 'connection.php';
session_start();

class ElectricityBillPayment{

    private $conn;

    function __construct($conn){
       $this->conn = $conn; 
    }

    public function buyNepaBill($disco_name, $amount, $meter_number, $meter_type){
        // call the method for getting particular user account balance
        $balance = $this->getAccountBalance();
        
        // then compare the amount and the purchaser account balance if the balance is low than the account show up insufficient balance
        if($amount > $balance){
            return [
                "success" => false,
                "title" => "Insufficient Balance",
                "message" => "please kindly fund your wallet and then continue transaction with us, current balance: " . $balance
            ];
        }

        $response = $this->processElectricityBillPayment($disco_name, $amount, $meter_number, $meter_type);

        if(isset($response)){
            $response;
        }
        // if($response && $response['status'] === "successful"){
        //     return [
        //         "success" => true,
        //         "title" => "Successful Transaction",
        //         "message" => "Electricity Bill was Purchased successfully",
        //         "status" => "successful"
        //     ];
        // }else{
        //     return [
        //         "success" => false,
        //         "title" => "Transaction Failed",
        //         "message" => "Failed to Purchase Electricity Bill, Please try again",
        //         "status" => "failed"
        //     ];
        // }
    }

    private function processElectricityBillPayment($disco_name, $amount, $meter_number, $meter_type){

        $endpoint = "https://gladtidingsapihub.com/api/billpayment/";
        $header = array(
            "Authorization: Token"  . '45264e5b4be99aa0f1571e0c0447719759c3e4bb',
            'Content-Type: application/json'
        );

        $data = array(
            "disco_name" => $disco_name,
            "amount" => $amount,
            "meter_number" => $meter_number,
            "MeterType" => $meter_type
            // 'meter type id (PREPAID:1,POSTPAID:2)'
        );

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $endpoint);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);

        if(curl_errno($curl)){
            return ["status" => "failed", "error" => curl_error($curl)];
        }

        curl_close($curl);
        return json_decode($response, true);
    }

    private function getAccountBalance() {
        $sql = $this->conn->prepare("SELECT settlement_amount FROM account_balance WHERE transaction_user_id = ?");
        $sql->bind_param("i", $_SESSION['user_id']);
        $sql->execute();
        
        $res = $sql->get_result();
        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();

            return $row['settlement_amount'];
        }
        return 0;
    }
}
if(!empty($_POST['disco_name']) && !empty($_POST['amount']) && !empty($_POST['meter_number']) && !empty($_POST['meter_type'])){

    $disco_name = $conn->real_escape_string($_POST['disco_name']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $meter_number = $conn->real_escape_string($_POST['meter_number']);
    $meter_type = $conn->real_escape_string($_POST['meter_type']);

    $cl = new ElectricityBillPayment($conn);
    $call = $cl->buyNepaBill($disco_name, $amount, $meter_number, $meter_type);
    echo json_encode($call);
}
?>