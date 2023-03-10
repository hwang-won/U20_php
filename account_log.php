<!DOCTYPE html>
<html lang="ko">

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
                <h3>로그 목록</h3>
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
                        <col style="width: 20%" />
                        <col style="width: 20%" />
                        <col style="width: 20%" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th>순번</th>
                            <th>아이디</th>
                            <th>이름</th>
                            <th>활동내역</th>
                            <th>IP</th>
                            <th>시간</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>6</td>
                            <td>w1683111</td>
                            <td>황근원</td>
                            <td>로그아웃</td>
                            <td>220.X.XXX.100</td>
                            <td>2022.11.30 23:20</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>w1683111</td>
                            <td>황근원</td>
                            <td>권한 변경</td>
                            <td>220.X.XXX.100</td>
                            <td>2022.11.30 22:20</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>w1683111</td>
                            <td>황근원</td>
                            <td>기록 삭제</td>
                            <td>220.X.XXX.100</td>
                            <td>2022.11.30 21:20</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>w1683111</td>
                            <td>황근원</td>
                            <td>기록 수정</td>
                            <td>220.X.XXX.100</td>
                            <td>2022.11.30 20:20</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>w1683111</td>
                            <td>황근원</td>
                            <td>기록 등록</td>
                            <td>220.X.XXX.100</td>
                            <td>2022.11.30 19:20</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>w1683111</td>
                            <td>황근원</td>
                            <td>로그인</td>
                            <td>220.X.XXX.100</td>
                            <td>2022.11.30 18:20</td>
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
