@extends('layouts.master')
@section('title','國家美術館')
@section('content')
<!-- Banner -->
<section class="banner full">
    <article>
        <img src="images/museum1.jpg" alt="" />
    </article>
    <article>
        <img src="images/museum2.jpg" alt="" />
    </article>
    <article>
        <img src="images/museum3.jpg"  alt="" />
    </article>
    <article>
        <img src="images/museum4.jpg"  alt="" />
    </article>
    <article>
        <img src="images/museum5.jpg"  alt="" />
    </article>
</section>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/history.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>美術館歷史</h2>
                        </header>
                        <footer class="align-center">
                            <a href="{{route('history.index')}}" class="button alt">More</a>
                        </footer>
                    </div>
                </div>
            </div>
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/in.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>美術館內部樓層</h2>
                        </header>
                        <footer class="align-center">
                            <a href="{{route('internal.index')}}" class="button alt">More</a>
                        </footer>
                    </div>
                </div>
            </div>
            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/out.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>美術館周遭景點</h2>
                        </header>
                        <footer class="align-center">
                            <a href="{{route('external.index')}}" class="button alt">More</a>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="two" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p></p>
            <h2>留言</h2>
        </header>
    </div>
</section>
<br>
<form action="{{route('home.index')}}" method="POST" role="form">
    {{ method_field('POST') }}
    {{ csrf_field() }}
@if (count($messages) > 0)
    <div class="panel panel-default">
        <div class="panel-body">
            <center>
                <table class="table table-striped message-table" style="width:80%">
                    <!-- 表頭 -->
                    <thead>
                    <th>留言編號</th>
                    <th>會員標號</th>
                    <th>標題</th>
                    <th>內容</th>
                    <th>建立時間</th>
                    </thead>
                    <!-- 表身 -->
                    <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <!-- Message Name -->
                            <td class="table-text" width="7%">
                                <div>{{ $message->id }}</div>
                            </td>
                            <td class="table-text" width="7%">
                                <div>{{ $message->user_id}}</div>
                            </td>
                            <td class="table-text" width="25%">
                                <div>{{ $message->title }}</div>
                            </td>
                            <td class="table-text" width="45%">
                                <div>{{ $message->content }}</div>
                            </td>
                            <td class="table-text" width="16%">
                                <div>{{ $message->created_at }}</div>
                            </td>
                        </tr>
                    @endforeach
                    <tr><td colspan="5" align="center">
                            <a href="{{route('messages.index')}}"><button type="button" class="button special">
                                前往留言板
                            </button></a>
                    </td></tr>
                    </tbody>
                </table>
            </center>
        </div>
    </div>
@endif
</form>
<!-- Two -->
<section id="two" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p></p>
            <h2>本館介紹</h2>
        </header>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style2">
    <div class="inner">
        <header class="align-center">
            <p class="special">History and Future Prospects</p>
            <h2>歷史與新局</h2>
        </header>
        <blockquote>
            <b>國立臺灣美術館於民國77年（1988年）開館，民國93年7月整建後重新開館。本館以視覺藝術為主導，典藏並研究臺灣現代與當代美術發展特色；除提供各項展覽、長期與國外美術館交流、積極參與國際性重要展覽，並致力於多樣性的主題規劃特展與藝術教育推廣活動，提供民眾多元化欣賞藝術的環境。本館佔地面積約10公頃（含園區雕塑公園），館舍空間為地下二層、地上三層，總樓地板面積49,604平方公尺，其中館內展覽面積15‚601平方公尺。展覽空間包含展覽室、美術街、資訊轉運站、數位藝術方舟－數位創意資源中心等。在展覽空間的使用上，一、二樓為特展區，三樓為臺灣美術典藏常設展，戶外廣場則陳列雕塑精品。<br>
            本館建築強調開闊性與親和性，除展覽室外，並增設兒童繪本區、兒童遊戲室、影音藝術廳、教師資源室，以及各項學習、休閒空間，面積共5‚319平方公尺（1,609坪）。二十多年來已辦理近千檔展覽及數千場相關活動。</b>
        </blockquote>

        <header class="align-center">
            <p class="special">Presenting diversified and characteristic exhibitions</p>
            <h2>多元化的展示</h2>
        </header>
        <blockquote>
            <b>本館有各種不同形態及大小的展示空間。部分展示空間挑高近 6米，美術街挑高約11米。建築共分為三層，所有展示空間皆採東西向展延方式。三樓展覽室為本館典藏品的常設展示空間，以國美館典藏中的臺灣美術精品為展示標的。二樓以各項主題規劃展、臺灣資深藝術家或具有潛力的創作者的作品展為主。位於一樓的展覽室以呈現大型國際性展覽、雙年展、當代藝術特展為主，其中的108展覽室建置為一個360度環景數位影像的展示空間，提供數位聲像作品及跨領域藝術的展演。美術街為橫貫一樓各展覽室的公共空間，適合展示雕塑、裝置藝術等類型作品。<br>
            為引介國際藝術思潮與藝術創作，並展現國內藝術創作與研究成果，本館結合館內研究人員及館外傑出的策展人，每年策劃多樣類型的展覽。展覽可透過專業的導覽解說員，引導民眾從學習與聆賞中得到多元的藝術知識。</b>
        </blockquote>

        <header class="align-center">
            <p class="special">Providing educational resources and learning activities</p>
            <h2>多樣性的學習服務</h2>
        </header>
        <blockquote>
            <b>本館教育推廣服務對象，包括學校、家庭、專業與非專業、個人與團體（包含偏遠地區學校及弱勢團體）等。來賓除了參觀美術作品之外，亦可透過各種形式得到不同的服務，例如：專題講座、論壇、研討會、影片欣賞、假日活動、學習單、工作坊、教師研習、教師資源、訓練課程、導覽解說以及無線網路語音導覽等。此外，兒童遊戲室深受12歲以下的學童、親子及學生團體歡迎，藉由DIY的探索及體驗式的遊戲設計，啟發孩子們的創意，讓大家喜歡到美術館分享與學習。<br>
            影音藝術廳除定期播放國內、外優質紀錄片外，並不定時邀請導演舉辦映後座談，與民眾分享拍片心得。同時，本館大門廣場及園區並不定時安排相關推廣活動，提供民眾休閒時更多親炙藝術的機會。</b>
        </blockquote>

        <header class="align-center">
            <p class="special">Mapping trajectories of Taiwanese fine arts</p>
            <h2>刻畫台灣美術脈絡</h2>
        </header>
        <blockquote>
            <b>本館以臺灣美術為研究核心，負責策劃常設展的主題、出版研討會論文、美術學術季刊《臺灣美術》與臺灣美術相關系列叢書，歷來已出版《臺灣前輩美術家研究彙編》、《40年來臺灣地區美術發展研究彙編》、《臺灣美術評論全集》、《臺灣美術地方發展史全集》、《臺灣美術丹露系列專輯》等多元化的研究內容，凝聚學界觀點。並與大專院校合作，規劃臺灣美術主題研究、學術研討、論文出版等。定期規劃常設展，介紹本館重要典藏作品，以拓展臺灣美術史跨領域的界面，提昇本館與國際學術機構對話的空間，更深植臺灣美術主體性系列研究，結合典藏、展覽、推廣等功能，將本館打造為教育性與藝術性兼具的美術館。<br>
            鑑於本館對視覺藝術文化的研究已涵蓋影像、影音、攝影、多媒體、紀錄片等領域，臺灣當代影像創作亦逐漸向國際接軌，並隨著國內關注紀錄片的民眾及相關工作者逐年增加，對藝術領域的探討也日漸活絡，本館於96年設置影音藝術廳，提供影音藝術研究觀摩場域，並以影音藝術美學研究為探討觀點，規劃系列播映活動，並舉辦映後座談，以啟發國內觀眾的美學素養。</b>
        </blockquote>

        <header class="align-center">
            <p class="special">Preserving Taiwans art heritage</p>
            <h2> 珍藏守護台灣藝術</h2>
        </header>
        <blockquote>
            <b>本館依據三大核心主軸：「臺灣美術發展脈絡」、「媒材類別發展脈絡」、「藝術家風格與系譜」，研究調查國內外藝術生態與發展，並據以訂定典藏政策。蒐藏範圍包括明清時代臺灣文獻作品、日治時期、戰後現代主義時期、多元發展之當代藝術作品等，近年並兼顧亞洲藝術家作品典藏，期能更深化臺灣與亞洲當代藝術發展研究，拓展臺灣藝術與國際接軌的面寬和能量。歷經30餘年的蒐藏，累積逾16000件藝術作品的收藏，是建構臺灣美術史發展脈絡與研究藝術家風格研究之重要資料，亦可視為臺灣各時期社會的脈動、經濟與文化發展樣貌的縮影。<br>
            本館並肩負守護臺灣美術資產的重任，對於入藏藝術品給予適當地維護保存、定期狀況檢視與記錄、修復、裝裱、防止損害等保護措施。透過作品相關史料文獻蒐集、整理、編目、數位化、保存和研究，建置圖像與文字豐富的多元資料庫，提供學者研究及社會大眾參考使用，甚且強化以資訊科技輔助藏品之自動化管理與服務機制，及多元資訊傳播的守護且活用本館所典藏的藝術資產，成為國家文化競爭力的資本與全民共享的資源。<br>
            近年本館在藏品的應用上，包括主題展、常設展與國際交流展、捐贈展的規劃及教育推廣活動的辦理，並深入典藏品與臺灣美術史脈絡發展、風格的分析研究，且以典藏目錄、專輯、文宣出版品及網際網路資訊服務等多重傳播。此外，並從文化創意產業與生活美學推廣的角度，以創意設計延伸作品之原創元素與精神開發製作加值產品，期能以一種更貼近民眾生活的方式引介臺灣美術特色，及開拓本館藏品藝術本質以外的價值。</b>
        </blockquote>


        <header class="align-center">
            <p class="special">Accumulating and disseminating knowledge of arts-related fields</p>
            <h2>累積分享藝術知識</h2>
        </header>
        <blockquote>
            <b>館資料中心為一美術專門圖書館，館藏範圍以藝術相關之圖書、期刊、電子資料庫、多媒體資料為主。開館以來不斷累積各項美術資源，近來更積極徵集臺灣美術文獻，企圖建立館藏特色，是國內研究臺灣美術發展史最重要的資源中心。資料中心主要服務項目包括：書刊開架閱覽、網路資源服務、美術參考諮詢、資料複印服務、館藏資源指引、多媒體資料觀賞，及文獻傳遞服務等工作，提供深度內涵與友善分享的知識服務品質。針對12歲以下孩童閱讀的需求，本館特別規劃兒童繪本區，營造一個以「美術」為藍本，結合「美術館」特色，彰顯繪本與藝術特質的閱讀空間，希望藉由繪本的故事性鋪陳，引導孩童欣賞繪本的藝術語彙，培養孩童美感認知與閱讀習性，讓文化藝術的種子永續深耕與茁壯。</b>
        </blockquote>


        <header class="align-center">
            <p class="special">Promoting Digital Arts</p>
            <h2>推動數位藝術</h2>
        </header>
        <blockquote>
            <b>本館在民國96年（2007年）3月25日成立「數位藝術方舟－數位創意資源中心」。將自91年（2002年）起承辦「數位藝術創作計畫」所累積的經驗與心得，結合人才培育計畫，作一整合、分享與呈現。「數位藝術方舟－數位創意資源中心」不僅提供一個靜態陳列的展場，同時更專責推動臺灣數位藝術創作植根工程、籌辦國際數位藝術大展、推介藝術家參與國際性展覽，並媒合跨領域共同創作案。它既是一個學習、教育與創意結合的複合性空間，也是深度耕耘臺灣成為國際數位藝術發展一環的重要據點之一。</b>
        </blockquote>


        <header class="align-center">
            <p class="special">Conclusion</p>
            <h2>結語</h2>
        </header>
        <blockquote>
            <b>身為國家級美術館，本館除了以展現臺灣藝術創作的特色與發展自許，更積極強化藝術研究、延展臺灣藝術的系譜研究、開展國際對話與視野，提升國家文化藝術的內在精神與涵養。在文化交流上，則強化館際合作，並與國際接軌，加強與國內、外美術館和專家學者的共同合作，規劃啟發視覺文化、分享藝術價值的展覽活動；同時以多元化的推廣藝術教育活動，引介臺灣藝術的特色，讓民眾了解藝術的精華，而達到以藝術向下紮根並向上延展文化認知的目標。</b>
        </blockquote>
    </div>
</section>
@endsection
