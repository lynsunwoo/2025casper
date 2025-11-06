

//1. 변수선언
const toggle_btn = document.getElementById('t_btn');
const close_btn = document.querySelector('.fa-times');
const navi = document.getElementById('navi');
const mnu = document.querySelectorAll('.gnb > li > a'); //메인메뉴
//2. 전체메뉴 버튼 클릭시 #navi보이고/ 숨기기
toggle_btn.addEventListener('click', function(){
  navi.style.left='0';
});

close_btn.addEventListener('click', function(){
  navi.style.left='-100%';
});

//3. 메인메뉴 클릭시 해당 서브메뉴만 나오게 하게
//for문 forEach문 - 같은 태그가 여러개일 경우 해당 인덱스번호에 맞는 a만 선택하여 동작시킵
mnu.forEach(function(item){
  item.addEventListener('click',function(e){
    const sub = item.nextElementSibling; //서브메뉴 변수

    //메인 메뉴에 하위메뉴가 존재한다면
    if(sub&&sub.classList.contains('sub')){
      e.preventDefault(); //새로고침 안되게
      sub.classList.toggle('act');

      const arrow = item.querySelector('.fa-angle-down');
      if(arrow){
        arrow.classList.toggle('rotate');
      }
    }
  });
});