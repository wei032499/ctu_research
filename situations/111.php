<!--享樂品、豐富度低、一致性低-->
<!--https://play.google.com/store/apps/details?id=com.linecorp.LGPKPK-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta http-equiv="Content-Language" content="zh-TW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="Shortcut Icon" type="image/x-icon" href="/CKTU/images/icon.png" />
    <title>最佳評價、購物網站</title>
    <link rel="stylesheet" href="/CKTU/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CKTU/css/default.css">
    <script src="/CKTU/js/jquery-3.4.1.min.js"></script>
    <script src="/CKTU/js/popper.min.js"></script>
    <script src="/CKTU/js/bootstrap.min.js"></script>
</head>
<script>
    function start() {
        $('#storyModal').modal({
            show: true,
            keyboard: false,
            backdrop: 'static'
        })
        $('.container').addClass("show");
        window.scrollTo(0, 0);
    }
</script>

<body class="bg-light" onload="start()">
    <!-- Modal -->
    <div class="modal " id="storyModal" tabindex="-1" role="dialog" aria-labelledby="storyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="storyModalLabel">情境故事</h5>
                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </div>
                <div class="modal-body">
                    你想買一款線上遊戲已經很久了，但是礙於課業/工作忙碌，始終沒有時間好好的研究，趁著剛好有空的這個時候，上網搜尋了一下產品資訊與網友的意見，這時你看到一款不錯的線上遊戲。
                </div>
                <div class="modal-footer">
                    <!--secondary-->
                    <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#startQ" onclick="$('#startQ').modal('handleUpdate')">下一頁</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="startQ" tabindex="-1" role="dialog" aria-labelledby="startQLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="startQLabel">情境故事</h5>
                </div>
                <form id="startForm" action="/CKTU/finish.php">
                    <input name="question" value="0" style="visibility: hidden" required>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="startQ1">1. 我知道許多線上遊戲的產品種類</label>
                            <div id="startQ1" class="d-flex justify-content-center">
                                <div style="margin-right:auto">非常同意</div>
                                <div style="display: flex;">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ1" id="startQ1_1" value="6" required>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ1" id="startQ1_2" value="5">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ1" id="startQ1_3" value="4">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ1" id="startQ1_4" value="3">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ1" id="startQ1_5" value="2">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ1" id="startQ1_6" value="1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ1" id="startQ1_7" value="0">
                                    </div>
                                </div>
                                <div style="margin-left:auto">非常不同意</div>
                            </div>
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="startQ2">2. 對我而言，選購一款線上遊戲將不會花費太多時間</label>
                            <div id="startQ2" class="d-flex justify-content-center">
                                <div style="margin-right:auto">非常同意</div>
                                <div style="display: flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ2" id="startQ2_1" value="6" required>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ2" id="startQ2_2" value="5">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ2" id="startQ2_3" value="4">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ2" id="startQ2_4" value="3">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ2" id="startQ2_5" value="2">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ2" id="startQ2_6" value="1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ2" id="startQ2_7" value="0">
                                    </div>
                                </div>
                                <div style="margin-left:auto">非常不同意</div>
                            </div>
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="startQ3">3. 我大致瞭解不同線上遊戲之間的差異</label>
                            <div id="startQ3" class="d-flex justify-content-center">
                                <div style="margin-right:auto">非常同意</div>
                                <div style="display: flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ3" id="startQ3_1" value="6" required>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ3" id="startQ3_2" value="5">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ3" id="startQ3_3" value="4">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ3" id="startQ3_4" value="3">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ3" id="startQ3_5" value="2">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ3" id="startQ3_6" value="1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ3" id="startQ3_7" value="0">
                                    </div>
                                </div>
                                <div style="margin-left:auto">非常不同意</div>
                            </div>
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="startQ4">4. 我曾經選購過線上遊戲</label>
                            <div id="startQ4" class="d-flex justify-content-center">
                                <div style="margin-right:auto">非常同意</div>
                                <div style="display: flex">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ4" id="startQ4_1" value="6" required>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ4" id="startQ4_2" value="5">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ4" id="startQ4_3" value="4">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ4" id="startQ4_4" value="3">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ4" id="startQ4_5" value="2">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ4" id="startQ4_6" value="1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="startQ4" id="startQ4_7" value="0">
                                    </div>
                                </div>
                                <div style="margin-left:auto">非常不同意</div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="確定">
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $("#startForm").submit(function(e) {

            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data) {
                    if (data != "")
                        alert(data); // show response from the php script.
                    else {
                        $('#startQ').modal('hide');
                        alert("請開始閱讀情境");
                    }
                }
            });

            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    </script>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #689f38;box-shadow: 0 2px 4px rgba(0,0,0,0.1);/*position:sticky;top:0;z-index:2000*/">
        <a class="navbar-brand" href="#" style="background: #689f38;">
            <img src="/CKTU/images/icon.png" style="height: 45px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        分類
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"></a>
                    </div>
                </li>
                <li style="border: 1px solid rgba(255,255,255,0.7)"></li>
                <li class="nav-item active" style="margin: 0px 10px">
                    <a class="nav-link" href="#">首頁 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">熱門排行榜</a>
                </li>

            </ul>
        </div>
    </nav>




    <div class="container" style="margin: 10px auto">
        <div class="shadow p-3 mb-5 bg-white rounded" style="padding:2.5rem!important">

            <section class="col">
                <!--<div id="titleImg" style="width: 50%">
        <img id="imgblock" src="//via.placeholder.com/600x400?text=2" style="width: 95%" />
    </div>-->
                <div style="display: flex;flex-direction:row">
                    <div id="titleImg" style="width: 40%">
                        <img id="imgblock" src="https://p2.bahamut.com.tw/B/ACG/c/80/0000084580.PNG" style="width: 90%" />
                    </div>
                    <div style="width: 100%">
                        <div style="display: flex;flex-direction:row">
                            <div id="titleImg2" style="width: 100%;display:none">
                                <img id="imgblock" src="https://p2.bahamut.com.tw/B/ACG/c/80/0000084580.PNG" style="width: 90%" />
                            </div>
                            <div style="margin: 5px auto 5px 25px ">
                                <h1>地下城物語(G&D)</h1>
                                <div style="display:flex;flex-direction:row">
                                    <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;">
                                    </div>
                                    <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;">
                                    </div>
                                    <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;">
                                    </div>
                                    <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;">
                                    </div>
                                    <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;">
                                    </div>
                                    <span id="count">88,609</span>
                                    <div style="width:16px;height:16px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAW0lEQVR4AWP4TwBSTQEIlAuUbyj/D4QbygWwK1gAlITABdgVHIArOECmggC4ggBMBRAlBuUNQGgAE8VU4ACBmApAejfALIB61QBVwQeoBAJ+QFXwHxNSLy4IQAD87f8pWI1e0gAAAABJRU5ErkJggg==);"></div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div style="display: flex; flex-direction:row">
                            <ul class="">
                                <li>主機平台：<a class="" href="/?p=Android">Android</a></li>
                                <li>遊戲類型：<a href="index.php?t=1&amp;p=Android&amp;k=%E8%A7%92%E8%89%B2%E6%89%AE%E6%BC%94" target="_blank">角色扮演</a></li>
                                <li>發售日期：2016-08-19</li>

                            </ul>
                            <ul>
                                <li>遊戲售價：免費含付費項目</li>
                                <li>遊戲人數：1人</li>
                                <li>作品分級：12歲以上</li>
                            </ul>
                        </div>
                        <div>
                            <ul class="">
                                <li>製作廠商：<a href="//acg.gamer.com.tw/search.php?st=1&amp;kw=%E5%BB%88%E9%96%80%E9%9D%92%E7%93%B7%E6%95%B8%E7%A2%BC%E6%8A%80%E8%A1%93%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8" target="_blank">廈門青瓷數碼技術有限公司</a>
                                    <p style="float:right; font-size:12px; text-align:center; background-color:#FFFFFF; border:1px solid #e5e5e5; margin-top:-1px;"><img src="https://chart.googleapis.com/chart?chs=180x180&amp;cht=qr&amp;chl=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.qcplay.slimegogogo%26referrer%3Dutm_source%253Dgamer.com.tw%2526utm_campaign%253Dacgdb&amp;choe=UTF-8&amp;chld=L%7C2" width="82" height="82"><br>掃描安裝</p>
                                </li>
                                <li>發行廠商：<a href="//acg.gamer.com.tw/search.php?st=1&amp;kw=" target="_blank"></a></li>
                                <li>代理廠商：<a href="//acg.gamer.com.tw/search.php?st=1&amp;kw=%E8%97%8D%E9%B5%B2%E6%95%B8%E4%BD%8D%E5%A8%9B%E6%A8%82%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8" target="_blank">藍鵲數位娛樂有限公司</a></li>
                                <li>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td valign="top">Play 商店：</td>
                                                <td><a href="//ref.gamer.com.tw/redir.php?url=https%3A%2F%2Fplay.google.com%2Fstore%2Fapps%2Fdetails%3Fid%3Dcom.qcplay.slimegogogo%26referrer%3Dutm_source%253Dgamer.com.tw%2526utm_campaign%253Dacgdb" target="_blank">https://play.google.com/store/apps/detai...</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--carousel-->
                <section>
                    <div class="container-fluid" style="padding: 0px">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox" style="height: 300px">
                                <div class="carousel-item  active" style="width: auto;padding:5px">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 1" class="thumb">
                                                <img style="height: 300px" class="img-fluid mx-auto d-block" src="https://i.ytimg.com/vi/RTcUDKoOWTM/hqdefault.jpg" alt="slide 1" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 3" class="thumb">
                                                <img style="height: 300px" class="img-fluid mx-auto d-block" src="https://lh3.googleusercontent.com/9Q_4Ljl_oEOP4BnYXLjita4cBT1XY_1Mi9yGJPSsrwQed5rS-hWaWeoWGJ0v94XMBg=w720-h310" alt="slide 2" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 4" class="thumb">
                                                <img style="height: 300px" class="img-fluid mx-auto d-block" src="https://lh3.googleusercontent.com/5DPRe6hqiulcb6uPybVNlEEvR2824r1pn072CNvBiBH6V_1MZm8QYZnZIZcTZjtqyTs=w720-h310" alt="slide 3" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 5" class="thumb">
                                                <img style="height: 300px" class="img-fluid mx-auto d-block" src="https://lh3.googleusercontent.com/FoN5drJm_lTgW7rAGxa1DujfNJs7Zo3UWl7eacTr5l_9r-AF4MVHf9oUdqkgadgTRwU=w720-h310" alt="slide 4" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 6" class="thumb">
                                                <img style="height: 300px" class="img-fluid mx-auto d-block" src="https://lh3.googleusercontent.com/JyxxokH8TqpIjF473Xak8mxNYpZwWcnOKJyL4deeMvtjO2zWqbYCsmgDfqp-dIODHek=w720-h310" alt="slide 5" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 7" class="thumb">
                                                <!--//via.placeholder.com/600x400?text=6-->
                                                <img style="height: 300px" class="img-fluid mx-auto d-block" src="https://lh3.googleusercontent.com/6zfBDMn7Yk8wpkxafWHbylcWbrevwvM6ky6uz4zhh_tcRrkBJovGjTqojYA0q6MkKqc=w720-h310" alt="slide 6" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev" style="background:white;width: 50px;">
                                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-image: url(&quot;data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e&quot;);"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next" style="background:white;width: 50px;">
                                <span class="carousel-control-next-icon" aria-hidden="true" style="background-image: url(&quot;data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e&quot;);"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </section>
                <hr />

                <div id="gamecontent" style="overflow-x: auto;overflow-y: hidden">
                    ※※※ 三週年慶典特別企劃 ※※※<br>☆ 大改版！全新迷宮、岡布奧、命運之鏈、彩蛋釋出<br>☆ 慶典限定！地圖彩蛋、登入獎勵、收集活動開跑<br>☆ 新手天堂！全新伺服器全球聯合營運，首度開放！<br>☆ 有血有肉的岡布奧們——全新關卡解鎖漫畫公開<br>☆ 88岡布奧節元年正式誕生！全球聯歡活動登場<br><br>超簡單，卻讓人忍不住一直玩！三年來多次獲得商店推薦的無VIP手遊《地下城物語》，在這裡玩家不再扮演人類勇者，而是先天弱小、卻仍奮力擺脫肥料命運的怪物「岡布奧」。一場遭逢勇者無情獵殺的危機，意外開啟了岡布奧一系列精彩絕倫的地下迷宮冒險之旅。<br><br>以Roguelike為核心玩法，在迷宮中透過翻開磚塊遭遇各種事件與魔物，《地下城物語》用簡單好上手的操作方式，引領玩家深入體驗原創故事各項奇幻、科幻、惡搞等經典元素。除了挑戰玩家的即時策略能力，腦洞大開的搞怪彩蛋，更屢屢讓玩家拍案叫絕！此外由於伺服器為全球共通，隨時可能與世界各地玩家短兵相接，也為這場冒險旅程投入更多不可預期的刺激變數。<br><br>【 遊戲特色 】<br>★ 超過200種的岡布奧，各有奇才，沒有廢材！<br>★ 超過20種的主題迷宮，遊戲規則通通不一樣<br>★ 超過100萬字的精彩故事，有笑有淚有燃點<br>★ 數不清的隱藏關卡與彩蛋，笑點滿滿的惡趣味<br>★ 從地下城打到天空戰，與世界各地玩家交戰鬥智<br>★ 隨時可以喊卡保存進度，直接關掉遊戲也不用怕<br>★ 沒有任何VIP特權系統！愛怎麼玩、就怎麼玩<br><br><br>「最開始的感動，最單純的快樂」，三年來，我們的初衷始終如一。Just enjoy it!<br><br>【 支援 &amp; 協助 】<br>● 已登入遊戲：遊戲地圖右上角「系統設定」(齒輪圖標) ▶ 選擇「遊戲幫助」 ▶ 選擇右上「新對話」。<br>● 未登入遊戲：請使用電子郵件 hmgame.tw@gmail.com 聯絡客服，並請附上「UID」與「角色暱稱」。<br><br>【 論壇 &amp; 攻略 】<br>● 中　文：https://goo.gl/FByiUA<br>● English：https://goo.gl/ecChhs<br><br>【 服務 &amp; 隱私條款 】<br>https://sdk.hmgame.com.tw/agreement?tdsourcetag=s_pcqq_aiomsg<br><br>※ 本軟體因涉及暴力情節，依遊戲軟體分級管理辦法分類為輔12級。<br>※ 本遊戲為免費使用，遊戲內另提供購買虛擬遊戲幣、物品等付費服務。<br>※ 請注意遊戲時間，避免沉迷。
                </div>
                <div id="showcontent_button" style="color:green;margin: auto;width: max-content;cursor:pointer" onclick="showcontent()">閱讀完整內容</div>
                <div id="hidecontent_button" style="color:green;margin: auto;width: max-content;cursor:pointer" onclick="collapse()">收合</div>
                <script>
                    function collapse() {
                        if ($("#gamecontent").height() > 300) {
                            $("#gamecontent").height(300);
                        }
                        $("#hidecontent_button").hide();
                        $("#showcontent_button").show();
                    }

                    function showcontent() {
                        $("#gamecontent").height("");
                        $("#showcontent_button").hide();
                        $("#hidecontent_button").show();
                    }

                    collapse();
                </script>
            </section>

            <script>
                /*function showImg(item) {
        console.log(item.src);
        $("#imgblock").hide();
        $("#imgblock").fadeIn("fast");
        $("#imgblock")[0].src = item.src;


    }*/
            </script>



            <hr />
            <section class="col">
                <h1>評論</h1>

                <div id="scores" style="display: flex;justify-content: space-evenly;">
                    <table class="table table-sm" style="width: 250px;border-left:10px solid rgba(18, 124, 150, 0.85);margin:10px auto">
                        <tbody>
                            <tr>
                                <th scope="row">耐玩度</th>
                                <td>4.0</td>
                            </tr>
                        </tbody>
                    </table>

                    <div style="text-align:center;;margin:10px auto">
                        <span style="font-size: 50px">4.0</span>
                        <div style="display:flex;flex-direction:row;justify-content:center">
                            <div style="height:17px;width:17px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAABA0lEQVR4AWMgBEpLS+MYKAFlZWWaJSUlP6urq6XJNgRowKzi4uL/QLqNLAMaGhpEgJq/gwwB4rd9fX2c5LiiFmQADAP56aS4gAkYmBJAjS/QDLkGxNwgF02aNIl95syZrEC1LCD1IBsLgIr2APElqMY/IE0k4BqQzVxAgzaRpBHhunK4F1atWsUMFJhKogFFuAKzFKjgHxEG5BGKlRYCBqwiJmonEjDkBDGG7CdgyFdwtOIDoNSJpOkfUNMh9HAC5il1fBlOBjlxlZeXW0FzsjWQfxEmB+SH48v2XkBFv4B0I9DJbBBRRDKAJsyPQNyO0xCgze5ArI3Pu1VVVZJAS5KQxQC83Tw70VP4pQAAAABJRU5ErkJggg==) no-repeat left">
                            </div>
                            <div style="height:17px;width:17px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAABA0lEQVR4AWMgBEpLS+MYKAFlZWWaJSUlP6urq6XJNgRowKzi4uL/QLqNLAMaGhpEgJq/gwwB4rd9fX2c5LiiFmQADAP56aS4gAkYmBJAjS/QDLkGxNwgF02aNIl95syZrEC1LCD1IBsLgIr2APElqMY/IE0k4BqQzVxAgzaRpBHhunK4F1atWsUMFJhKogFFuAKzFKjgHxEG5BGKlRYCBqwiJmonEjDkBDGG7CdgyFdwtOIDoNSJpOkfUNMh9HAC5il1fBlOBjlxlZeXW0FzsjWQfxEmB+SH48v2XkBFv4B0I9DJbBBRRDKAJsyPQNyO0xCgze5ArI3Pu1VVVZJAS5KQxQC83Tw70VP4pQAAAABJRU5ErkJggg==) no-repeat left">
                            </div>
                            <div style="height:17px;width:17px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAABA0lEQVR4AWMgBEpLS+MYKAFlZWWaJSUlP6urq6XJNgRowKzi4uL/QLqNLAMaGhpEgJq/gwwB4rd9fX2c5LiiFmQADAP56aS4gAkYmBJAjS/QDLkGxNwgF02aNIl95syZrEC1LCD1IBsLgIr2APElqMY/IE0k4BqQzVxAgzaRpBHhunK4F1atWsUMFJhKogFFuAKzFKjgHxEG5BGKlRYCBqwiJmonEjDkBDGG7CdgyFdwtOIDoNSJpOkfUNMh9HAC5il1fBlOBjlxlZeXW0FzsjWQfxEmB+SH48v2XkBFv4B0I9DJbBBRRDKAJsyPQNyO0xCgze5ArI3Pu1VVVZJAS5KQxQC83Tw70VP4pQAAAABJRU5ErkJggg==) no-repeat left">
                            </div>
                            <div style="height: 17px;width:17px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA+ElEQVR4AWPAB+7cuaPy4MEDSQZywc2bN6fcunWrmSzNDx8+FAQa8AWIX9+/f5+DZANu375dAdT8H4SB7BSSNP///58V6PQnMAOA7MvEaGID2iQDxEZADdUwzUiuSAbSZnfv3jUBBq4xkG8IxNqggKoCangPUkQi/gXUFwy2HchoIlHzT6Dt/uiBlgSU+E1IM9CyH0DsjSvk3YGKPuHTDFJDKPHsxWPAe2JS32t8Xrh37548Ts2gdE8oDGCBhzsMEIrvg/hA7Atk30MyoB6bXlh0lgHxXyCe8OLFC26Y+OPHjzlBUQ2NgXX4XFAOVGCOL3sD5achiwEAj9G1Uf/5qQgAAAAASUVORK5CYII=) no-repeat left">
                                <div style="height:17px;width:15.0px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAABA0lEQVR4AWMgBEpLS+MYKAFlZWWaJSUlP6urq6XJNgRowKzi4uL/QLqNLAMaGhpEgJq/gwwB4rd9fX2c5LiiFmQADAP56aS4gAkYmBJAjS/QDLkGxNwgF02aNIl95syZrEC1LCD1IBsLgIr2APElqMY/IE0k4BqQzVxAgzaRpBHhunK4F1atWsUMFJhKogFFuAKzFKjgHxEG5BGKlRYCBqwiJmonEjDkBDGG7CdgyFdwtOIDoNSJpOkfUNMh9HAC5il1fBlOBjlxlZeXW0FzsjWQfxEmB+SH48v2XkBFv4B0I9DJbBBRRDKAJsyPQNyO0xCgze5ArI3Pu1VVVZJAS5KQxQC83Tw70VP4pQAAAABJRU5ErkJggg==) no-repeat left">
                                </div>
                            </div>
                            <div style="height: 17px;width:17px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA+ElEQVR4AWPAB+7cuaPy4MEDSQZywc2bN6fcunWrmSzNDx8+FAQa8AWIX9+/f5+DZANu375dAdT8H4SB7BSSNP///58V6PQnMAOA7MvEaGID2iQDxEZADdUwzUiuSAbSZnfv3jUBBq4xkG8IxNqggKoCangPUkQi/gXUFwy2HchoIlHzT6Dt/uiBlgSU+E1IM9CyH0DsjSvk3YGKPuHTDFJDKPHsxWPAe2JS32t8Xrh37548Ts2gdE8oDGCBhzsMEIrvg/hA7Atk30MyoB6bXlh0lgHxXyCe8OLFC26Y+OPHjzlBUQ2NgXX4XFAOVGCOL3sD5achiwEAj9G1Uf/5qQgAAAAASUVORK5CYII=) no-repeat left">
                            </div>
                        </div>

                        <div>共 88,609 則評分</div>
                    </div>

                    <table class="table table-sm" style="max-width:250px;margin:10px auto">
                        <tbody>
                            <tr>
                                <th scope="row" style="width:15px">5</th>
                                <td>
                                    <div style="background:#57bb8a;width:40%">&nbsp;</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15px">4</th>
                                <td>
                                    <div style="background:#9ace6a;width:35%">&nbsp;</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15px">3</th>
                                <td>
                                    <div style="background:#ffcf02;width:22%">&nbsp;</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15px">2</th>
                                <td>
                                    <div style="background:#ff9f02;width:23%">&nbsp;</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope=" row" style="width:15px">1</th>
                                <td>
                                    <div style="background:#ff6f31;width:30%">&nbsp;</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="col" style="margin-top:50px">
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://lh3.googleusercontent.com/-zki79n99jYo/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re1tdK1q5sUMEqgwLTJZIJ2ZJwRig/w48-h48-n/photo.jpg">
                    <div style="flex-direction: column">
                        <h5>Pj Chen</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <span style="font-size: 10px">2016年9月27日</span>
                        </div>
                        <div>
                            真是太棒的遊戲 玩這麼多千篇一律的遊戲之後 赫然發現這個遊戲。令我眼前為之一亮 無論是遊戲的架構 平衡 遊戲性 風格 畫面 手機效能 等方面都考慮的十分用心 看的出來製作團隊的努力 無論如何請團隊一定要努力下去 為這個手游市場注入一股活水
                        </div>
                    </div>
                </div>
                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://lh3.googleusercontent.com/a-/AAuE7mDYnzm6yLZqY2Guzl76bgHu-OPRBcWxXSGUMpWYAw=w48-h48-n">
                    <div style="flex-direction: column">
                        <h5>林柏偉</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;">
                            </div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;">
                            </div>
                            <span style="font-size: 10px">2016年9月17日</span>
                        </div>
                        <div>
                            卡頓到底什麼時候才能改善啊……“只有中華電信用戶才有這個情況”那就放著不管了嗎？？每個動作都要等好久還不一定成功，老實說已經沒什麼耐心想玩下去了
                        </div>
                    </div>
                </div>
                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://lh3.googleusercontent.com/-GNxG2341ccI/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rcF_r73ulxwd-_hBN1raUThDlCfAA/w96-h96-n/photo.jpg">
                    <div style="flex-direction: column">
                        <h5>龔美秀</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;">
                            </div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;">
                            </div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;">
                            </div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;">
                            </div>
                            <span style="font-size: 10px">2020年1月21日</span>
                        </div>
                        <div>
                            廢了 停在加載中不能進入遊戲 連遊戲都進不了，怎麼聯絡?
                        </div>
                    </div>
                </div>


            </section>

        </div>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-xl" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="questionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="questionModalLabel">開始答題</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="Form" action="/CKTU/finish.php" method="post">
                        <div class="modal-body" style="padding:0 2.5rem!important">
                            <input name="question" value="1" style="visibility: hidden" required>
                            <div class="form-group ">
                                <label class=" col-form-label">1. 在此情境中，留言區多數人對此遊戲的評價如何？</label>
                                <div class=" row col-form-label" style="margin-left:15px">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="Q1" value="0" required>
                                        <label class="form-check-label">
                                            正面
                                        </label>
                                    </div>
                                    &emsp;
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Q1" value="1">
                                        <label class="form-check-label">
                                            負面
                                        </label>
                                    </div>
                                    &emsp;
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Q1" value="2">
                                        <label class="form-check-label">
                                            評價不一
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">2. 根據情境內容，下列何者"非"此遊戲主打之特色？</label>
                                <div class=" row col-form-label" style="margin-left:15px">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="Q2" value="0" required>
                                        <label class="form-check-label">
                                            無任何VIP特權系統
                                        </label>
                                    </div>
                                    &emsp;
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Q2" value="1">
                                        <label class="form-check-label">
                                            隨時可以喊卡保存進度
                                        </label>
                                    </div>
                                    &emsp;
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Q2" value="2">
                                        <label class="form-check-label">
                                            角色類型單純
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">3. 此情境中，是否有針對遊戲細項的評分？</label>
                                <div class=" row col-form-label" style="margin-left:15px">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="Q3" value="0" required>
                                        <label class="form-check-label">
                                            是
                                        </label>
                                    </div>
                                    &emsp;
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Q3" value="1">
                                        <label class="form-check-label">
                                            否
                                        </label>
                                    </div>

                                </div>
                            </div>




                            <!--Questions-->

                            <div class="form-group ">
                                <label class=" col-form-label">4. 網友對於這款線上遊戲的評論相當一致</label>
                                <div id="Q4" class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q4" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q4" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q4" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q4" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q4" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q4" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q4" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">5. 網友的評論，讓我感覺購買這款線上遊戲是正確的決定</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q5" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q5" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q5" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q5" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q5" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q5" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q5" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">6. 網友的評論，使我感覺購買這款線上遊戲存在不確定的感受</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q6" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q6" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q6" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q6" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q6" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q6" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q6" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">7. 如果我購買這款線上遊戲，便可能曝露在許多的交易的不確定之中</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q7" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q7" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q7" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q7" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q7" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q7" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q7" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">8. 網友的評論使我更熟悉這款線上遊戲</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q8" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q8" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q8" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q8" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q8" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q8" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q8" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">9. 網友的評論有助於我衡量這款線上遊戲</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q9" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q9" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q9" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q9" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q9" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q9" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q9" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">10. 網友的評論有助我瞭解這款線上遊戲是否真的有趣</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q10" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q10" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q10" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q10" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q10" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q10" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q10" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">11. 我感覺這款線上遊戲的CP值很高</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q11" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q11" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q11" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q11" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q11" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q11" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q11" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">12. 我感覺這款線上遊戲的耐玩度很高</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q12" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q12" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q12" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q12" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q12" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q12" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q12" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">13. 我感覺這款線上遊戲的題材很具創新性</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q13" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q13" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q13" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q13" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q13" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q13" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q13" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">14. 我感覺這款線上遊戲的品質讓人可以接受</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q14" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q14" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q14" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q14" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q14" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q14" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q14" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">15. 此款線上遊戲，以這樣的價格來說是不錯的</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q15" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q15" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q15" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q15" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q15" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q15" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q15" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">16. 此款線上遊戲的性價比是高的</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q16" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q16" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q16" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q16" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q16" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q16" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q16" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">17. 從創意思考、耐玩度跟題材創意來看，這樣的價格是合理的</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q17" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q17" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q17" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q17" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q17" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q17" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q17" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">18. 購買這款線上遊戲是可靠的</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q18" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q18" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q18" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q18" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q18" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q18" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q18" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">19. 對我而言，購買這款線上遊戲是有價值的</label>
                                <div id="startQ1" class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q19" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q19" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q19" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q19" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q19" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q19" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q19" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">20. 購買這款線上遊戲是明智的選擇</label>
                                <div class="d-flex justify-content-center" style="max-width: 415px;">
                                    <div style="margin-right:auto">非常同意</div>
                                    <div style="display: flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q20" value="6" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q20" value="5">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q20" value="4">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q20" value="3">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q20" value="2">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q20" value="1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Q20" value="0">
                                        </div>
                                    </div>
                                    <div style="margin-left:auto">非常不同意</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                            <button type="submit" class="btn btn-primary">送出</button>
                        </div>
                    </form>
                    <script>
                        $("#Form").submit(function(e) {

                            var form = $(this);
                            var url = form.attr('action');

                            $.ajax({
                                type: "POST",
                                url: url,
                                data: form.serialize(), // serializes the form's elements.
                                success: function(data) {
                                    if (data != "")
                                        alert(data); // show response from the php script.
                                    else {
                                        alert("完成!感謝您的填答~");
                                        location.replace('/CKTU/index.php');
                                    }
                                }
                            });

                            e.preventDefault(); // avoid to execute the actual submit of the form.
                        });
                    </script>


                </div>
            </div>
        </div>
        <div style="display: flex; flex-direction:row;margin:10px auto">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#storyModal" style="margin:-30px 5px 0 auto">
                情境故事
            </button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#questionModal" style="margin:-30px auto 0 5px">
                開始答題
            </button>
        </div>

    </div>
</body>


</html>