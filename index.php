<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--style.css-->
        <link rel="stylesheet" href="css/style.css" />
        <!--Font Awesome-->
        <link rel="stylesheet" href="fontawesome/css/all.min.css" />
        <script src="fontawesome/js/all.min.js"></script>
        <!-- Data Tables -->
        <link
            rel="stylesheet"
            type="text/css"
            href="DataTables/datatables.css"
        />
        <script src="js/jquery-3.2.1.min.js"></script>
        <script
            type="text/javascript"
            charset="utf8"
            src="DataTables/datatables.js"
        ></script>
        <script type="text/javascript" src="js/useDataTables.js"></script>
        <title>U20</title>
    </head>

    <body>
        <!-- header -->
        <?php include 'header.php' ?>

        <!-- sidebar -->
        <?php include 'sidebar.php' ?>

        <!-- contents 본문 내용 -->
        <div class="container">
            <div class="contents main-table">
                <!-- 국가 별 순위 -->
                <div class="country_table space">
                    <div class="team_tabs-content tab">
                        <table
                            class="table table-hover team_table"
                            id="nation_rank"
                        >
                            <h2 class="country_h2">국가랭킹</h2>
                            <!-- <div
                                style="
                                    display: flex;
                                    align-items: center;
                                    margin-bottom: -30px;
                                "
                            >
                                <p>페이지당</p>
                                <div
                                    class="select_box mr10"
                                    style="height: 25px; z-index: 9999"
                                >
                                    <select
                                        class="d_select"
                                        title="num"
                                        style="
                                            width: 4em;
                                            height: 25px;
                                            margin-top: -10px;
                                        "
                                    >
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <p>개씩 보기</p>
                            </div> -->
                            <colgroup>
                                <col width="auto" />
                                <col width="auto" />
                                <col width="auto" />
                                <col width="auto" />
                                <col width="auto" />
                                <col width="auto" />
                            </colgroup>
                            <thead class="country_lank">
                                <tr>
                                    <th scope="col">순위</th>
                                    <th scope="col">국가</th>
                                    <th scope="col">금</th>
                                    <th scope="col">은</th>
                                    <th scope="col">동</th>
                                    <th scope="col">합계</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col">KOREA</td>
                                    <td scope="col">10</td>
                                    <td scope="col">8</td>
                                    <td scope="col">7</td>
                                    <td scope="col">25</td>
                                </tr>
                                <tr>
                                    <td scope="col">2</td>
                                    <td scope="col">INDIA</td>
                                    <td scope="col">7</td>
                                    <td scope="col">6</td>
                                    <td scope="col">4</td>
                                    <td scope="col">17</td>
                                </tr>
                                <tr>
                                    <td scope="col">3</td>
                                    <td scope="col">JAPAN</td>
                                    <td scope="col">6</td>
                                    <td scope="col">6</td>
                                    <td scope="col">3</td>
                                    <td scope="col">15</td>
                                </tr>
                                <tr>
                                    <td scope="col">4</td>
                                    <td scope="col">INDONESIA</td>
                                    <td scope="col">5</td>
                                    <td scope="col">5</td>
                                    <td scope="col">4</td>
                                    <td scope="col">14</td>
                                </tr>
                                <tr>
                                    <td scope="col">5</td>
                                    <td scope="col">SAUDI ARABIA</td>
                                    <td scope="col">5</td>
                                    <td scope="col">3</td>
                                    <td scope="col">2</td>
                                    <td scope="col">10</td>
                                </tr>
                                <tr>
                                    <td scope="col">6</td>
                                    <td scope="col">CHINA</td>
                                    <td scope="col">4</td>
                                    <td scope="col">2</td>
                                    <td scope="col">1</td>
                                    <td scope="col">7</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- </div> -->
                    </div>
                    <!-- 국가 랭킹 페이징 
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
                </div> -->

                    <!-- 선수 별 순위 -->

                    <div class="team_tabs-content tab">
                        <table
                            class="table table-hover team_table"
                            id="player_rank"
                        >
                            <h2 class="country_h2">선수 랭킹</h2>
                            <colgroup>
                                <col width="auto" />
                                <col width="auto" />
                                <col width="auto" />
                                <col width="auto" />
                                <col width="auto" />
                                <col width="auto" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">순위</th>
                                    <th scope="col">선수</th>
                                    <th scope="col">금</th>
                                    <th scope="col">은</th>
                                    <th scope="col">동</th>
                                    <th scope="col">합계</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="col">1</td>
                                    <td scope="col">홍길동</td>
                                    <td scope="col">5</td>
                                    <td scope="col">3</td>
                                    <td scope="col">2</td>
                                    <td scope="col">10</td>
                                </tr>
                                <tr>
                                    <td scope="col">2</td>
                                    <td scope="col">김기자</td>
                                    <td scope="col">3</td>
                                    <td scope="col">3</td>
                                    <td scope="col">2</td>
                                    <td scope="col">8</td>
                                </tr>
                                <tr>
                                    <td scope="col">3</td>
                                    <td scope="col">이비즈</td>
                                    <td scope="col">3</td>
                                    <td scope="col">2</td>
                                    <td scope="col">2</td>
                                    <td scope="col">7</td>
                                </tr>
                                <tr>
                                    <td scope="col">4</td>
                                    <td scope="col">아시즈</td>
                                    <td scope="col">2</td>
                                    <td scope="col">2</td>
                                    <td scope="col">3</td>
                                    <td scope="col">5</td>
                                </tr>
                                <tr>
                                    <td scope="col">5</td>
                                    <td scope="col">호시타 사이타마</td>
                                    <td scope="col">2</td>
                                    <td scope="col">1</td>
                                    <td scope="col">1</td>
                                    <td scope="col">4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- 선수 랭킹 페이징 
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
                --></div>
            </div>
        </div>

        <!-- footer -->
        <?php include 'footer.php'; ?>
        <!-- sidebar js -->
        <script src="js/main.js"></script>
    </body>
</html>
