<?php 

    $inpIMEI = $_POST["data"];

    $curl = curl_init();

    curl_setopt_array($curl, [
    CURLOPT_URL => "https://femaseisa.api.koonolmexico.com/v1/altan/imei_check?imei=".$inpIMEI,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_POSTFIELDS => "",
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhcGlfaWQiOiI2ODQ3NTkzZS0xZTdkLTQxMjAtOWZlNC1lNmM1MmI5Y2U4MzAifQ.DDyzzxCSi1CKWXkNNFqLeakg16wuabB42zPRyEeWWR4"
    ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
    echo "cURL Error #:" . $err;
    } else {
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($response);
        exit();
    }

?>