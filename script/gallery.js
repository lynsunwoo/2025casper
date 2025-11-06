//gallery.js

$(document).ready(function(){

  //1. 변수선언
  let g_img = $('.g_list li a');//갤러리 이미지
  const g_nav = $('.g_nav ul li a');

  // const t_btn = $('.g_nav ul li:first-child a');
  // const p_btn = $('.g_nav ul li:nt-child(2) a');
  // const p_btn = $('.g_nav ul li:nt-child(2) a');
  // const p_btn = $('.g_nav ul li:nt-child(2) a');
  // const p_btn = $('.g_nav ul li:nt-child(2) a');

  //2. 갤러리 이미지 목록에서 이미지 클릭
  g_img.click(function(e){
    e.preventDefault();//내용 시작지점에 작성(이벤트 무력화)

    let src = $(this).attr('href');
    console.log(src); //확인하기

    //모달윈도 뜨우기
    let modal=`
    <div class="modal">
      <div class="m_inner">
        <img src="${src}" alt="">
        <i class="fas fa-times c_btn"></i>
      </div>
    </div>
    `;

    //body태그의 맨 뒤에 모달내용 출력
    $('body').append(modal);

    //닫기 버튼 클릭시 모달 숨기기
    $('.modal, .modal .c_btn').click(function(){
      $('.modal').fadeOut();
    });

    //return false;//이벤트 기능을 무력화;
  });

  //3. 카테고리 메뉴 클릭시 해당 메뉴에만 서식 적용하기
  g_nav.click(function(e){
    e.preventDefault();

    //기존서식을 제거하고
    $('.g_nav li a').removeClass('act');

    //내가 선택한 메뉴에만 서식을 적용
    $(this).addClass('act');

    if($(this).parent().index()==0){
      //전체보기 버튼클릭시 전체목록이 나오게
      //alert('전체메뉴 클릭');
      $('.g_list li').hide();
      $('.g_list li').fadeIn();
      
    }else if($(this).parent().index()==1){
      //기획버튼 클릭시 기획목록이 나오게
      //alert('기획메뉴 클릭');
      $('.g_list li').hide();//전체 목록 숨기기
      $('.plan').fadeIn();

    }else if($(this).parent().index()==2){
      //설계버튼 클릭시 목록이 나오게
      //alert('설계메뉴 클릭');
      $('.g_list li').hide();//전체 목록 숨기기
      $('.design').fadeIn();
    }else if($(this).parent().index()==3){
      //디자인버튼 클릭시 목록이 나오게
      //alert('디자인메뉴 클릭');
      $('.g_list li').hide();//전체 목록 숨기기
      $('.ui').fadeIn();
    }else{
      //개발버튼 클릭시 목록이 나오게
      //alert('개발메뉴 클릭');
      $('.g_list li').hide();//전체 목록 숨기기
      $('.coding').fadeIn();
    }
  });





});