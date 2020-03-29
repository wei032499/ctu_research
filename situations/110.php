<!--享樂品、豐富度低、一致性高-->
<!--https://play.google.com/store/apps/details?id=com.bluebraingames.thehouseofdavinci-->
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="startQLabel">產品熟悉度</h5>
                </div>
                <form id="startForm" action="/CKTU/finish.php">
                    <input name="question" value="0" style="visibility: hidden" required>
                    <div class="modal-body" style="padding:1rem 2.5rem!important">
                        <div class="form-group">
                            <label for="startQ1">1. 我知道許多線上遊戲的產品種類</label>
                            <div id="startQ1" class="d-flex justify-content-center" style="max-width: 415px;">
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
                            <div id="startQ2" class="d-flex justify-content-center" style="max-width: 415px;">
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
                            <div id="startQ3" class="d-flex justify-content-center" style="max-width: 415px;">
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
                            <div id="startQ4" class="d-flex justify-content-center" style="max-width: 415px;">
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
                        <img id="imgblock" src="https://lh3.googleusercontent.com/nGmwV-5qJxd0eeXlIPAX2mqlzD_OI61-VQ3mjNWVd6sbKhuoYxGcBkRQ88MGsM05tFY=s360" style="width: 90%" />
                    </div>
                    <div style="width: 100%">
                        <div style="display: flex;flex-direction:row">
                            <div id="titleImg2" style="width: 100%;display:none">
                                <img id="imgblock" src="https://lh3.googleusercontent.com/nGmwV-5qJxd0eeXlIPAX2mqlzD_OI61-VQ3mjNWVd6sbKhuoYxGcBkRQ88MGsM05tFY=s360" style="width: 90%" />
                            </div>
                            <div style="margin: 5px auto 5px 25px ">
                                <h1>The House of Da Vinci</h1>
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
                                        <div style="height:10px;width:5.0px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;">
                                        </div>
                                    </div>
                                    <span id="count">22,524</span>
                                    <div style="width:16px;height:16px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAW0lEQVR4AWP4TwBSTQEIlAuUbyj/D4QbygWwK1gAlITABdgVHIArOECmggC4ggBMBRAlBuUNQGgAE8VU4ACBmApAejfALIB61QBVwQeoBAJ+QFXwHxNSLy4IQAD87f8pWI1e0gAAAABJRU5ErkJggg==);"></div>
                                </div>
                                <div><span>購買：</span> <span style="color:red;font-size:25px">NT$170</span></div>
                            </div>
                        </div>
                        <hr />
                        <div style="display: flex; flex-direction:row">
                            <ul class="">
                                <li>主機平台：<a class="" href="/?p=Android">Android</a></li>
                                <li>遊戲類型：<a href="" target="_blank">益智遊戲</a></li>
                                <li>更新日期：2018-09-20</li>

                            </ul>

                        </div>
                        <div>
                            <ul class="">
                                <li>開發人員：<a href="" target="_blank">davinci@bluebraingames.com</a></li>
                                <li>提供者：<a href="" target="_blank">Blue Brain Games s.r.o.</a></li>
                                <li>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td valign="top">GooglePlay：</td>
                                                <td><a href="" target="_blank">https://play.google...</a></td>
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
                            <div class="carousel-inner row w-100 mx-auto" role="listbox" style="max-height: 180px">
                                <div class="carousel-item  active" style="width: auto;padding:5px;max-width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 1" class="thumb">
                                                <iframe style="max-height: 180px;max-width:100%" class="img-fluid mx-auto d-block" src="https://www.youtube.com/embed/8er3jJ1XCew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="slide 1" onclick="showImg(this)"></iframe>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px;max-width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 3" class="thumb">
                                                <img style="max-height: 180px;max-width:100%" class="img-fluid mx-auto d-block" src="https://lh3.googleusercontent.com/gmpZt1DbIcFLSktEQ37uRW9NLYqwDXF6Yb3yIaYoJH6_UclCP25FOZKH3SfWa9GfCnw=w3072-h936" alt="slide 2" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px;max-width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 4" class="thumb">
                                                <img style="max-height: 180px;max-width:100%" class="img-fluid mx-auto d-block" src="https://lh3.googleusercontent.com/UEPEeUYzQPp-4sYljwFaSLcojzkDKK5O-7-ZUhx8Upk376uwBNmwGhEqTEiVFTn8Mw=w3072-h936" alt="slide 3" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px;max-width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 5" class="thumb">
                                                <img style="max-height: 180px;max-width:100%" class="img-fluid mx-auto d-block" src="https://lh3.googleusercontent.com/y1oDikVmT0eNU1wxzMrjRJ9rBvTsaZd0hPoj1QkoHzSEAJIXn_xYrifMZjDud5SHz28=w3072-h936" alt="slide 4" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px;max-width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 6" class="thumb">
                                                <img style="max-height: 180px;max-width:100%" class="img-fluid mx-auto d-block" src="https://lh3.googleusercontent.com/ndiS5FbbuI5FMz2ElEUfyaGHeAJo_Kovwof6wRM91vfNqeFC7CvyQVZqujl61fcRNZo=w3072-h936" alt="slide 5" onclick="showImg(this)">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item " style="width: auto;padding:5px;max-width:100%">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <a title="image 7" class="thumb">
                                                <img style="max-height: 180px;max-width:100%" class="img-fluid mx-auto d-block" src="https://lh3.googleusercontent.com/NyNLu1ifZftcOp6GNbeOyJC-jFAs18_t1Cij59kszdR90jPFRuD71DP_1-SPCknkwg=w3072-h936" alt="slide 6" onclick="showImg(this)">
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
                    進入達芬奇房子，體驗這個必須嘗試的3D拼圖冒險遊戲。解決機械謎題，發現隱藏的物體，最後逃出房間。<br><br>•主要特色•<br><br>解決機械難題<br>腦筋急轉彎和謎語都是基於萊昂納多的發明。<br><br>享受直觀的觸摸控制<br>體驗直觀參觀萊昂納多的工作室。遊戲非常有趣。<br><br>經歷文藝復興<br>戰爭機器，複雜的盒子，機械拼圖房間逃脫都會測試你的技能。<br><br>掌握獨特的力學<br>通過觀察你周圍的表面來探測隱藏的物體。<br><br>窺視過去<br>一個不尋常的挑戰可以讓你見證早些時候發生的事情，並瞭解更多的故事。<br><br>•達芬奇密室背後的故事是什麼? •<br>你是達芬奇最有前途的學徒。你的主人，達芬奇，已經消失了。你不知道他去哪兒了，或者發生了什麼事。所以你開始你的探索、尋找真相。然而，達芬奇工廠裡充滿了各種謎題、發明、逃脫機制和隱藏在裝飾華麗的房間角落裡的物品。你需要用你所有的腦細胞來找出到底發生了什麼事！<br><br>我們將自己的想像力運用到世界上最偉大的發明家萊昂納多·達·芬奇的故事中，為玩家提供了在整個遊戲過程中獨一無二的特殊能力。作為一個年輕的學徒，我們允許你重新回到你的早期，探索你周圍的16世紀的世界，窺視達·芬奇的機械裝置、謎題和裝置，你最終會變得強大到可以控制時間，並學習隱藏在過去的秘密。<br><br>許多具有挑戰性的謎題都是由達·芬奇的真實發明和靈感所激發的。神秘的地點是根據最初的藝術品和1506年義大利的佛羅倫斯創造的。<br><br>•贊FACEBOOK上的達芬奇密室<br>•https://www.facebook.com/thehouseofdavinci <br><br>•回饋和支持•<br>如有任何回饋或支持問題，請隨時在davinci@bluebraingames.com與我們聯繫<br><br>•更多資訊•<br> 在網站 http://www.thehouseofdavinci.com/上查找更多相關遊戲。<br><br>•語言•<br>達芬奇密室現在可以用英語、法語，德語，西班牙語，巴西葡萄牙語，捷克語，斯洛伐克語，俄語，土耳其語，義大利語，波蘭語，日語，韓語，簡體中文，印地語和馬來語。<br><br>•我們是誰? •<br>藍腦遊戲是一個充滿激情的獨立團隊，由平面設計師和開發者組成，他們都是3D益智遊戲和文藝復興時期的天才萊昂納多·達·芬奇的粉絲。達·芬奇密室是在2016年年底在Kickstarter上成功融資的。現在就安裝遊戲，加入超過2.391的冒險遊戲愛好者，他們支持了達芬奇密室！
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
                                <td>4.6</td>
                            </tr>
                        </tbody>
                    </table>

                    <div style="text-align:center;margin:10px auto">
                        <span style="font-size: 50px">4.7</span>
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
                                <div style="height:17px;width:9.0px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAYAAAA7bUf6AAABA0lEQVR4AWMgBEpLS+MYKAFlZWWaJSUlP6urq6XJNgRowKzi4uL/QLqNLAMaGhpEgJq/gwwB4rd9fX2c5LiiFmQADAP56aS4gAkYmBJAjS/QDLkGxNwgF02aNIl95syZrEC1LCD1IBsLgIr2APElqMY/IE0k4BqQzVxAgzaRpBHhunK4F1atWsUMFJhKogFFuAKzFKjgHxEG5BGKlRYCBqwiJmonEjDkBDGG7CdgyFdwtOIDoNSJpOkfUNMh9HAC5il1fBlOBjlxlZeXW0FzsjWQfxEmB+SH48v2XkBFv4B0I9DJbBBRRDKAJsyPQNyO0xCgze5ArI3Pu1VVVZJAS5KQxQC83Tw70VP4pQAAAABJRU5ErkJggg==) no-repeat left">
                                </div>
                            </div>
                        </div>
                        <div>共 22,524 則評分</div>
                    </div>

                    <table class="table table-sm" style="max-width:250px;margin:10px auto">
                        <tbody>
                            <tr>
                                <th scope="row" style="width:15px">5</th>
                                <td>
                                    <div style="background:#57bb8a;width:246px;">&nbsp;</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15px">4</th>
                                <td>
                                    <div style="background:#9ace6a;width:60.8px;">&nbsp;</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15px">3</th>
                                <td>
                                    <div style="background:#ffcf02;width:15.2px;">&nbsp;</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15px">2</th>
                                <td>
                                    <div style="background:#ff9f02;width:7.6px;">&nbsp;</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15px">1</th>
                                <td>
                                    <div style="background:#ff6f31;width:30.4px;">&nbsp;</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="col" style="margin-top:50px">
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="/CKTU/images/p9.jpg">
                    <div style="flex-direction: column">
                        <h5>TSAI NENG-JEN</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <span style="font-size: 10px">2019年12月19日</span>
                        </div>
                        <div>
                            畫面精緻，解謎的部分也很有趣
                        </div>
                    </div>
                </div>
                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="/CKTU/images/p3.jpg">
                    <div style="flex-direction: column">
                        <h5>Pj Chen</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <span style="font-size: 10px">2019年9月27日</span>
                        </div>
                        <div>
                            太棒了！這謎題非常多 各種機關的設計很有意思 還有翻譯成中文 劇情也令人好奇 期待續集
                        </div>
                    </div>
                </div>
                <hr />
                <div style="display: flex;margin:8px 0">
                    <img height="48" width="48" style="margin-right:10px;height:48px;width:48px" class="rounded-circle" src="/CKTU/images/p2.jpg">
                    <div style="flex-direction: column">
                        <h5>林柏偉</h5>
                        <div style="display:flex;flex-direction:row">
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height:10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAn0lEQVR4AWNAB+Xl5drFxcXGDIQAUNHskpKSxXgVVVZWigIVfQcq/lVVVSWJboJxWVmZX2lpaQpQ0Wog/z8IA9lrgDgPiHOA8tEgN7kDOZ9Akjjwe6BCM7CpQNMMgIqfYlH0FihnhOIEoMIIdIVAsTaQHLrCWiwKN2EohHrkM9CqXCA7Gch+DcSPsIXfBKDH5GD8hoYGIaCGGUBaAMQHAMs6d9dLo6HcAAAAAElFTkSuQmCC) no-repeat left;"></div>
                            <div style="height: 10px;width:10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAoUlEQVR4AWNAB7dv39a+c+eOMQMhcPPmzdlAvBhVFNM00Vu3bn0HKvz14MEDSRRJkDVABX5AnAJUtBqo6D8IA9lrgDgPyM4BykWDTHEHcj6BJFEwQsN7IG0GNhXIMQBynmJR+BZokBG6JyLQFQIVtSGrgZlai8XaTRgKoR75DKRzgSYlA9mvgexH2BROuHv3rhyM//jxYyGg2Iz79+8LgPgAWIi+JMqA+1MAAAAASUVORK5CYII=) no-repeat left;">
                            </div>
                            <span style="font-size: 10px">2020年3月17日</span>
                        </div>
                        <div>
                            遊戲有趣，謎題難度適中。觸碰操作的範圍判定和鏡頭移動的範圍侷限，有時候比謎題更困難。操作體驗實在須要改進與加強。
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <!-- Modal -->
        <div class="modal  bd-example-modal-xl" id="prequestionModal" tabindex="-1" role="dialog" aria-labelledby="prequestionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="prequestionModalLabel">開始答題</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form id="preForm" action="/CKTU/finish.php" method="post">
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
                                            解決機械難題
                                        </label>
                                    </div>
                                    &emsp;
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Q2" value="1">
                                        <label class="form-check-label">
                                            經歷文藝復興
                                        </label>
                                    </div>
                                    &emsp;
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="Q2" value="2">
                                        <label class="form-check-label">
                                            角色類型多元
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



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                            <button type="submit" class="btn btn-primary">下一頁</button>

                        </div>
                    </form>
                    <script>
                        $("#preForm").submit(function(e) {

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
                                        $('#prequestionModal').modal('hide');
                                        $('#questionModal').modal('show');
                                        $('#questionModal').modal('handleUpdate');
                                    }
                                }
                            });

                            e.preventDefault(); // avoid to execute the actual submit of the form.
                        });
                    </script>



                </div>
            </div>
        </div>
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
                            <input name="question" value="2" style="visibility: hidden" required>

                            <!--Questions-->

                            <div class="form-group ">
                                <label class=" col-form-label">1. 網友對於這款線上遊戲的評論相當一致</label>
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
                                <label class=" col-form-label">2. 網友的評論，讓我感覺購買這款線上遊戲是正確的決定</label>
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
                                <label class=" col-form-label">3. 網友的評論，使我感覺購買這款線上遊戲存在不確定的感受</label>
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
                                <label class=" col-form-label">4. 如果我購買這款線上遊戲，便可能曝露在許多的交易的不確定之中</label>
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
                                <label class=" col-form-label">5. 網友的評論使我更熟悉這款線上遊戲</label>
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
                                <label class=" col-form-label">6. 網友的評論有助於我衡量這款線上遊戲</label>
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
                                <label class=" col-form-label">7. 網友的評論有助我瞭解這款線上遊戲是否真的有趣</label>
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
                                <label class=" col-form-label">8. 我感覺這款線上遊戲的CP值很高</label>
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
                                <label class=" col-form-label">9. 我感覺這款線上遊戲的耐玩度很高</label>
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
                                <label class=" col-form-label">10. 我感覺這款線上遊戲的題材很具創新性</label>
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
                                <label class=" col-form-label">11. 我感覺這款線上遊戲的品質讓人可以接受</label>
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
                                <label class=" col-form-label">12. 此款線上遊戲，以這樣的價格來說是不錯的</label>
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
                                <label class=" col-form-label">13. 此款線上遊戲的性價比是高的</label>
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
                                <label class=" col-form-label">14. 從創意思考、耐玩度跟題材創意來看，這樣的價格是合理的</label>
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
                                <label class=" col-form-label">15. 購買這款線上遊戲是可靠的</label>
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
                                <label class=" col-form-label">16. 對我而言，購買這款線上遊戲是有價值的</label>
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
                                <label class=" col-form-label">17. 購買這款線上遊戲是明智的選擇</label>
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
                                        location.replace('/CKTU/finishpage.php');
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
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#prequestionModal" style="margin:-30px auto 0 5px">
                開始答題
            </button>
        </div>

    </div>
</body>


</html>