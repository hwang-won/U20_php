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
    <script type="text/javascript" src="js/useDataTables.js"></script>
    <script type="text/javascript" src="js/sorting.js"></script>
    <title>U20</title>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>

    <!-- sidebar -->
    <?php include 'sidebar.php' ?>

    <!-- contents 본문 내용 -->
    <div class="container">
        <div class="contents something">
            <h2 class="country_h2">역대기록 목록</h2>
                <div class="btn_base base_mar" style="float: left;">
                    <input type="button" onclick="" class="btn_excel bold" value="엑셀 출력">
                </div>
                <div class="selectArea float_r">
                    <div class="select_box mr10">
                    <select class="d_select" title="기록선택" style="width:140px;">
                        <option value="" hidden>기록선택</option>
                        <option value="1">세계신기록</option>
                        <option value="2">세계U20신기록</option>
                        <option value="3">아시아신기록</option>
                        <option value="4">아시아U20신기록</option>
                        <option value="5">대회신기록</option>
                    </select>
                </div>
                    <div class="select_box mr10">
                        <select class="d_select" title="대회선택" style="width:auto;">
                            <option value="" hidden>대회 선택</option>
                            <option value="1">2022 세계선수권대회</option>
                            <option value="2">제51회 전국소년체육대회(육상경기)</option>
                            <option value="3">제50회 KBS배 전국육상경기대회</option>
                            <option value="4">제76회 전국육상경기선수권대회</option>
                            <option value="5">2022 대구전국높이뛰기육상경기대회</option>
                        </select>
                    </div>
                    <div class="select_box mr10">
                        <select class="d_select" title="성별" style="width: 70px" onchange="changesport(this)">
                            <option value="" hidden>성별</option>
                            <option value="1">남</option>
                            <option value="2">여</option>
                        </select>
                    </div>
                    <!-- 남자 선수일 때  -->
                    <div class="select_box mr10">
                        <select class="d_select" id="sport" title="구분" style="width: 172.667px;">
                            <option value="" hidden>종목</option>
                            <option value="" disabled>단거리달리기</option>
                            <option value="1">100M</option>
                            <option value="2">200M</option>
                            <option value="3">400M</option>
                            <option value="" disabled>중/장거리</option>
                            <option value="4">800M</option>
                            <option value="5">1500M</option>
                            <option value="6">3000M</option>
                            <option value="7">5000M</option>
                            <option value="8">10000M</option>
                            <option value="9">3000M 장애물</option>
                            <option value="" disabled>허들달리기</option>
                            <option value="10">100M 허들</option>
                            <option value="11">110M 허들</option>
                            <option value="12">400M 허들</option>
                            <option value="" disabled>점프경기</option>
                            <option value="13">높이뛰기</option>
                            <option value="14">장대높이뛰기</option>
                            <option value="15">멀리뛰기</option>
                            <option value="16">삼단뛰기</option>
                            <option value="" disabled>던지기</option>
                            <option value="17">투포환</option>
                            <option value="18">원반던지기</option>
                            <option value="19">해머던지기</option>
                            <option value="20">창던지기</option>
                            <option value="" disabled>종합</option>
                            <option value="21">7종 경기</option>
                            <option value="22">10종 경기</option>
                            <option value="" disabled>경보</option>
                            <option value="23">10000M 경보</option>
                            <option value="" disabled>릴레이</option>
                            <option value="24">4x100M 릴레이</option>
                            <option value="25">4x400M 릴레이</option>
                            <option value="26">4x400M 혼성</option>
                        </select>
                    </div>
                    <div class="search" style="width: 50px;">
                        <button type="submit" class="btn_search" title="검색"></a>
                    </div>
                </div>
            <div class="tbl_area">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-hover team_table">
                    <colgroup>
                        <col style="width:15%;">
                        <col style="width:15%;">
                        <col style="width:30%;">
                        <col style="width: 10%;">
                        <col style="width:10%;">
                        <col style="width:10%;">
                        <col style="width:10%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)">기록 구분</th>
                            <th onclick="sortTable(1)">이름</th>
                            <th onclick="sortTable(2)">대회</th>
                            <th onclick="sortTable(3)">종목</th>
                            <th onclick="sortTable(4)">기록</th>
                            <th onclick="sortTable(5)">기록일자</th>
                            <th onclick="sortTable(6)">소속</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>세계신기록</td>
                            <td>정재헌</td>
                            <td>제25회 바르셀로나 올림픽대회 (스페인)</td>
                            <td>10종 경기</td>
                            <td>1329</td>
                            <td>1992.08</td>
                            <td>한국</td>
                        </tr>
                        <tr>
                            <td>세계신기록</td>
                            <td>정재헌</td>
                            <td>제25회 바르셀로나 올림픽대회 (스페인)</td>
                            <td>10종 경기</td>
                            <td>1329</td>
                            <td>1992.08</td>
                            <td>한국</td>
                        </tr>
                        <tr>
                            <td>세계신기록</td>
                            <td>정재헌</td>
                            <td>제25회 바르셀로나 올림픽대회 (스페인)</td>
                            <td>10종 경기</td>
                            <td>1329</td>
                            <td>1992.08</td>
                            <td>한국</td>
                        </tr>
                        <tr>
                            <td>세계신기록</td>
                            <td>정재헌</td>
                            <td>제25회 바르셀로나 올림픽대회 (스페인)</td>
                            <td>10종 경기</td>
                            <td>1329</td>
                            <td>1992.08</td>
                            <td>한국</td>
                        </tr>
                        <tr>
                            <td>세계신기록</td>
                            <td>오진혁</td>
                            <td>제45회 울산 세계선수권대회 (한국)</td>
                            <td>10종 경기</td>
                            <td>1386</td>
                            <td>2009.09</td>
                            <td>한국</td>
                        </tr>
                        <tr>
                            <td>아시아신기록</td>
                            <td>김우진</td>
                            <td>제16회 광저우 아시아경기대회 (중국)</td>
                            <td>10종 경기</td>
                            <td>1387</td>
                            <td>2010.11</td>
                            <td>한국</td>
                        </tr>
                        <tr>
                            <td>아시아신기록</td>
                            <td>김우진</td>
                            <td>제16회 광저우 아시아경기대회 (중국)</td>
                            <td>10종 경기</td>
                            <td>1387</td>
                            <td>2010.11</td>
                            <td>한국</td>
                        </tr>
                        <tr>
                            <td>아시아신기록</td>
                            <td>김우진</td>
                            <td>제16회 광저우 아시아경기대회 (중국)</td>
                            <td>10종 경기</td>
                            <td>1387</td>
                            <td>2010.11</td>
                            <td>한국</td>
                        </tr>
                        <tr>
                            <td>아시아신기록</td>
                            <td>황진우</td>
                            <td>제11회 베이징 아시아선수권대회 (중국)</td>
                            <td>10종 경기</td>
                            <td>1356</td>
                            <td>1999.09</td>
                            <td>한국</td>
                        </tr>
                        <tr>
                            <td>아시아신기록</td>
                            <td>황진우</td>
                            <td>제11회 베이징 아시아선수권대회 (중국)</td>
                            <td>10종 경기</td>
                            <td>1356</td>
                            <td>1999.09</td>
                            <td>한국</td>
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