@extends('layouts.master')

@section('title', '關於')

@section('content')

    <section>
        <div class="jumbotron">
            <div class="container text-center">
                <h1>關於台中前端社群</h1>
                <p>前端體驗  益碼當先</p>
            </div>
        </div>
    </section>

    <section id="services" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2>這個社群做了什麼?</h2>
                    <div class="border"></div>
                    <p>一群熱衷網站開發技術、分享新知、介面設計與使用者經驗的夥伴聚在一起，<br>從一次兩次的聚會，到下一季，現在來到了第二個年頭。
                        <br>這是我們現在正在做的，當然，三不五時會有更多的突發奇想。<br>
                        如果你也想加一，不要害羞！來就對了，跟我們一起聊聊吧！</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="300">
                        <i class="fa fa-code fa-5x"></i>
                        <h3><a href="#">網頁前端技術的推廣</a></h3>
                        <p>透過定期聚會討論特定主題，以及不定期的Workshop實作、跨區交流、實用元件、懶人包分享等等，讓參加的夥伴們共學共享網頁前端技術與設計相關知識。</p>
                    </div>
                    <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="600">
                        <i class="fa fa-comments fa-5x"></i>
                        <h3><a href="#">同好同業的交流平台</a></h3>
                        <p>覺得Coding沒捷徑，Bug除不盡嗎？</p>
                        <p>新手入門免驚惶，在這裡有很多前輩與夥伴，樂於與你一起討論分享，無論是專業技術與開發工具的應用操作、小撇步新玩意的好康逗相報，甚至是生活瑣事的告解閒聊，這裡就是分享職涯生活的好地方。</p>
                    </div>
                    <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="900">
                        <i class="fa fa-street-view fa-5x"></i>
                        <h3><a href="#">媒合人才 擴展人脈</a></h3>
                        <p>伯樂難尋？千里馬難遇？Come on~發摟密！ </p><p>
                            職務開缺、人才引薦、Coding的藝術、共工經驗談、職涯發展何處去，前端巷仔內的消息就在這裡。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="row">
                    <div class="col-lg-12 animated hiding" data-animation="fadeInDown">
                        <div id="testimonials" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                                <li data-target="#testimonials" data-slide-to="1"></li>
                                <li data-target="#testimonials" data-slide-to="2"></li>
                                <li data-target="#testimonials" data-slide-to="3"></li>
                                <li data-target="#testimonials" data-slide-to="4"></li>
                                <li data-target="#testimonials" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <p class="quote">就跟其他社群一樣，前端社群一開始也是困難重重，同時也反映著許多人對前端的不理解。然而，唯有透過行動、參與，你才能窺見前端的真實面貌。而沒有參加過社群的人，絕不會相信憑著參加社群就能成長；但事實是，只是要愛好技術的人才，都應該來參加社群。時代在改變，人需要改變。連歐●馬都能寫JavaScript了，你還有什麼理由不Change?
                                    </p>
                                    <p class="client">Willie / Developer</p>
                                </div>

                                <div class="item">
                                    <p class="quote">感謝社群夥伴們持續分享專業及職場上的心得，讓非本科的小弟實在獲益良多；另外也很謝謝社群為中部地區的同好們開展了更寬闊的前端視野。
                                    </p>
                                    <p class="client">志青 / Developer</p>
                                </div>

                                <div class="item">
                                    <p class="quote">我覺得台中前端是一個好地方，那是一個幫助前端設計師交流的場地，我們在這裡，可以學到很多基礎的，甚至也可以跟一些大大問到更深的前端設計知識，就像在看阿基師煮飯一樣，每一個動作都有一些小撇步，想要加強前端知識的你，一定要來的地方。
                                    </p>
                                    <p class="client">黑弟 / Developer</p>
                                </div>

                                <div class="item">
                                    <p class="quote">前端社群每周都會有不同的主題分享，比如說是css、sass，或是如何優化網站速度等等非常多相當實用的主題，對於有心想踏入前端的工程師或是設計師們有莫大的幫助，收穫非常的豐富，而且社團內有非常多熱心的同好，有問題時可以一起研究。</p>
                                    <p class="client">Waiting / Front-end Developer</p>
                                </div>

                                <div class="item">
                                    <p class="quote">前端工程師的專業煩而雜，而社群幫我不只幫我鋪平這條路，也用他們的熱情帶我前進。</p>
                                    <p class="client">Chuck / Developer</p>
                                </div>

                                <div class="item">
                                    <p class="quote">前端是近年來的顯學，甚至開始有公司設前端工程師的職務，其重要性可見一斑。前端相較於後端而言，或許技術成分稍微低，但對網站或APP卻是使用者體驗的重要一環。不論是設計師或後端工程師了解前端技術後，絕對能提升自身能力的深度與廣度。社群中也有相當多淺顯易懂的前端技術交流，可以帶領我們更容易的踏入前端的領域。</p>
                                    <p class="client">小P / Developer</p>
                                </div>
                            </div>
                            <a class="left carousel-control animated hiding"  data-animation="fadeInLeft" href="#testimonials" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control animated hiding"  data-animation="fadeInRight" href="#testimonials" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="page">
        <div class="container">
            <div class="content text-center">
                <div class="heading">
                    <h2>關於我們</h2>
                    <div class="border"></div>
                    <p>一群熱愛分享來自產業的夥伴，在台中前端社群為您提供更多服務</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="200">
                        <div class="profile-photo">
                            <img class="img-responsive" src="assets/img/team/IMG_0010.jpg" alt="">
                        </div>
                        <div class="bio">
                            <h4>老竹</h4>
                            <h5>粗工</h5>
                            <div class="border"></div>
                            <p>身處在這個學的越多越覺得不足的行業，<br>唯有接受不斷學習才能向上提升的宿命</p>
                            <!--<ul class="list-inline">
                                <li>
                                    <a href="http://www.facebook.com" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.twitter.com" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.linkedin.com" title="LinkedIn">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.github.com" title="GitHub">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="400">
                        <div class="profile-photo">
                            <img class="img-responsive" src="assets/img/team/IMG_0011.jpg" alt="">
                        </div>
                        <div class="bio">
                            <h4>William</h4>
                            <h5>網頁設計師</h5>
                            <div class="border"></div>
                            <p>在前端設計中打造更美好的一切<br>在分享思辯中激盪創意作品<br>這樣的工作我們總樂在其中</p>
                            <!--<ul class="list-inline">
                                <li>
                                    <a href="http://www.dribbble.com" title="Dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.pinterest.com" title="Pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.instagram.com" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-responsive" src="assets/img/team/IMG_0012.jpg" alt="">
                        </div>
                        <div class="bio">
                            <h4>Tank</h4>
                            <h5>Marketing(練功中)</h5>
                            <div class="border"></div>
                            <p>熱血、熱情、熱帶雨林加上熱呼呼的咖啡。<br>
                                以程式魂為目標，永無止境的工作。<br>
                                至今走的是行銷路，未來想走的程式魂。</p>
                            <!-- <ul class="list-inline">
                                 <li>
                                     <a href="http://www.twitter.com" title="Twitter">
                                         <i class="fa fa-twitter"></i>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="http://developer.android.com/index.html" title="Android Developers">
                                         <i class="fa fa-android"></i>
                                     </a>
                                 </li>
                                 <li>
                                     <a href="http://www.stackoverflow.com" title="Stack Overflow">
                                         <i class="fa fa-stack-overflow"></i>
                                     </a>
                                 </li>
                             </ul>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="200">
                        <div class="profile-photo">
                            <img class="img-responsive" src="assets/img/team/IMG_0013.jpg" alt="">
                        </div>
                        <div class="bio">
                            <h4>裕安</h4>
                            <h5>遊牧民族</h5>
                            <div class="border"></div>
                            <p>臺中科大資工系的學生，興趣是寫程式（Front-end）、寫程式（Back-end）還有寫程式（想不到了）。喜歡研究新東西，對新知識有源源不絕的動力，夢想是成為雞排王！
                            </p>
                            <!--<ul class="list-inline">
                                <li>
                                    <a href="http://www.plus.google.com" title="Google+">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.trello.com" title="Trello">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:john.doe@mail.com" title="Email">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="400">
                        <div class="profile-photo">
                            <img class="img-responsive" src="assets/img/team/IMG_0014.jpg" alt="">
                        </div>
                        <div class="bio">
                            <h4>Peter</h4>
                            <h5>前端設計</h5>
                            <div class="border"></div>
                            <p>我不一定會 Coding 一輩子，但我會懂得欣賞 Coding 的樂趣，剛好前端領域就是這麼好玩的出現在我生命中，Have fun and stay awesome.</p>
                            <!--<ul class="list-inline">
                                <li>
                                    <a href="http://www.dribbble.com" title="Dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.pinterest.com" title="Pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.instagram.com" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-responsive" src="assets/img/team/IMG_0015.jpg" alt="">
                        </div>
                        <div class="bio">
                            <h4>健宇</h4>
                            <h5>Engineer</h5>
                            <div class="border"></div>
                            <p>把抽象類別放在心裡，保持沉默，我們是推動歷史的人，程式碼記載著我們的過去，無論是好是壞，向前進，不畏懼，追隨自己的夢想，是延續歷史的動力。
                            </p>
                            <!--<ul class="list-inline">
                                <li>
                                    <a href="http://www.twitter.com" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://developer.android.com/index.html" title="Android Developers">
                                        <i class="fa fa-android"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.stackoverflow.com" title="Stack Overflow">
                                        <i class="fa fa-stack-overflow"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="200">
                        <div class="profile-photo">
                            <img class="img-responsive" src="assets/img/team/IMG_0018.jpg" alt="">
                        </div>
                        <div class="bio">
                            <h4>Jamie</h4>
                            <h5>網頁設計師</h5>
                            <div class="border"></div>
                            <p>處於視覺設計的彩色世界多年後<br>
                                很有事的讓自己一頭栽進coding黑洞中<br>
                                相信[會]跟[好]是截然不同的事<br>
                                繼續努力學習讓自己更好<br>
                                未來還是很有事的發掘自己更多的可能:D</p>
                            <!--<ul class="list-inline">
                                <li>
                                    <a href="http://www.facebook.com" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.twitter.com" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.linkedin.com" title="LinkedIn">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.github.com" title="GitHub">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="400">
                        <div class="profile-photo">
                            <img class="img-responsive" src="assets/img/team/IMG_0017.jpg" alt="">
                        </div>
                        <div class="bio">
                            <h4>桃花</h4>
                            <h5>Designer</h5>
                            <div class="border"></div>
                            <p>畢業以平面為主，偶然的機會接觸的網路相關的東西，忽然愛上它了，之後就瘋狂的研究網路相關的東西。
                                設計、語法、UI 甚至連網路企劃相關的也都嘗試過，網路世界每天都在變化，這讓我太沉迷了。</p>
                            <!--<ul class="list-inline">
                                <li>
                                    <a href="http://www.dribbble.com" title="Dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.pinterest.com" title="Pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.instagram.com" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 teammate animated hiding" data-animation="fadeInUp" data-delay="600">
                        <div class="profile-photo">
                            <img class="img-responsive" src="assets/img/team/IMG_0016.jpg" alt="">
                        </div>
                        <div class="bio">
                            <h4>亭儀</h4>
                            <h5>Mobile Developer</h5>
                            <div class="border"></div>
                            <p>關於夢想是什麼，老實說，我現在沒有答案。<br>
                                或許應該說，夢想不是一個答案，而是「開始」。<br>
                                做些對我來說，喜歡而值得的事，像是在活動裡看見滿足的笑臉而感到踏實；然後，從這裡開始。就像旅行，踏上旅程才知道，這路上有什麼；而我，或許更適合什麼。啟程、嘗試、再發現，走出屬於自己的私藏地圖。</p>
                            <!--<ul class="list-inline">
                                <li>
                                    <a href="http://www.twitter.com" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://developer.android.com/index.html" title="Android Developers">
                                        <i class="fa fa-android"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.stackoverflow.com" title="Stack Overflow">
                                        <i class="fa fa-stack-overflow"></i>
                                    </a>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="group text-center">
            <div class="animated hiding" data-animation="fadeIn">
                <i class="fa fa-group fa-3x"></i>
                <div id="feed"></div>
            </div>
        </div>
    </section>

    <section id="contact" class="page">
        <div class="container">
            <div class="content cover text-center">
                <div class="heading">
                    <h2>尋找我們</h2>
                    <div class="border"></div>
                    <p>你可以加入我們的 Facebook Group，在 KKTIX 加入我們的活動，或在 Flickr 看看我們活動的照片！</p>
                    <br>
                </div>
                <div class="row text-center">
                    <div class="col-lg-4 animated hiding" data-animation="fadeInRight" data-delay="600">
                        <a class="facebook" target="_blank" href="https://www.facebook.com/groups/taichung.f2e/">
                            <i class="fa fa-facebook fa-3x"></i>
                            <br>Facebook Group
                        </a>
                    </div>
                    <div class="col-lg-4 animated hiding" data-animation="fadeInDown" data-delay="300">
                        <a class="kktix" target="_blank" href="http://taichung-frontend.kktix.cc/">
                            <i class="fa fa-ticket fa-3x"></i>
                            <br>KKTIX
                        </a>
                    </div>
                    <div class="col-lg-4 animated hiding" data-animation="fadeInLeft" data-delay="600">
                        <a class="flickr" target="_blank" href="http://www.flickr.com/">
                            <i class="fa fa-flickr fa-3x"></i>
                            <br>Flickr(未啟用)
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop