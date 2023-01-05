<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="contents main-table">

            <div class="country_table space">
                <div class="team_tabs-content tab">
                    <table class="table table-hover team_table">
                        <h2 class="country_h2">경기 목록</h2>
                        <div class="selectArea float_l">
                            <div class="btn_base base_mar col_left">
                                <input type="button" onclick="" class="btn_excel bold" value="엑셀 출력" />
                            </div>
                        </div>
                        <div class="selectArea float_r">
                            <div class="select_box mr10">
                                <select class="d_select" title="경기종목 고유번호" style="width: 160px;">
                                    <option value="1">경기종목 고유번호</option>
                                    <option value="2">20230604</option>
                                    <option value="3">20230605</option>
                                    <option value="4">20230606</option>
                                    <option value="5">20230607</option>
                                </select>
                            </div>

                            <div class="select_box mr10">
                                <select class="d_select" title="경기종목 코드" style="width: 140px;">
                                    <option value="" hidden="">경기종목 코드</option>
                                    <option value="1">1111111</option>
                                    <option value="2">1212111</option>
                                </select>
                            </div>

                            <div class="select_box mr10">
                                <select class="d_select" title="구분" style="width: 172.667px;">
                                    <option value="" hidden="">종목</option>
                                    <option value="" disabled="">단거리달리기</option>
                                    <option value="1">100M</option>
                                    <option value="2">200M</option>
                                    <option value="3">400M</option>
                                    <option value="" disabled="">중/장거리</option>
                                    <option value="4">800M</option>
                                    <option value="5">1500M</option>
                                    <option value="6">3000M(여)</option>
                                    <option value="7">5000M</option>
                                    <option value="8">10000M(남)</option>
                                    <option value="9">3000M 장애물</option>
                                    <option value="" disabled="">허들달리기</option>
                                    <option value="10">100M 허들(여)</option>
                                    <option value="11">110M 허들(남)</option>
                                    <option value="12">400M 허들</option>
                                    <option value="" disabled="">점프경기</option>
                                    <option value="13">높이뛰기</option>
                                    <option value="14">장대높이뛰기</option>
                                    <option value="15">멀리뛰기</option>
                                    <option value="16">삼단뛰기</option>
                                    <option value="" disabled="">던지기</option>
                                    <option value="17">투포환</option>
                                    <option value="18">원반던지기</option>
                                    <option value="19">해머던지기</option>
                                    <option value="20">창던지기</option>
                                    <option value="" disabled="">종합</option>
                                    <option value="21">7종 경기</option>
                                    <option value="22">10종 경기</option>
                                    <option value="" disabled="">경보</option>
                                    <option value="23">10000M 경보</option>
                                    <option value="" disabled="">릴레이</option>
                                    <option value="24">4x100M 릴레이</option>
                                    <option value="25">4x400M 릴레이</option>
                                    <option value="26">4x400M 혼성</option>
                                </select>
                            </div>

                            <div class="search" style="width: 50px;">
                                <button type="submit" class="btn_search" title="검색">
                                </button>
                            </div>
                        </div>
                </div>
                <thead>
                    <tr>
                        <th scope="col">구분</th>
                        <th colspan="2" scope="col">경기종목 고유번호</th>
                        <th scope="col">경기종목 코드</th>
                        <th scope="col">경기종목 이름</th>
                        <th scope="col">경기종목 이름(한글)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">0</td>
                        <td colspan="2" scope="col">000001</td>
                        <td scope="col">123123</td>
                        <td scope="col">100m</td>
                        <td scope="col">100미터</td>
                    <tr>
                        <td scope="col">1</td>
                        <td colspan="2" scope="col">000101</td>
                        <td scope="col">1231234</td>
                        <td scope="col">200m</td>
                        <td scope="col">200미터</td>
                    </tr>
                    <tr>
                        <td scope="col">2</td>
                        <td colspan="2" scope="col">000011</td>
                        <td scope="col">1231235</td>
                        <td scope="col">400m</td>
                        <td scope="col">400미터</td>
                    </tr>
                </tbody>
                </table>
                <div class="selectArea float_r">
                    <div class="btn_base base_mar col_right">
                        <input class="btn_add btn_txt bold" type="button"
                            onclick="window.open('newsport.php','창 이름','width=900,height=512,location=no,status=no,scrollbars=yes')"
                            value="등록" class="btn_view">
                    </div>
                    <colgroup>
                        <col width="auto" />
                        <col width="auto" />
                        <col width="auto" />
                        <col width="auto" />
                        <col width="auto" />
                        <col width="auto" />
                    </colgroup>
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
    <footer>
        <p class="footer_text">
            Copyright © 2022, 20th Asian U20 Athletics Championships
            Yecheon. All rights reserved.
        </p>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>
