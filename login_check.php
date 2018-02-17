<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>오류안내 페이지 | 그누보드5</title>
<link rel="stylesheet" href="http://localhost/g6/theme/basic/css/default.css?ver=161020">
<!--[if lte IE 8]>
<script src="http://localhost/g6/js/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "http://localhost/php";
var g5_bbs_url   = "http://localhost/php/index.php";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
</script>
<script src="http://localhost/g6/js/jquery-1.8.3.min.js"></script>
<script src="http://localhost/g6/js/jquery.menu.js?ver=161020"></script>
<script src="http://localhost/g6/js/common.js?ver=161020"></script>
<script src="http://localhost/g6/js/wrest.js?ver=161020"></script>
</head>
<body>

<script>
alert("회원아이디나 비밀번호가 공백이면 안됩니다.");
//document.location.href = "";
//alert('history.back();');
history.back();
</script>

<noscript>
<div id="validation_check">
    <h1>다음 항목에 오류가 있습니다.</h1>
    <p class="cbg">
        회원아이디나 비밀번호가 공백이면 안됩니다.    </p>
        <div class="btn_confirm">
        <a href="">돌아가기</a>
    </div>

</div>
</noscript>



<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

</body>
</html>
