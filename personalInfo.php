<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="Shortcut Icon" type="image/x-icon" href="/CKTU/images/icon.png" />
    <title>最佳評價、購物網站</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/CKTU/css/default.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin: 10px auto">
        <div class="shadow p-3 mb-5 bg-white rounded" style="padding:2.5rem!important">
            <h1>個人基本資料</h1>
            <hr>
            <form action="./situationPage.php" method="post">
                <div class="form-group row">
                    <label for="age" style="width:180px" class=" col-form-label">年齡</label>
                    <select class="form-control" style="max-width: 100px" name="age" id="age" required>
                        <option selected disabled hidden>年齡</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label style="width:180px" class=" col-form-label">您的性別是：</label>
                    <div class=" row col-form-label">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="0" required>
                            <label class="form-check-label" for="male">
                                男
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="1">
                            <label class="form-check-label" for="female">
                                女
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label style="width:180px" class=" col-form-label">教育程度：</label>
                    <div class=" row col-form-label">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="education" id="education0" value="0" required>
                            <label class="form-check-label" for="education0">
                                高中以下
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="education" id="education1" value="1">
                            <label class="form-check-label" for="education1">
                                高中
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="education" id="education2" value="2">
                            <label class="form-check-label" for="education2">
                                大學
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="education" id="education3" value="3">
                            <label class="form-check-label" for="education3">
                                大學以上
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label style="width:180px" class=" col-form-label">網購次數(每週)：</label>
                    <div class=" row col-form-label">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="freq" id="freq0" value="0" required>
                            <label class="form-check-label" for="freq0">
                                0次
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="freq" id="freq1" value="1">
                            <label class="form-check-label" for="freq1">
                                1-3次
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="freq" id="freq2" value="2">
                            <label class="form-check-label" for="freq2">
                                4-6次
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="freq" id="freq3" value="3">
                            <label class="form-check-label" for="freq3">
                                7次以上
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label style="width:180px" class=" col-form-label">上網時數(每天)：</label>
                    <div class=" row col-form-label">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="time" id="time0" value="0" required>
                            <label class="form-check-label" for="time0">
                                0-3小時
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="time" id="time1" value="1">
                            <label class="form-check-label" for="time1">
                                4-6小時
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="time" id="time2" value="2">
                            <label class="form-check-label" for="time2">
                                7-10小時
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="time" id="time3" value="3">
                            <label class="form-check-label" for="time3">
                                11小時以上
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label style="width:180px" class=" col-form-label">網購金額(平均每次)：</label>
                    <div class=" row col-form-label">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="money" id="money0" value="0" required>
                            <label class="form-check-label" for="money0">
                                0元
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="money" id="money1" value="1">
                            <label class="form-check-label" for="money1">
                                1,000元以下
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="money" id="money2" value="2">
                            <label class="form-check-label" for="money2">
                                1,000-3,000元
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="money" id="money3" value="3">
                            <label class="form-check-label" for="money3">
                                3,000-5,000元
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="money" id="money4" value="4">
                            <label class="form-check-label" for="money4">
                                5,000元以上
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label style="width:180px" class=" col-form-label">每月收入(零用錢)：</label>
                    <div class=" row col-form-label">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="income" id="income0" value="0" required>
                            <label class="form-check-label" for="income0">
                                20,000元以下
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="income" id="income1" value="1">
                            <label class="form-check-label" for="income1">
                                20,001-35,000元
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="income" id="income2" value="2">
                            <label class="form-check-label" for="income2">
                                50,000元以上
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label style="width:450px" class=" col-form-label">對網路活動(例如：購物；社群；資訊搜尋等)的熟悉程度：</label>
                    <div class=" row col-form-label">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="familiar" id="familiar0" value="0" required>
                            <label class="form-check-label" for="familiar0">
                                完全不熟悉
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="familiar" id="familiar1" value="1">
                            <label class="form-check-label" for="familiar1">
                                有點熟悉
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="familiar" id="familiar2" value="2">
                            <label class="form-check-label" for="familiar2">
                                普通熟悉
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="familiar" id="familiar3" value="3">
                            <label class="form-check-label" for="familiar3">
                                很熟悉
                            </label>
                        </div>
                        &emsp;
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="familiar" id="familiar4" value="4">
                            <label class="form-check-label" for="familiar4">
                                非常熟悉
                            </label>
                        </div>
                    </div>
                </div>




                <div class="form-group row">
                    <button type="submit" class="btn btn-success">開始測驗</button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>