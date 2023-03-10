<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <script src="/fontawesome/js/all.min.js"></script>
    <!--Data Tables-->
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="useDataTables.js"></script>
    <title>U20</title>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>

    <!-- sidebar -->
    <?php include 'sidebar.php' ?>

    <!-- contents 본문 내용 -->
    <div class="container">
        <div class="something contents ptop--40">
            <div class="mypage_100">
                <h3>계정 목록</h3>
                <div class="mypage_notice">
                </div>
            </div>

            <div class="table_wrap">
                <div class="btn_base base_mar">
                    <input type="button" onclick="" class="btn_excel bold" value="엑셀 출력">
                </div>
                <div class="selectArea float_r">
                    <div class="search" style="width: 260px; ">
                        <input type="text" id="search_coach" class="word" name="search_coach" placeholder="검색어를 입력해주세요"
                            maxlength="30" style="width: 260px;
                        height: 40px;
                        padding-left: 20px;
                        font-size: var(--font-small);">
                        <button type="submit" class="btn_search" title="검색"></a>
                    </div>
                </div>
            </div>
            <div>
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-hover team_table">
                    <colgroup>
                        <col style="width: 10%" />
                        <col style="width: 15%" />
                        <col style="width: 15%" />
                        <col style="width: 40%" />
                        <col style="width: 10%" />
                        <col style="width: 10%" />

                    </colgroup>
                    <thead>
                        <tr>
                            <th>순번</th>
                            <th>아이디</th>
                            <th>이름</th>
                            <th>권한</th>
                            <th>권한변경</th>
                            <th>삭제</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>w1683111</td>
                            <td>황근원</td>
                            <td>
                                <table class="table_user"> 
                                    <tr>
                                        <td>참가자관리</td>
                                        <td><input type="checkbox"  disabled><span>읽기</span></td>
                                        <td><input type="checkbox" checked disabled><span>수정</span></td>
                                        <td><input type="checkbox"  disabled><span>삭제</span></td>
                                        <td><input type="checkbox"  disabled><span>등록</span></td>
                                    </tr>
                                    <tr>
                                        <td>경기관리
                                        </td>
                                        <td><input type="checkbox"  disabled><span>읽기</span></td>
                                        <td><input type="checkbox" checked disabled><span>수정</span></td>
                                        <td><input type="checkbox"  disabled><span>삭제</span></td>
                                        <td><input type="checkbox"  disabled><span>등록</span></td>
                                    </tr>
                                    <tr>
                                        <td>기록관리
                                        </td>
                                        <td><input type="checkbox"  disabled><span>읽기</span></td>
                                        <td><input type="checkbox" checked disabled><span>수정</span></td>
                                        <td><input type="checkbox"  disabled><span>삭제</span></td>
                                        <td><input type="checkbox"  disabled><span>등록</span></td>
                                    </tr>
                                    <tr>
                                        <td>통계관리
                                        </td>
                                        <td><input type="checkbox"  disabled><span>읽기</span></td>
                                        <td><input type="checkbox" checked disabled><span>수정</span></td>
                                        <td><input type="checkbox"  disabled><span>삭제</span></td>
                                        <td><input type="checkbox"  disabled><span>등록</span></td>
                                    </tr>
                                    <tr>
                                        <td>계정관리
                                        </td>
                                        <td><input type="checkbox"  disabled><span>읽기</span></td>
                                        <td><input type="checkbox" checked disabled><span>수정</span></td>
                                        <td><input type="checkbox"  disabled><span>삭제</span></td>
                                        <td><input type="checkbox"  disabled><span>등록</span></td>
                                    </tr>
                                    </table>
                                </td>
                            <td>
                                <a href="account_change_auth.php">변경</a>
                            </td>
                            <td>
                                <a href="#">삭제</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>test123</td>
                            <td>홍길동</td>
                            <td>
                                <div class="table_auths">
                                    <div class="table_auth">
                                        <label>참가자관리</label>
                                        <label><input type="checkbox" checked disabled><span>읽기</span></label>
                                        <label><input type="checkbox" checked disabled><span>수정</span></label>
                                        <label><input type="checkbox" disabled><span>삭제</span></label>
                                        <label><input type="checkbox" checked disabled><span>등록</span></label>
                                    </div>
                                    <div>
                                        <label>경기관리</label>
                                        <label><input type="checkbox" checked disabled><span>읽기</span></label>
                                        <label><input type="checkbox" checked disabled><span>수정</span></label>
                                        <label><input type="checkbox" disabled><span>삭제</span></label>
                                        <label><input type="checkbox" checked disabled><span>등록</span></label>
                                    </div>
                                    <div>
                                        <label>기록관리</label>
                                        <label><input type="checkbox" checked disabled><span>읽기</span></label>
                                        <label><input type="checkbox" checked disabled><span>수정</span></label>
                                        <label><input type="checkbox" disabled><span>삭제</span></label>
                                        <label><input type="checkbox" checked disabled><span>등록</span></label>
                                    </div>
                                    <div>
                                        <label>통계관리</label>
                                        <label><input type="checkbox" checked disabled><span>읽기</span></label>
                                        <label><input type="checkbox" checked disabled><span>수정</span></label>
                                        <label><input type="checkbox" disabled><span>삭제</span></label>
                                        <label><input type="checkbox" checked disabled><span>등록</span></label>
                                    </div>
                                    <div>
                                        <label>계정관리</label>
                                        <label><input type="checkbox" checked disabled><span>읽기</span></label>
                                        <label><input type="checkbox" checked disabled><span>수정</span></label>
                                        <label><input type="checkbox" disabled><span>삭제</span></label>
                                        <label><input type="checkbox" checked disabled><span>등록</span></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="account_change_auth.php">변경</a>
                            </td>
                            <td>
                                <a href="#">삭제</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>user123</td>
                            <td>권산</td>
                            <td>authSchedules_d authSchedules_d</td>
                            <td>
                                <a href="account_change_auth.php">변경</a>
                            </td>
                            <td>
                                <a href="#">삭제</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>user1</td>
                            <td>임지훈</td>
                            <td>authRecords_r authAthletes_d</td>
                            <td>
                                <a href="account_change_auth.php">변경</a>
                            </td>
                            <td>
                                <a href="#">삭제</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="page_wrap">
                <div class="page_nation">
                    <a class="arrow pprev" href="#"></a>
                    <a class="arrow prev" href="#"></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">7</a>
                    <a href="#">8</a>
                    <a href="#">9</a>
                    <a href="#">10</a>
                    <a class="arrow next" href="#"></a>
                    <a class="arrow nnext" href="#"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'footer.php'; ?>
    
    <script src="js/main.js"></script>
</body>

</html>
