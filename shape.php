<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <title></title> 
  <script type="text/javascript">
    function oneCheckbox(a){
        var obj = document.getElementsByName("shape");
        for(var i=0; i<obj.length; i++){
            if(obj[i] != a){
                obj[i].checked = false;
            }
        }
    }
    function doneCheckbox(a){
        var obj = document.getElementsByName("color");
        for(var i=0; i<obj.length; i++){
            if(obj[i] != a){
                obj[i].checked = false;
            }
        }
    }
</script>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
</head> 
<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="http://yakproject.6te.net/">약 프로젝트</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">홈<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav> <!--네비게이션바 종료-->
<div class="container-fluid">
<form name="sendForm" method="get" action="search/index.php">
    <h2>모양</h2>
    <input type="checkbox" name="shape" value="원형" onclick="oneCheckbox(this)">원형
    <input type="checkbox" name="shape" value="타원형" onclick="oneCheckbox(this)">타원형
    <input type="checkbox" name="shape" value="반원형" onclick="oneCheckbox(this)">반원형
    <input type="checkbox" name="shape" value="삼각형" onclick="oneCheckbox(this)">삼각형
    <input type="checkbox" name="shape" value="사각형" onclick="oneCheckbox(this)">사각형
    <input type="checkbox" name="shape" value="마름모형" onclick="oneCheckbox(this)">마름모형
    <input type="checkbox" name="shape" value="장방형" onclick="oneCheckbox(this)">장방형
    <input type="checkbox" name="shape" value="오각형" onclick="oneCheckbox(this)">오각형
    <input type="checkbox" name="shape" value="육각형" onclick="oneCheckbox(this)">육각형
    <input type="checkbox" name="shape" value="팔각형" onclick="oneCheckbox(this)">팔각형
    <input type="checkbox" name="shape" value="기타" onclick="oneCheckbox(this)">기타
    <h2>색깔</h2>
    <input type="checkbox" name="color" value="하양" onclick="doneCheckbox(this)">흰색
    <input type="checkbox" name="color" value="노랑" onclick="doneCheckbox(this)">노랑색
    <input type="checkbox" name="color" value="주황" onclick="doneCheckbox(this)">주황색
    <input type="checkbox" name="color" value="분홍" onclick="doneCheckbox(this)">분홍색
    <input type="checkbox" name="color" value="빨강" onclick="doneCheckbox(this)">빨강색
    <input type="checkbox" name="color" value="갈색" onclick="doneCheckbox(this)">갈색
    <input type="checkbox" name="color" value="연두" onclick="doneCheckbox(this)">연두색
    <input type="checkbox" name="color" value="초록" onclick="doneCheckbox(this)">초록색
    <input type="checkbox" name="color" value="청록" onclick="doneCheckbox(this)">청록색
    <input type="checkbox" name="color" value="파랑" onclick="doneCheckbox(this)">파랑색
    <input type="checkbox" name="color" value="남색" onclick="doneCheckbox(this)">남색
    <input type="checkbox" name="color" value="자주" onclick="doneCheckbox(this)">자주색
    <input type="checkbox" name="color" value="보라" onclick="doneCheckbox(this)">보라색
    <input type="checkbox" name="color" value="회색" onclick="doneCheckbox(this)">회색
    <input type="checkbox" name="color" value="검정" onclick="doneCheckbox(this)">검정
    <h2>약 인쇄 내용</h2>
    <textarea name="text"></textarea><br>
    <input type="submit">
</form>
</div>
</body> 
</html>