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
        <div class="something contents">
            <h2 class="country_h2">경기별 순위보기</h2>
            <div class="table_wrap">
                <div class="btn_base base_mar" style="float: left; display: flex; align-items: center;">
                    <input type="button" onclick="" class="btn_excel bold" value="엑셀 출력">
                    <div class="" style="padding-left: 30px; font-size:var(--font-regular)">
                        경기: 100m
                    </div>
                    <div class="" style="padding-left: 30px; font-size:var(--font-regular)">
                        풍속/용기구: +1.3m
                    </div>
                </div>

                <div class="selectArea float_r">
                    <div class="select_box mr10">
                        <select class="d_select" title="성별" style="width: 122px" onchange="changesport(this)">
                            <option value="" hidden>성별</option>
                            <option value="1">남</option>
                            <option value="2">여</option>
                        </select>
                    </div>

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
            </div>
            <!-- select 선택에 따른 종목 결과 나열 -->
            <div class="tbl_area">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-hover team_table">
                    <colgroup>
                        <col style="width: 10%" />
                        <col style="width: 25%" />
                        <col style="width: 15%" />
                        <col style="width: 25%" />
                        <col style="width: 25%" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)">등수</th>
                            <th onclick="sortTable(1)">이름</th>
                            <th onclick="sortTable(2)">국가</th>
                            <th onclick="sortTable(3)">결과</th>
                            <th onclick="sortTable(4)">비고</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>MinJi Kim</td>
                            <td>KOR</td>
                            <td>0:10:12</td>
                            <td>World Record</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Yoshitaku Nagasako</td>
                            <td>JPN</td>
                            <td>0:10:46</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Elena Potapenko</td>
                            <td>KAZ</td>
                            <td>0:10:95</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mingyu Zhang</td>
                            <td>CHN</td>
                            <td>0:11:26</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Alise Fakhrutdinova</td>
                            <td>UZB</td>
                            <td>0:11:49</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Tsogtbaatar Tsend-Ochir</td>
                            <td>MGL</td>
                            <td>0:12:46</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Sulaiman Hamad</td>
                            <td>KSA</td>
                            <td>0:12:75</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Chamara Repiyallage</td>
                            <td>SRI</td>
                            <td>0:00:00</td>
                            <td>Disqualified</td>
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