<?php
function run_curl($url){
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl,CURLOPT_USERAGENT,'YehorSk');
    $data = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($data,true);
    if(isset($data['message']) == 'Not Found'){
        header('Location: index.html?error=UserNotFound');
    }else{
        return $data;
    }
}
?>