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
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script>
        $.Lithium = {};
        $.Lithium.tooltip = function () {
            $('.tooltip-click').on('click', function () {
                $(this).toggleClass('on')
            })

            $(document).on('click', function (event) {
                if ($(event.target).closest('.tooltip-click').length === 0) {
                    $('.tooltip-click').removeClass('on')
                }
            });
        };
        $(document).ready(function () {
            $.Lithium.tooltip();
        })
    </script>
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
            <h2 class="country_h2">선수 순위보기</h2>
            <div class="table_wrap">
                <div class="btn_base base_mar" style="float: left;">
                    <input type="button" onclick="" class="btn_excel bold" value="엑셀 출력">
                </div>
                <div class="selectArea float_r">
                    <!-- 국가 선택 -->
                    <div class="select_box mr10">
                        <select class="d_select" title="국가" style="width: 150px;">
                            <option value="" hidden>국가</option>
                            <option value="1">대한민국</option>
                            <option value="2">중국</option>
                            <option value="3">일본</option>
                        </select>
                    </div>
                    <!-- 종목 추후 앞에 순서 따라 보여주는 거 분류해야함  -->

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
                    <!-- 클릭 시 select 옵션 보내는 onclick 구현 예정 -->
                    <div class="search" style="width: 50px;">
                        <button type="submit" class="btn_search" title="검색"></a>
                    </div>
                </div>
            </div>
            <div class="tbl_area">
                <table width="100%" cellspacing="0" cellpadding="0" class="table table-hover team_table">
                    <colgroup>
                        <col style="width: 10%;">
                        <col style="width:15%;">
                        <col style="width:25%;">
                        <col style="width:20%;">
                        <col style="width:10%;">
                        <col style="width:10%;">
                        <col style="width:10%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)">순위</th>
                            <th onclick="sortTable(1)">국가</th>
                            <th onclick="sortTable(2)">이름</th>
                            <th onclick="sortTable(3)">출전 종목</th>
                            <th onclick="sortTable(4)">금</th>
                            <th onclick="sortTable(5)">은</th>
                            <th onclick="sortTable(6)">동</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>한국</td>
                            <td>권 산</td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">4</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">2</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">2</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>한국</td>
                            <td>권 산</td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">3</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">0</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">4</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>한국</td>
                            <td>권 산</td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">3</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">0</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">0</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>한국</td>
                            <td>권 산</td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">2</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">1</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">3</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>한국</td>
                            <td>권 산</td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">1</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">2</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">4</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>한국</td>
                            <td>권 산</td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">1</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">1</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">0</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>한국</td>
                            <td>권 산</td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">1</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">0</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">3</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>한국</td>
                            <td>권 산</td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">0</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">3</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">4</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>한국</td>
                            <td>권 산</td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">0</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">2</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">1</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>한국</td>
                            <td>권 산</td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">0</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">1</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
                            </td>
                            <td class="tooltip-container tooltip-interactive tooltip-bottom tooltip-click center">
                                <i class="tooltip-click-trigger">1</i>
                                <div class="tooltip">
                                    <div class="tooltip-description">세아는 정직, 열정, 실력을 핵심 가치로
                                        삼고 올바른 사람, 올바른 일터, 올바른 제품을 통하여 사람을 소중히 하고 풍요로운 삶에 기여합니다.</div>
                                </div>
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