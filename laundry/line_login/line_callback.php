<?php
$client_id = '2005611607';
$client_secret = '811201c2eb656cbffcca5ee54b3ac976';
$redirect_uri = 'https://wash.newmatch19.com/line_login/line_callback.php';

if (isset($_GET['code'])) {
    $code = $_GET['code'];

    $token_url = 'https://api.line.me/oauth2/v2.1/token';
    $data = [
        'grant_type' => 'authorization_code',
        'code' => $code,
        'redirect_uri' => $redirect_uri,
        'client_id' => $client_id,
        'client_secret' => $client_secret,
    ];

    $ch = curl_init($token_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
        exit;
    }
    curl_close($ch);

    $response_data = json_decode($response, true);
    if (isset($response_data['access_token'])) {
        $access_token = $response_data['access_token'];

        // 使用訪問令牌獲取用戶資料
        $profile_url = 'https://api.line.me/v2/profile';
        $headers = [
            'Authorization: Bearer ' . $access_token,
        ];

        $ch = curl_init($profile_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $profile_response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
            exit;
        }
        curl_close($ch);

        $profile_data = json_decode($profile_response, true);
        // 在這裡處理用戶資料
        echo '<pre>';
        print_r($profile_data);
        echo '</pre>';
    } else {
        echo 'Error getting access token';
    }
} else {
    echo 'Authorization code not found';
}
?>
