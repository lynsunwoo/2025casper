<!-- 상단 헤더 연결 -->
<?php
  include('./sub/header.php');
?>

<main>
  <form name="로그인" method="post" action="./php/login_check.php">
    <fieldset id="id_form">
      <div>
      <legend>로그인</legend>
      <p class="box">
        <label for="id_text">
        <input type="text" placeholder="아이디" id="id_txt" name="id_txt">
      </p>

      <p class="box p_box">
        <label for="pw_txt">
        <input type="password" placeholder="패스워드" id="pw_txt" name="pw_txt">
      </p>

      <p class="c_btn">
        <input type="checkbox" id="id_check">
        <lable for="id_check">아이디 저장</label>
      </p>

      <p class="s_btn">
        <input type="submit" value="로그인" id="login_btn">
      </p>

      <p>
        <a href="#" title="아이디 찾기">아이디 찾기</a>
        <a href="#" title="비밀번호 찾기">비밀번호 찾기</a>
        <a href="./php/register.php" title="회원가입">회원가입</a>
      </p>
    </div>
    </fieldset>
  </form>
</main>

<!-- 하단 푸터 연결 -->
<?php
  include('./sub/footer.php');
?>

  <!-- 제이쿼리 라이브러리 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- 제이쿼리 쿠키 파일 -->
  <script src="./script/jquery.cookie.js"></script>

  <script>
    $(document).ready(function(){
      //1. 쿠키이름 저장(개발자가 알아서)
      let key = $.cookie('idChk'); //쿠키이름(아무 이름이나)생성 후 저장

      //2. 만약에 브라우저에 key 변수에 값이 저장되어 있다면(쿠키가 있다면)
      if(key){ 
        $('#id_txt').val(key); //id가 id박스안에 표시되어야 한다.
        $('#id_check').prop('checked',ture); //체크박스에 체크가 되어 있음. (아이디값 표시)
      }

      //3. 체크박스를 체크하지 않고 다시 체크를 풀 경우(쿠키 저장하지 않겠다 / 삭제)
      $('#id_check').change(function(){
        if($(this).is(':checked')){ //is 메서드 체크여부를 true / false로 알려줌
          //쿠키 생성하기
          $.cookie('idChk',$('#id_txt').val(),{expires:7, path:'/'});
        }else{ //체크를 하지 않은 경우
          //쿠키 생성하지 않음
          $removeCookie('idChk', {path:'/'});
        }
      });

      //4. 아이디 입렵시 쿠키 생성
      $('#id_txt').keyup(function(){
         if($('#id_check').is(':checked')){ //is 메서드 체크여부를 true / false로 알려줌
          //쿠키 생성하기
          $.cookie('idChk',$(this).val(),{expires:7, path:'/'});
        }
      });
    });
  </script>