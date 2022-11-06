<x-layout>
    <script>
        $(function(){ // 遅延処理

            $('#checkday').click(
            function() { // 遅延処理
            var day = document.getElementById( "formday" ).value;
            var time = document.getElementById( "time" ).value;
            var people = document.getElementById( "people" ).value;
    if(day == ""){
    alert('日付が未選択です。');
    }else{
    $.ajax({
    type: 'GET',
    url: '../reserveck', // url: は読み込むURLを表す
    data: { "day" : day,
    "time" : time,
    "people" : people},

    }) //通信が成功したとき
    .then((res) => {
    console.log(res);
    document.getElementById("res-text").innerHTML=res[0];
    })
    //通信が失敗したとき
    .fail((error) => {
    console.log(error.statusText);
    });

    }
    }
    );
    });
    </script>


    <div class="main">
        <section class="carousel">
            <div class="container">
                <div class="fv-content">
                    <ul>
                        <li><img src="{{ url('img/home/fv-1x.png')}}" alt=""></li>
                        <li><img src="{{ url('img/home/fv-2.png')}}" alt=""></li>
                        <li><img src="{{ url('img/home/fv-4.png')}}" alt=""></li>
                    </ul>
                </div>
                <button id="prev">&laquo;</button>
                <button id="next">&raquo;</button>
            </div>
            <nav>
                <div id="div1"></div>
            </nav>
        </section>
        <section>
            <div class="heading_menu">
                <p>ネット予約の状況</p>
            </div>
            <div align="center">
                <table class="reserve">
                    <tr>
                        <td>
                            <div id="datepicker" class="datepicker"></div>
                        </td>
                        <td>
                            <div class="reserve-td">
                                <form action="" method="get">
                                    <p>予約日：</p>
                                    <div style="margin-top: 2px;margin-bottom:20px;"> <input type="text" id="formday"
                                            value="" placeholder="カレンダーの日付選択" name="day">
                                    </div>
                                    <p>人数：</p>
                                    <div class="reserve_people">
                                        <select id="people">
                                            <option value="1">1名</option>
                                            <option value="2">2名</option>
                                            <option value="3">3名</option>
                                            <option value="4">4名</option>
                                            <option value="5">5名</option>
                                            <option value="6">6名</option>
                                            <option value="7">7名</option>
                                            <option value="8">8名</option>
                                            <option value="9">9名</option>
                                            <option value="10">10名</option>
                                        </select>
                                    </div>

                                    <p>来店時間：</p>
                                    <div class="reserve_people">
                                        <select name="time" id="time">
                                            <optgroup label="17時">
                                                <option value="17:00:00" name="minitues">17時00分</option>
                                                <option value="17:15:00" name="minitues">17時15分</option>
                                                <option value="17:30:00" name="minitues">17時30分</option>
                                                <option value="17:45:00" name="minitues">17時45分</option>
                                            </optgroup>
                                            <optgroup label="18時" name="hour">
                                                <option value="18:00:00" name="minitues">18時00分</option>
                                                <option value="18:15:00" name="minitues">18時15分</option>
                                                <option value="18:30:00" name="minitues">18時30分</option>
                                                <option value="18:45:00" name="minitues">18時45分</option>
                                            </optgroup>
                                            <optgroup label="19時" name="hour">
                                                <option value="19:00:00" name="minitues">19時00分</option>
                                                <option value="19:15:00" name="minitues">19時15分</option>
                                                <option value="19:30:00" name="minitues">19時30分</option>
                                                <option value="19:45:00" name="minitues">19時45分</option>
                                            </optgroup>
                                            <optgroup label="20時" name="hour">
                                                <option value="20:00:00" name="minitues">20時00分</option>
                                                <option value="20:15:00" name="minitues">20時15分</option>
                                                <option value="20:30:00" name="minitues">20時30分</option>
                                                <option value="20:45:00" name="minitues">20時45分</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <p></p>
                                    <input type="button" value="予約チェック" class="input_button" id="checkday">
                                    <input type="hidden" id="formday">
                                    <div id="res-text"></div>
                            </div>

                            </form>
            </div>
            </td>
            </tr>
            </table>
    </div>
    </section>


    <section>
        <div class="heading_menu">
            <p>おすすめの料理</p>
        </div>
        <div class="osusume-menu">
            <div class="card">
                <ul>
                    <li>
                        <div>
                            <img src="{{ url('uploads/images/20211231_152934_53521300.menu_dinner_2201.jpg')}}" alt="">
                            <div class="menu-des">
                                <h2> シェフおすすめフルコース1</h2>
                                <p class="menu_price">5780円(税込)</p>
                                <p>【小前菜】<br />
                                    北あかりと小エビのカプチーノ　<br />
                                    【前菜】<br />
                                    軽く燻した真サバ　レンズ豆とシャンピニオンのサラダ　玉葱のピュレと香草<br />
                                    【前菜】<br />
                                    パテ・クルートと季節野菜のムスクラン　ラ・フランスと紅茶のメランジェを添えて<br />
                                    【スープ】<br />
                                    ポルチーニ茸と和栗のポタージュ　カカオのクランブルと共に<br />
                                    【魚料理】1品お選びください。<br />
                                    ①スパイシーな穴子のフリットと根野菜のポトフ仕立て　<br />
                                    ②活オマール海老のフランべ　パセリとニンニクの焦がしバターソース(+￥4,400／1尾　※3日前までの要予約)<br />
                                    【肉料理】1品お選びください。<br />
                                    ①セニャンにした道産牛のタルタルステーキ　ジュ・ド・ロティ　じゃが芋のガレットと共に<br />
                                    ②ハーブ香る道産牛フィレ肉と旬の野菜のココットオーブン焼き(+￥1,100／2名様より)<br />
                                    【アヴァンデセール】<br />
                                    【デザート】<br />
                                    熱々のチョコレートスフレとグラスバニラ<br />
                                    【プティフール】<br />
                                    【パン】<br />
                                    パン2種と自家製ホイップバター<br />
                                    【お飲み物】<br />
                                    コーヒー or 紅茶 or ハーブティー</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card">
                <ul>
                    <li>
                        <div>
                            <img src="{{ url('uploads/images/20211231_153011_75097000.consa_sdc.jpg')}}" alt="">
                            <div class="menu-des">
                                <h2> シェフおすすめフルコース2</h2>
                                <p class="menu_price">5720円(税込)</p>
                                <p>ROSSO NERO MENU<br />
                                    Lunch＆Dinner　スペシャルメニュー<br />
                                    牛フィレ肉のロースト　茄子のミルフィーユ仕立て　赤ワインソース　コンサドーレカラー風<br />
                                    　<br />
                                    ディナーコース　お一人様5,720円（税込）※2日前までの要予約<br />
                                    　<br />
                                    [今ならもれなく！]北海道コンサドーレ札幌の選手カードをプレゼント！<br />
                                    ディナーご利用のお客様に、お好きな選手の直筆サイン入り選手カードを1枚プレゼント！</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="card">
                <ul>
                    <li>
                        <div>
                            <img src="{{ url('uploads/images/20220111_170941_63000200.menu_dinner2_2110.jpg')}}" alt="">
                            <div class="menu-des">
                                <h2> シェフおすすめフルコース3</h2>
                                <p class="menu_price">8800円(税込)</p>
                                <p>【小前菜】<br />
                                    シェフからの最初の一皿<br />
                                    【冷前菜】<br />
                                    パテ・クルートと季節野菜のムスクラン　ラ・フランスと紅茶のメランジェを添えて<br />
                                    【温前菜】<br />
                                    フォアグラのポワレ　フルーツトマトのコンフィとビーツのピュレ<br />
                                    【スープ】<br />
                                    ポルチーニ茸と和栗のポタージュ　カカオのクランブルと共に<br />
                                    【魚料理】1品お選びください。<br />
                                    ①のどぐろと根野菜のポトフ仕立て　シラントロの香りを添えて<br />
                                    ②活オマール海老のフランベ　ソースアメリケーヌ(1尾　4,400円／3日前までに予約)<br />
                                    【肉料理】1品お選びください。<br />
                                    ①仔羊ロースと香草のカダイフ包み焼き　マスタードソース　<br />
                                    ②ハーブ香る道産牛フィレ肉と旬の野菜のココットオーブン焼き(+￥1,100／2名様より)<br />
                                    【アヴァンデセール】<br />
                                    【パティシェ特製デセール】または、【チーズ】どちらかお選びください。<br />
                                    ①熱々のチョコレートスフレとグラスバニラ<br />
                                    ②フロマージュ3種<br />
                                    【パン】<br />
                                    【お飲み物】<br />
                                    【プティフール】</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </section>

    <section>
        <div>
            <div class="heading_store">
                <p>店舗詳細情報</p>
            </div>

            <div class="info-title">
                <h2>基本情報</h2>
            </div>
            <div class="info-table">
                <table cellspacing="15">
                    <tr>
                        <td class="td-important">住所</td>
                        <td class="td-explation">北海道札幌市中央区南３条西1丁目５番地 サンプルビル地下1F</td>
                    </tr>
                    <tr>
                        <td class="td-important">アクセス</td>
                        <td class="td-explation">地下鉄南北線すすきの駅徒歩３分
                        </td>

                    </tr>
                    <tr>
                        <td class="td-important">電話番号</td>
                        <td class="td-explation">011-567-7890
                        </td>

                    </tr>
                    <tr>
                        <td class="td-important">営業時間</td>
                        <td class="td-explation">昼の部：11:30～15:00 （料理L.O. 14:00 ドリンクL.O. 14:00）<br>
                            夜の部：18:00～翌0:00
                            （料理L.O. 23:00 ドリンクL.O. 23:00）</td>

                    </tr>
                    <tr>
                        <td class="td-important">定休日</td>
                        <td class="td-explation">日曜日</td>

                    </tr>
                    <tr>
                        <td class="td-important">総席数</td>
                        <td class="td-explation">25席</td>

                    </tr>
                </table>
            </div>
            <hr>
            <div class="info-title">
                <h2>その他</h2>
            </div>
            <div class="info-table">
                <table cellspacing="15">
                    <tr>
                        <td class="td-important">飲み放題</td>
                        <td class="td-explation">あり（120分飲み放題プラン2000円（コース料理のお客様に限定／要予約））</td>
                    </tr>
                    <tr>
                        <td class="td-important">食べ放題</td>
                        <td class="td-explation">なし</td>

                    </tr>
                    <tr>
                        <td class="td-important">お酒</td>
                        <td class="td-explation">ワイン充実</td>

                    </tr>
                </table>
            </div>
        </div>
    </section>

    </div>

    <script type="text/javascript">
        $(function() {

        $('.datepicker').datepicker(
        {
        onSelect: function(dateText, inst) {
        //今日の日付データを変数hidukeに格納
        var hiduke=new Date();

        //年・月・日・曜日を取得する
        var year =hiduke.getFullYear();
        var month = hiduke.getMonth()+1;
        var day = hiduke.getDate();

        //datetext の値を別の関数に入れて、日付が今日より過去か判定する
        //過去ならエラー文字を返す。
        if(month < 10 && day < 10){ var today=year+'/0'+month+'/0'+day; }else if(month < 10){ var today=year+'/0'+month+'/'+day;
            }else if(day< 10){ var today=year+'/'+month+'/0'+day; } if(today> dateText){
            alert('選択した日付は過去の日付です。');
            }else{
            $('#formday').val(dateText);
            }

            }
            });


            });



    </script>

</x-layout>
