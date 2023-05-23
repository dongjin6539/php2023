<?php
    include "../connect/connect.php";
    // register.php

    // 데이터 가져오기
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    // 이메일, 이름, 닉네임, 비밀번호, 연락처, 성별 등의 폼 데이터 가져오기
    $userEmail = $data['userEmail'];
    $userName = $data['userName'];
    $userNickname = $data['userNickname'];
    $userPass = $data['userPass'];
    $userPhone = $data['userPhone'];
    $userGender = $data['userGender'];
    $userRegTime = time();

    // 데이터베이스에 회원 정보 저장
    $sql = "SELECT userName, userPhone, userEmail FROM userMembers WHERE userName ='$userName' AND userPhone = '$userPhone'";
    $result = $connect -> query($sql);

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
