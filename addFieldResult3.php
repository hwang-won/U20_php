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
                    <input placeholder="경기 이름" type="text" name="gamename" class="input_text" value="멀리뛰기"
                        maxlength="16" required="" readonly />
                </div>
                <h3>심판 이름</h3>
                <div class="input_row">
                    <input placeholder="심판 이름" type="text" name="refereename" class="input_text" value="권 산"
                        maxlength="30" required="" readonly />
                </div>
                <h3 style="margin-bottom: 10px">결과</h3>
                <table cellspacing="0" cellpadding="0" class="team_table" style="border-top: 0px">
                    <colgroup>
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 9%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 5%" />
                        <col style="width: 10%" />
                        <col style="width: 11%" />

                    </colgroup>
                    <thead>
                        <tr id="col1">
                            <th style="background: none" rowspan="2" >등수</th>
                            <th style="background: none" rowspan="2">순서</th>
                            <th style="background: none" rowspan="2">이름</th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" rowspan="2">기록</th>
                            <th style="background: none">비고</th>
                            
                        </tr>
                        <tr id="col2">
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none" ><input placeholder="높이" type="text" name="trial[]" class="input_trial" id="trial" value=""
                            maxlength="4" required="" onkeyup="highFormat(this)"></th>
                            <th style="background: none">신기록</th>
                        </tr>
                    </thead>
                    <tbody id="body">
                        <tr id="col1">
                            <td rowspan="2"><input type="number" name="rank[]" class="input_text" id="rank" value="2"
                                    min="1" max="12" required="" /></td>
                            <td rowspan="2"><input type="number" name="rain[]" class="input_text" value="1" min="1"
                                    max="12" required="" readonly />
                            </td>
                            <td rowspan="2"><input placeholder="선수 이름" type="text" name="playername[]" class="input_text"
                                    value="권 산" maxlength="30" required="" readonly /></td>
                            <td>
                                <input placeholder="" type="text" name="gameresult1[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult2[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult3[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult4[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult5[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult6[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult7[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult8[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult9[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult10[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult11[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult12[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td rowspan="2">
                                <input placeholder="" id="result" type="text" name="gameresult[]" class="input_text"
                                    value="" maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" readonly/>
                            </td>
                            <td><input placeholder="비고" type="text" name="bigo" class="input_text" value=""
                                    maxlength="100" /></td>
                        <tr id="col2">
                            <td>
                                <input placeholder="" type="text" name="gameresult13[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult14[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult15[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult16[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult17[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                            </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult18[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                                </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult19[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                                </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult20[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                                </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult21[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                                </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult22[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                                </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult23[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
                                </td>
                            <td>
                                <input placeholder="" type="text" name="gameresult24[]" class="input_text" value=""
                                    maxlength="5" required="" onkeyup="field2Format(this)"
                                    style="float: left; width: auto; padding-right: 5px" />
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