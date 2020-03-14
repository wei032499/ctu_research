<!--實用品、豐富度高、一致性低-->
<!--https://www.amazon.com/dp/B078961XTD/ref=sspa_dk_detail_2?psc=1&pd_rd_i=B078961XTD&pd_rd_w=O97M8&pf_rd_p=45a72588-80f7-4414-9851-786f6c16d42b&pd_rd_wg=E5SpQ&pf_rd_r=YXX623PNCTB3F9VTGB0T&pd_rd_r=2b746a59-14fc-4857-af29-578b8a5b12c9&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExVTE0OENMT0tQSTJSJmVuY3J5cHRlZElkPUEwNDM1MDEyMUVaQjNIQTRQU0pVUyZlbmNyeXB0ZWRBZElkPUEwNjIyNjUySlBRQ0pEUkk5OEU0JndpZGdldE5hbWU9c3BfZGV0YWlsJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ==-->
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
                    你想買筆記型電腦已經很久了，但是礙於課業/工作忙碌，始終沒有時間好好的研究，趁著剛好有空的這個時候，上網搜尋了一下產品資訊與網友的意見，這時你看到一款不錯的筆記型電腦。
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
                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </div>
                <form id="startForm" action="/CKTU/finish.php">
                    <input name="question" value="0" style="visibility: hidden" required>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="startQ1">1. 我知道許多廠牌的筆記型電腦</label>
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
                            <label for="startQ2">2. 對我而言，選購一台筆電將不會花費太多時間</label>
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
                            <label for="startQ3">3. 我大致瞭解不同筆記型電腦品牌之間的差異</label>
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
                            <label for="startQ4">4. 我曾經比較選購過筆記型電腦</label>
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




    <div class="container fade" style="margin: 10px auto">
        <div class="shadow p-3 mb-5 bg-white rounded" style="padding:2.5rem!important">

            <section class="col">
                <!--<div id="titleImg" style="width: 50%">
                    <img id="imgblock" src="//via.placeholder.com/600x400?text=2" style="width: 95%" />
                </div>-->
                <div style="display: flex;flex-direction:row">
                    <div id="titleImg" style="width: 40%">
                        <img src="/CKTU/images/head.jpg" style="width: 90%" />
                    </div>
                    <div style="width: 100%">
                        <div style="display: flex;flex-direction:row">
                            <div id="titleImg2" style="width: 100%;display:none">
                                <img src="/CKTU/images/head.jpg" style="width: 90%" />
                            </div>
                            <div style="margin: 5px auto 5px 25px ">
                                <h1>Lenovo IdeaPad YOGA S730</h1>
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
                                        <div style="height:10px;width:6.0px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;">
                                        </div>
                                    </div>
                                    <span id="count">762</span>
                                    <div style="width:16px;height:16px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAW0lEQVR4AWP4TwBSTQEIlAuUbyj/D4QbygWwK1gAlITABdgVHIArOECmggC4ggBMBRAlBuUNQGgAE8VU4ACBmApAejfALIB61QBVwQeoBAJ+QFXwHxNSLy4IQAD87f8pWI1e0gAAAABJRU5ErkJggg==);"></div>
                                </div>
                                <div><span>網路售價</span> <span style="color:red;font-size:25px">$25,990</span></div>
                            </div>
                        </div>
                        <hr />
                        <div style="display: flex; flex-direction:row">
                            <ul class="">
                                <li>處理器：Intel Core i5-8265U</li>
                                <li>記憶體：1* 8GB LPDDR32133MHz</li>
                                <li>硬 碟：256GB SSD</li>
                                <li>顯卡：Intel® UHD Graphics 620</li>
                                <li>螢 幕：13.3" FHD IPS(1920*1080)(玻璃鏡面)</li>
                                <li>重量：1.2kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--carousel-->
                <section>
                    <div class="container-fluid" style="padding: 0px">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner row w-100 mx-auto" role="listbox" style="max-height: 300px">
                                <div class="carousel-item  active" style="width:auto;padding:5px;max-width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 1" class="thumb">
                                                <img style="max-height: 300px" class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/61I3A%2B0fvdL._AC_SX679_.jpg" alt="slide 1" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px;max-width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 3" class="thumb">
                                                <img style="max-height: 300px" class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/41Ydv3HnX3L._AC_.jpg" alt="slide 2" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px;max-width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 4" class="thumb">
                                                <img style="max-height: 300px" class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/41atB5qTPcL._AC_.jpg" alt="slide 3" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px;max-width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 5" class="thumb">
                                                <img style="max-height: 300px" class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/51jjnhJ46GL._AC_SX679_.jpg" alt="slide 4" onclick="showImg(this)">
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
                    <table class="table table-sm" style="width: 80%;margin:auto">
                        <tbody>
                            <tr>
                                <th scope="row" class="bg-light">螢幕尺寸</th>
                                <td>17.3 英吋 </td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-light">處理器</th>
                                <td>2.8 GHz Intel Core i7</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-light">RAM</th>
                                <td>16 GB DDR </td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-light">硬碟</th>
                                <td>128 GB Flash Memory Solid State </td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-light">圖形輔助處理器</th>
                                <td>NVIDIA GeForce GTX 1050 Ti </td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-light">晶片組品牌</th>
                                <td>nvidia</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-light">卡片說明</th>
                                <td>Dedicated</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-light">無線類型</th>
                                <td>802.11ac</td>
                            </tr>

                        </tbody>
                    </table>
                    <hr />
                    <img style="max-width:100%" src="https://a.ecimg.tw/img/projects/personal/v0/upload_file/US00003594/IdeaPad/YOGA/YOGA_S730/YOGA%20S730.jpg" alt="" width="750" height="3895">

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
            <hr />
            <section class="col">
                <h1>評論</h1>
                <div id="scores" style="display: flex;justify-content: space-evenly;">
                    <table class="table table-sm" style="width: 250px;border-left:10px solid rgba(18, 124, 150, 0.85);margin:10px auto">
                        <tbody>
                            <tr>
                                <th scope="row">重量輕</th>
                                <td>4.5</td>
                            </tr>
                            <tr>
                                <th scope="row">螢幕品質</th>
                                <td>4.1</td>
                            </tr>
                            <tr>
                                <th scope="row">指紋辨識器</th>
                                <td>4.5</td>
                            </tr>
                            <tr>
                                <th scope="row">電池壽命</th>
                                <td>4.0</td>
                            </tr>
                            <tr>
                                <th scope="row">性價比</th>
                                <td>4.0</td>
                            </tr>

                        </tbody>
                    </table>
                    <div style="text-align:center;margin:10px auto">
                        <span style="font-size: 50px">4.0</span>
                        <div style="display:flex;flex-direction:row;justify-content:center">
                            <div style="height:17px;width:17px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAABA0lEQVR4AWMgBEpLS+MYKAFlZWWaJSUlP6urq6XJNgRowKzi4uL/QLqNLAMaGhpEgJq/gwwB4rd9fX2c5LiiFmQADAP56aS4gAkYmBJAjS/QDLkGxNwgF02aNIl95syZrEC1LCD1IBsLgIr2APElqMY/IE0k4BqQzVxAgzaRpBHhunK4F1atWsUMFJhKogFFuAKzFKjgHxEG5BGKlRYCBqwiJmonEjDkBDGG7CdgyFdwtOIDoNSJpOkfUNMh9HAC5il1fBlOBjlxlZeXW0FzsjWQfxEmB+SH48v2XkBFv4B0I9DJbBBRRDKAJsyPQNyO0xCgze5ArI3Pu1VVVZJAS5KQxQC83Tw70VP4pQAAAABJRU5ErkJggg==) no-repeat left">
                            </div>
                            <div style="height:17px;width:17px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAABA0lEQVR4AWMgBEpLS+MYKAFlZWWaJSUlP6urq6XJNgRowKzi4uL/QLqNLAMaGhpEgJq/gwwB4rd9fX2c5LiiFmQADAP56aS4gAkYmBJAjS/QDLkGxNwgF02aNIl95syZrEC1LCD1IBsLgIr2APElqMY/IE0k4BqQzVxAgzaRpBHhunK4F1atWsUMFJhKogFFuAKzFKjgHxEG5BGKlRYCBqwiJmonEjDkBDGG7CdgyFdwtOIDoNSJpOkfUNMh9HAC5il1fBlOBjlxlZeXW0FzsjWQfxEmB+SH48v2XkBFv4B0I9DJbBBRRDKAJsyPQNyO0xCgze5ArI3Pu1VVVZJAS5KQxQC83Tw70VP4pQAAAABJRU5ErkJggg==) no-repeat left">
                            </div>
                            <div style="height:17px;width:17px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAABA0lEQVR4AWMgBEpLS+MYKAFlZWWaJSUlP6urq6XJNgRowKzi4uL/QLqNLAMaGhpEgJq/gwwB4rd9fX2c5LiiFmQADAP56aS4gAkYmBJAjS/QDLkGxNwgF02aNIl95syZrEC1LCD1IBsLgIr2APElqMY/IE0k4BqQzVxAgzaRpBHhunK4F1atWsUMFJhKogFFuAKzFKjgHxEG5BGKlRYCBqwiJmonEjDkBDGG7CdgyFdwtOIDoNSJpOkfUNMh9HAC5il1fBlOBjlxlZeXW0FzsjWQfxEmB+SH48v2XkBFv4B0I9DJbBBRRDKAJsyPQNyO0xCgze5ArI3Pu1VVVZJAS5KQxQC83Tw70VP4pQAAAABJRU5ErkJggg==) no-repeat left">
                            </div>
                            <div style="height:17px;width:17px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAABA0lEQVR4AWMgBEpLS+MYKAFlZWWaJSUlP6urq6XJNgRowKzi4uL/QLqNLAMaGhpEgJq/gwwB4rd9fX2c5LiiFmQADAP56aS4gAkYmBJAjS/QDLkGxNwgF02aNIl95syZrEC1LCD1IBsLgIr2APElqMY/IE0k4BqQzVxAgzaRpBHhunK4F1atWsUMFJhKogFFuAKzFKjgHxEG5BGKlRYCBqwiJmonEjDkBDGG7CdgyFdwtOIDoNSJpOkfUNMh9HAC5il1fBlOBjlxlZeXW0FzsjWQfxEmB+SH48v2XkBFv4B0I9DJbBBRRDKAJsyPQNyO0xCgze5ArI3Pu1VVVZJAS5KQxQC83Tw70VP4pQAAAABJRU5ErkJggg==) no-repeat left">
                            </div>
                            <div style="height: 17px;width:17px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA+ElEQVR4AWPAB+7cuaPy4MEDSQZywc2bN6fcunWrmSzNDx8+FAQa8AWIX9+/f5+DZANu375dAdT8H4SB7BSSNP///58V6PQnMAOA7MvEaGID2iQDxEZADdUwzUiuSAbSZnfv3jUBBq4xkG8IxNqggKoCangPUkQi/gXUFwy2HchoIlHzT6Dt/uiBlgSU+E1IM9CyH0DsjSvk3YGKPuHTDFJDKPHsxWPAe2JS32t8Xrh37548Ts2gdE8oDGCBhzsMEIrvg/hA7Atk30MyoB6bXlh0lgHxXyCe8OLFC26Y+OPHjzlBUQ2NgXX4XFAOVGCOL3sD5achiwEAj9G1Uf/5qQgAAAAASUVORK5CYII=) no-repeat left">
                            </div>
                        </div>
                        <div>共 762 則評分</div>
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
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://images-na.ssl-images-amazon.com/images/S/amazon-avatars-global/e5165404-74a4-418a-8f81-1e24e61b2937._CR40,0,420,420_SX48_.jpg">
                    <div style="flex-direction: column">
                        <h5>Marc Spector</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <span style="font-size: 10px">2020年1月10日</span>
                        </div>
                        <div>
                            在購買之前，我比較了很多筆記型電腦。這台電腦擁有我想要的一切。我已經使用了幾個月了，沒有任何問題。外殼圓滑。鍵盤安靜且反應靈敏。觸摸板需要一些時間來適應，但是新筆記本電腦總是如此。電池壽命異常長-我可以連續幾天。如預期的那樣，啟動速度非常快。我將這台機器用於文書處理。我不將其用於遊戲，因為它不是用來玩遊戲的。
                        </div>
                    </div>
                </div>
                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://images-na.ssl-images-amazon.com/images/S/amazon-avatars-global/default._CR0,0,1024,1024_SX48_.png">
                    <div style="flex-direction: column">
                        <h5>valentin</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <span style="font-size: 10px">2019年3月29日</span>
                        </div>
                        <div>
                            如果是要拿來玩遊戲，勸你們還是別買了!!!
                        </div>
                    </div>
                </div>

                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://images-na.ssl-images-amazon.com/images/S/amazon-avatars-global/default._CR0,0,1024,1024_SX48_.png">
                    <div style="flex-direction: column">
                        <h5>Kreed</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <span style="font-size: 10px">2018年3月3日</span>
                        </div>
                        <div>
                            這個CP值真的算很高了!
                        </div>
                    </div>
                </div>

                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://images-na.ssl-images-amazon.com/images/S/amazon-avatars-global/default._CR0,0,1024,1024_SX48_.png">
                    <div style="flex-direction: column">
                        <h5>Robert E Evans Jr</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <span style="font-size: 10px">2019年12月11日</span>
                        </div>
                        <div>
                            性能是真的頗不錯的，但我的顯示卡怪怪的，有時候風散不會轉，要一直重新開機。
                        </div>
                    </div>
                </div>
                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://images-na.ssl-images-amazon.com/images/S/amazon-avatars-global/default._CR0,0,1024,1024_SX48_.png">
                    <div style="flex-direction: column">
                        <h5>Amazon Customer</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <span style="font-size: 10px">2018年8月26日</span>
                        </div>
                        <div>
                            才買幾個月就壞掉，真的爛!!!!
                        </div>
                    </div>
                </div>
                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://images-na.ssl-images-amazon.com/images/S/amazon-avatars-global/823b0c70-dfb7-4414-b2d7-e731b7cd4668._CR62,0,375,375_SX48_.jpg">
                    <div style="flex-direction: column">
                        <h5>Pam Eberle</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <span style="font-size: 10px">2020年1月9日</span>
                        </div>
                        <div>
                            出色的超薄筆記型電腦。喜歡背光鍵盤。速度快而且滿足我的需求。
                        </div>
                    </div>
                </div>
                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://images-na.ssl-images-amazon.com/images/S/amazon-avatars-global/default._CR0,0,1024,1024_SX48_.png">
                    <div style="flex-direction: column">
                        <h5>Robert</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <span style="font-size: 10px">2018年5月2日</span>
                        </div>
                        <div>
                            我買過最爛的筆電!!開機沒幾分鐘就燙到不能碰!!!
                        </div>
                    </div>
                </div>

                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="https://images-na.ssl-images-amazon.com/images/S/amazon-avatars-global/default._CR0,0,1024,1024_SX48_.png">
                    <div style="flex-direction: column">
                        <h5>Dave</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;"></div>
                            <span style="font-size: 10px">2019年8月31日</span>
                        </div>
                        <div>
                            使用起來真的效能強大，不錯!
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
                                <label class=" col-form-label">1. 在此情境中，多數人對此產品的評價如何？</label>
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
                                <label class=" col-form-label">2. 根據情境內容，此產品主打的功能為何？</label>
                                <div class=" row col-form-label" style="margin-left:15px">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="Q2" value="0" required>
                                        <label class="form-check-label">
                                            遊戲體驗極佳
                                        </label>
                                    </div>
                                    &emsp;
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Q2" value="1">
                                        <label class="form-check-label">
                                            輕薄且續航力佳
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group ">
                                <label class=" col-form-label">3. 此情境中，是否有針對產品細項的評分？</label>
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
                                <label class=" col-form-label">4. 網友對於這款筆電的評論相當一致</label>
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
                                <label class=" col-form-label">5. 網友的評論，讓我感覺購買這款筆電是正確的決定</label>
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
                                <label class=" col-form-label">6. 網友的評論，使我感覺購買這款筆電存在不確定的感受</label>
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
                                <label class=" col-form-label">7. 如果我購買這款筆電，便可能曝露在許多的交易的不確定之中</label>
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
                                <label class=" col-form-label">8. 網友的評論使我更熟悉這款筆電</label>
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
                                <label class=" col-form-label">9. 網友的評論有助於我衡量這款筆電</label>
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
                                <label class=" col-form-label">10. 網友的評論有助我瞭解這款筆電的效能</label>
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
                                <label class=" col-form-label">11. 我感覺這款筆電的CP值很高</label>
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
                                <label class=" col-form-label">12. 我感覺這款筆電的待機時間很長</label>
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
                                <label class=" col-form-label">13. 我感覺這款筆電的效能很好</label>
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
                                <label class=" col-form-label">14. 我感覺這款筆電的品質讓人可以接受</label>
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
                                <label class=" col-form-label">15. 此款筆電，以這樣的價格來說是不錯的</label>
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
                                <label class=" col-form-label">16. 此款筆電的性價比是高的</label>
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
                                <label class=" col-form-label">17. 從待機時間、重量跟螢幕品質來看，這樣的價格是合理的</label>
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
                                <label class=" col-form-label">18. 購買這款筆電是可靠的</label>
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
                                <label class=" col-form-label">19. 對我而言，購買這款筆電是有價值的</label>
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
                                <label class=" col-form-label">20. 購買這款筆電是明智的選擇</label>
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
        <div style="display: flex; flex-direction:row;margin:auto">
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