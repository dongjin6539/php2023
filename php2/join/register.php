<?php
// register.php

// 이메일, 이름, 닉네임, 비밀번호, 연락처, 성별 등의 폼 데이터 가져오기
$userEmail = $_POST['userEmail'];
$userName = $_POST['userName'];
$userNickname = $_POST['userNickname'];
$userPass = $_POST['userPass'];
$userPhone = $_POST['userPhone'];
$userGender = $_POST['userGender'];
$userRegTime = time();

// 데이터베이스에 회원 정보 저장
$sql = "INSERT INTO userMembers (userEmail, userName, userNickname, userPass, userPhone, userGender, userImgSrc, userRegTime) VALUES ('$userEmail', '$userName', '$userNickname', '$userPass', '$userPhone', '$userGender', 'img_default.jpg', '$userRegTime')";
$result = $connect->query($sql);

// 결과 반환
$response = array();
if ($result) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

header('Content-Type: application/json');
echo json_encode($response);
?>
