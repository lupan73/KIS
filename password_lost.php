<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>회원정보 찾기 | 그누보드5</title>
<link rel="stylesheet" href="http://localhost/g6/theme/basic/css/default.css?ver=161020">
<link rel="stylesheet" href="http://localhost/g6/skin/member/basic/style.css?ver=161020">
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

<!-- 회원정보 찾기 시작 { -->
<div id="find_info" class="new_win mbskin">
    <h1 id="win_title">회원정보 찾기</h1>

    <form name="fpasswordlost" action="http://localhost/g6/bbs/password_lost2.php" onsubmit="return fpasswordlost_submit(this);" method="post" autocomplete="off">
    <fieldset id="info_fs">
        <p>
            회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
            해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.
        </p>
        <label for="mb_email">E-mail 주소<strong class="sound_only">필수</strong></label>
        <input type="text" name="mb_email" id="mb_email" required class="required frm_input email" size="30">
    </fieldset>

<script>var g5_captcha_url  = "http://localhost/g6/plugin/kcaptcha";</script>
<script src="http://localhost/g6/plugin/kcaptcha/kcaptcha.js"></script>
<fieldset id="captcha" class="captcha">
<legend><label for="captcha_key">자동등록방지</label></legend>
<img src="http://localhost/g6/plugin/kcaptcha/img/dot.gif" alt="" id="captcha_img">
<button type="button" id="captcha_mp3"><span></span>숫자음성듣기</button>
<button type="button" id="captcha_reload"><span></span>새로고침</button><input type="text" name="captcha_key" id="captcha_key" required class="captcha_box required" size="6" maxlength="6">
<span id="captcha_info">자동등록방지 숫자를 순서대로 입력하세요.</span>
</fieldset>    <div class="win_btn">
        <input type="submit" value="확인" class="btn_submit">
        <button type="button" onclick="window.close();">창닫기</button>
    </div>
    </form>
</div>

<script>
function fpasswordlost_submit(f)
{
    if (!chk_captcha()) return false;

    return true;
}

$(function() {
    var sw = screen.width;
    var sh = screen.height;
    var cw = document.body.clientWidth;
    var ch = document.body.clientHeight;
    var top  = sh / 2 - ch / 2 - 100;
    var left = sw / 2 - cw / 2;
    moveTo(left, top);
});
</script>
<!-- } 회원정보 찾기 끝 -->

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
