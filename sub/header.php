<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>현대자동차 - 캐스퍼홈페이지(스크롤 레이아웃)</title>
  <meta name="description" content="현대자동차 캐스퍼 공식 홈페이지. 캐스퍼 소개, 시승 신청, 이벤트, 구매 안내 등 다양한 정보를 제공합니다. 온라인에서 나만의 캐스퍼를 만들어보세요.">

  <!-- 초기화 파일 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css">

  <!-- 공통 서식 -->
  <link href="./css/common.css" rel="stylesheet" type="text/css">

  <!-- 레이아웃 서식 -->
  <link href="./css/layout.css" rel="stylesheet" type="text/css">

  <!-- 메인 서식 -->
  <link href="./css/sub.css" rel="stylesheet" type="text/css">

  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

</head>

<body>

  <!-- 상단헤더 시작 -->
  <header>
    <h1><a href="index.html" title="메인페이지로 바로가기"><img src="./images/logo-casper_black.png" alt="상단로고_화이트"></a></h1>

    <nav aria-label="메인메뉴">
      <ul class="gnb">
        <li><a href="#intro" title="소개" class="arctic_scroll">소개</a></li>
        <li><a href="#test_drive" title="체험" class="arctic_scroll">체험</a></li>
        <li><a href="#event" title="이벤트" class="arctic_scroll">이벤트</a></li>
        <li><a href="#buy" title="구매" class="arctic_scroll">구매</a></li>
        <li><a href="#customer" title="고객지원" class="arctic_scroll">고객지원</a></li>
      </ul>
    </nav>

    <!-- 오른쪽 끝 아이콘 -->
    <div class="nav_icon icon1">
      <a href="login.php" title="로그인 페이지로 이동하기"><span class="fas fa-user"></span></a>
      <span>로그인</span>
    </div>
    <div class="nav_icon icon2">
      <span class="fas fa-bell"></span><span>알림</span>
    </div>

  </header>