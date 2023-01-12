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
    <script type="text/javascript" src="js/onlynumber.js"></script>
    <script>
        function openTextFile() {
            var input = document.createElement("input");
            input.type = "file";
            input.accept = "text/plain"; // 확장자가 xxx, yyy 일때, ".xxx, .yyy"
            input.onchange = function (event) {
                processFile(event.target.files[0]);
            };
            input.click();
        }
        function processFile(file) {
            var reader = new FileReader();
            reader.onload = function () {
                let ddd = reader.result.split("\r\n");
                for (i = 0; i < ddd.length; i++) {
                    let k = ddd[i].split(" ")
                    let on = document.querySelector("#" + k[1]).children
                    on[5].firstElementChild.value = k[2]
                }
                rankcal1()
            };
            reader.readAsText(file, /* optional */ "utf-8");
        }
    </script>
    <title>U20</title>
</head>

<body>
    <!-- contents 본문 내용 -->
    <div class="container">
        <!-- class="contents something" -->
        <div class="something" style="padding: 100px 60px 60px 60px">
            <form action="#" method="post" class="form">
                <h3>경기 이름</h3>
                <div class="input_row">
                    <input placeholder="경기 이름" type="text" name="gamename" class="input_text" value="4x400mR(Mixed) 결승"
                        maxlength="16" required="" readonly />
                </div>
                <h3>심판 이름</h3>
                <div class="input_row">
                    <input placeholder="심판 이름" type="text" name="refereename" class="input_text" value="권 산"
                        maxlength="30" required="" readonly />
                </div>
                <h3>풍속</h3>
                <div class="input_row">
                    <input placeholder="풍속" type="text" name="wind" class="input_text" value="" maxlength="16"
                        required="" />
                </div>
                <div class="btn_base base_mar">
                    <h2 style="margin-bottom: 10px; float:left; margin-right: 30px;">결과</h2>
                    <input type="button" onclick="openTextFile()" class="btn_add bold" value="자동 입력">
                </div>
                <table cellspacing="0" cellpadding="0" class="team_table" style="border-top: 0px">
                    <thead>
                        <colgroup>
                            <col style="width: 7%" />
                            <col style="width: 7%" />
                            <col style="width: 15%;" />
                            <col style="width: 15%" />
                            <col style="width: 13%" />
                            <col style="width: 20%" />
                            <col style="width: 13%" />
                            <col style="width: 10%" />
                        </colgroup>
                        <tr>
                            <th style="background: none">등수</th>
                            <th style="background: none">레인</th>
                            <th style="background: none">이름</th>
                            <th style="background: none;">국가</th>
                            <th style="background: none">경기 통과 여부</th>
                            <th style="background: none">경기 결과</th>
                            <th style="background: none">비고</th>
                            <th style="background: none">신기록</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="rane1">
                            <td>
                                <input type="number" name="rank" id="rank" class="input_text" value="" min="1" max="12"
                                    required="" />
                            </td>
                            <td>
                                <input type="number" name="rain" class="input_text" value="1" min="1" max="12"
                                    required="" readonly />
                            </td>
                            <td>
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="권 산"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="권 산"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="권 산"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="권 산"
                                    maxlength="30" required="" readonly />
                            </td>
                            <td>
                                <input placeholder="소속" type="text" name="division" class="input_text" value="대한한국"
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 통과 여부" type="text" name="gamepass" class="input_text" value=""
                                    maxlength="50" required="" />
                            </td>
                            <td >
                                <div style="display:inline-flex; align-items: center;">
                                <div style="border-right:1px solid #ddd; width:50%;">
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: 80px; padding-right: 5px; margin-bottom: 10px;" />
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: 80px; padding-right: 5px; margin-bottom: 10px;" />
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: 80px; padding-right: 5px; margin-bottom: 10px;" />
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: 80px; padding-right: 5px" />
                                </div>
                                <div style="width:50%; padding-left:10px">
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: 80px; padding-right: 5px" />
                                </div>
                                </div>
                            </td>
                            <td>
                                <input placeholder="비고" type="text" name="bigo" class="input_text" value=""
                                    maxlength="100" />
                            </td>
                            <td>
                                <select>
                                    <option>해당없음</option>
                                    <option>대회신기록</option>
                                    <option>아시아신기록</option>
                                    <option>아시아U20신기록</option>
                                    <option>세계U20신기록</option>
                                    <option>세계신기록</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="rane2">
                            <td>
                                <input type="number" name="rank" id="rank" class="input_text" value="" min="1" max="12"
                                    required="" />
                            </td>
                            <td>
                                <input type="number" name="rain" class="input_text" value="2" min="1" max="12"
                                    required="" readonly />
                            </td>
                            <td>
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="임지훈"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="임지훈"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="임지훈"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="임지훈"
                                    maxlength="30" required="" readonly />
                            </td>
                            <td>
                                <input placeholder="소속" type="text" name="division" class="input_text" value="대한한국"
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 통과 여부" type="text" name="gamepass" class="input_text" value=""
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="비고" type="text" name="bigo" class="input_text" value=""
                                    maxlength="100" />
                            </td>
                            <td>
                                <select>
                                    <option>해당없음</option>
                                    <option>대회신기록</option>
                                    <option>아시아신기록</option>
                                    <option>아시아U20신기록</option>
                                    <option>세계U20신기록</option>
                                    <option>세계신기록</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="rane3">
                            <td>
                                <input type="number" name="rank" id="rank" class="input_text" value="" min="1" max="12"
                                    required="" />
                            </td>
                            <td>
                                <input type="number" name="rain" class="input_text" value="3" min="1" max="12"
                                    required="" readonly />
                            </td>
                            <td>
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="천효민"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="천효민"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="천효민"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="천효민"
                                    maxlength="30" required="" readonly />
                            </td>
                            <td>
                                <input placeholder="소속" type="text" name="division" class="input_text" value="대한한국"
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 통과 여부" type="text" name="gamepass" class="input_text" value=""
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="비고" type="text" name="bigo" class="input_text" value=""
                                    maxlength="100" />
                            </td>
                            <td>
                                <select>
                                    <option>해당없음</option>
                                    <option>대회신기록</option>
                                    <option>아시아신기록</option>
                                    <option>아시아U20신기록</option>
                                    <option>세계U20신기록</option>
                                    <option>세계신기록</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="rane4">
                            <td>
                                <input type="number" name="rank" id="rank" class="input_text" value="" min="1" max="12"
                                    required="" />
                            </td>
                            <td>
                                <input type="number" name="rain" class="input_text" value="4" min="1" max="12"
                                    required="" readonly />
                            </td>
                            <td>
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="이은비"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="이은비"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="이은비"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="이은비"
                                    maxlength="30" required="" readonly />
                            </td>
                            <td>
                                <input placeholder="소속" type="text" name="division" class="input_text" value="대한한국"
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 통과 여부" type="text" name="gamepass" class="input_text" value=""
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="비고" type="text" name="bigo" class="input_text" value=""
                                    maxlength="100" />
                            </td>
                            <td>
                                <select>
                                    <option>해당없음</option>
                                    <option>대회신기록</option>
                                    <option>아시아신기록</option>
                                    <option>아시아U20신기록</option>
                                    <option>세계U20신기록</option>
                                    <option>세계신기록</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="rane5">
                            <td>
                                <input type="number" name="rank" id="rank" class="input_text" value="" min="1" max="12"
                                    required="" />
                            </td>
                            <td>
                                <input type="number" name="rain" class="input_text" value="5" min="1" max="12"
                                    required="" readonly />
                            </td>
                            <td>
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="김조은"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="김조은"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="김조은"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="김조은"
                                    maxlength="30" required="" readonly />
                            </td>
                            <td>
                                <input placeholder="소속" type="text" name="division" class="input_text" value="대한한국"
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 통과 여부" type="text" name="gamepass" class="input_text" value=""
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="비고" type="text" name="bigo" class="input_text" value=""
                                    maxlength="100" />
                            </td>
                            <td>
                                <select>
                                    <option>해당없음</option>
                                    <option>대회신기록</option>
                                    <option>아시아신기록</option>
                                    <option>아시아U20신기록</option>
                                    <option>세계U20신기록</option>
                                    <option>세계신기록</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="rane6">
                            <td>
                                <input type="number" name="rank" id="rank" class="input_text" value="" min="1" max="12"
                                    required="" />
                            </td>
                            <td>
                                <input type="number" name="rain" class="input_text" value="6" min="1" max="12"
                                    required="" readonly />
                            </td>
                            <td>
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="최민정"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="최민정"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="최민정"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="최민정"
                                    maxlength="30" required="" readonly />
                            </td>
                            <td>
                                <input placeholder="소속" type="text" name="division" class="input_text" value="대한한국"
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 통과 여부" type="text" name="gamepass" class="input_text" value=""
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="비고" type="text" name="bigo" class="input_text" value=""
                                    maxlength="100" />
                            </td>
                            <td>
                                <select>
                                    <option>해당없음</option>
                                    <option>대회신기록</option>
                                    <option>아시아신기록</option>
                                    <option>아시아U20신기록</option>
                                    <option>세계U20신기록</option>
                                    <option>세계신기록</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="rane7">
                            <td>
                                <input type="number" name="rank" id="rank" class="input_text" value="" min="1" max="12"
                                    required="" />
                            </td>
                            <td>
                                <input type="number" name="rain" class="input_text" value="7" min="1" max="12"
                                    required="" readonly />
                            </td>
                            <td>
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="김민지"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="김민지"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="김민지"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="김민지"
                                    maxlength="30" required="" readonly />
                            </td>
                            <td>
                                <input placeholder="소속" type="text" name="division" class="input_text" value="대한한국"
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 통과 여부" type="text" name="gamepass" class="input_text" value=""
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="비고" type="text" name="bigo" class="input_text" value=""
                                    maxlength="100" />
                            </td>
                            <td>
                                <select>
                                    <option>해당없음</option>
                                    <option>대회신기록</option>
                                    <option>아시아신기록</option>
                                    <option>아시아U20신기록</option>
                                    <option>세계U20신기록</option>
                                    <option>세계신기록</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="rane8">
                            <td>
                                <input type="number" name="rank" id="rank" class="input_text" value="" min="1" max="12"
                                    required="" />
                            </td>
                            <td>
                                <input type="number" name="rain" class="input_text" value="8" min="1" max="12"
                                    required="" readonly />
                            </td>
                            <td>
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="황근원"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="황근원"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="황근원"
                                    maxlength="30" required="" readonly style="margin-bottom: 10px;" />
                                <input placeholder="선수 이름" type="text" name="playername" class="input_text" value="황근원"
                                    maxlength="30" required="" readonly />
                            </td>
                            <td>
                                <input placeholder="소속" type="text" name="division" class="input_text" value="대한한국"
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 통과 여부" type="text" name="gamepass" class="input_text" value=""
                                    maxlength="50" required="" />
                            </td>
                            <td>
                                <input placeholder="경기 결과" type="text" name="gameresult" id="result" class="input_text"
                                    value="" maxlength="8" required="" onkeyup="trackFinal(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="비고" type="text" name="bigo" class="input_text" value=""
                                    maxlength="100" />
                            </td>
                            <td>
                                <select>
                                    <option>해당없음</option>
                                    <option>대회신기록</option>
                                    <option>아시아신기록</option>
                                    <option>아시아U20신기록</option>
                                    <option>세계U20신기록</option>
                                    <option>세계신기록</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h3>경기 비고</h3>
                <div class="input_row">
                    <input placeholder="비고" type="text" name="gamepass" class="input_text" value="" maxlength="100" />
                </div>
                <div class="signup_submit">
                    <button type="submit" class="btn_login" name="addresult">
                        <span>확인</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>