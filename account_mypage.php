<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="fontawesome/css/all.min.css" />
        <script src="/fontawesome/js/all.min.js"></script>
        <title>U20</title>
    </head>

    <body>
        <!-- header -->
        <?php include 'header.php' ?>

        <!-- sidebar -->
        <?php include 'sidebar.php' ?>

        <!-- contents 본문 내용 -->
        <div class="container">
            <div class="contents something ptop--40">
                <div class="mypage">
                    <h3>계정 정보</h3>
                    <hr />

                    <div class="mypage_box">
                        <span>아이디</span>
                        <span>test123</span>
                    </div>

                    <div class="mypage_box">
                        <span>이름</span>
                        <span>황근원</span>
                    </div>

                    <div class="mypage_box">
                        <span>비밀번호 변경일 : </span>
                        <span>2022년 12월 31일</span>
                        <span>
                            <a href="change_pw.php">
                                비밀번호 변경
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </span>
                    </div>

                    <div class="mypage_box_auth">
                        <span>권한</span>
                        <div class="table_auths">
                            <div class="table_auth">
                                <label>참가자관리</label>
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>읽기</span></label
                                >
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>수정</span></label
                                >
                                <label
                                    ><input type="checkbox" disabled /><span
                                        >삭제</span
                                    ></label
                                >
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>등록</span></label
                                >
                            </div>
                            <div>
                                <label>경기관리</label>
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>읽기</span></label
                                >
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>수정</span></label
                                >
                                <label
                                    ><input type="checkbox" disabled /><span
                                        >삭제</span
                                    ></label
                                >
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>등록</span></label
                                >
                            </div>
                            <div>
                                <label>기록관리</label>
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>읽기</span></label
                                >
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>수정</span></label
                                >
                                <label
                                    ><input type="checkbox" disabled /><span
                                        >삭제</span
                                    ></label
                                >
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>등록</span></label
                                >
                            </div>
                            <div>
                                <label>통계관리</label>
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>읽기</span></label
                                >
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>수정</span></label
                                >
                                <label
                                    ><input type="checkbox" disabled /><span
                                        >삭제</span
                                    ></label
                                >
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>등록</span></label
                                >
                            </div>
                            <div>
                                <label>계정관리</label>
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>읽기</span></label
                                >
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>수정</span></label
                                >
                                <label
                                    ><input type="checkbox" disabled /><span
                                        >삭제</span
                                    ></label
                                >
                                <label
                                    ><input
                                        type="checkbox"
                                        checked
                                        disabled
                                    /><span>등록</span></label
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php include 'footer.php'; ?>
        <script src="js/main.js"></script>
    </body>
</html>
