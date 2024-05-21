<?php
/*
Template Name: recruit
*/
/* recruit */
?>

<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
    <p>Loading...</p>
    <div id="loading-screen"></div>
</div>-->

<main class="l-contents-main page_main recruit_main">

<div class="recruit_bk_blue">
<section class="recruit_main_img">
<!--main img-->
<div class="page_title-pic recruit_pic">
<picture>
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-main-bk.webp" type="image/webp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-main-bk.jpg" alt="採用情報">
</picture>
</div>

<p class="recruit_main_copy">
  家づくりを<br>
  縁の下から支える<br>
  プロになる。
</p>
</section>

<!-- トップテキスト -->
<section class="recruit_top_text">
  <p>家づくりってどうやって成り立っているんだろう。<br class="pc_br">
  想像もしたことない人たちが沢山力を合わせて創っているはず。<br class="pc_br">
  だって大切な家族が住まう家だから。</p>

  <p>マルサンはプレカット工場設立以来、<br class="pc_br">
  数えきれないほどの住宅や建物の構造部材を加工・提供してきました。
  </p>

  <p class="item_after">「明日の家づくりを創る」</p>

  <p>これまでも、これからも。マルサンは住宅業界が抱える課題や問題に<br class="pc_br">向き合い、未来のための家づくりを支えていきます。
  </p>
</section>
</div>


<div class="recruit_content page_content">

<!-- タブ切り替え -->
<section class="pageRecruit">
  <div class="pageRecruit_list">
    <h1 class="page_recruit_h1">職種紹介</h1>
      <ul class="tab-button">
        <li class="tab tab-01 is-active">加工機オペレーター</li>
        <li class="tab tab-02">CADオペレーター</li>
        <li class="tab tab-03">セールスオペレーター</li>
      </ul>

    <!--タブを切り替えて表示するコンテンツ-->
    <ul class="tab-contents">

      <!--===================
        加工機おペーレータ
      ===================ー-->
      <li class="pageRecruit_content tab-01 is-display">
        <div class="pageRecruit_top_content">
          <!--概要-->
          <section class="page_recruit_gaiyou recruit_section">
            <div class="pageRecruit_list_text gaiyou_box">
              <h2 class="gaiyou_h2 page_recruit_h2 color">加工機オペレーター</h2>
              <dl class="pageRecruit_list_dl">
                <dt>ハウスロジスティクスの中心</dt>
                <dd>質の高い製品づくりを通じて、<br class="pc_br">家づくりの安心・安全を支えます。</dd>
              </dl>
            </div>
            <div class="gaiyou_pic">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work01-1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work01-1.jpg" alt="加工機オペレーター">
              </picture>
            </div>
          </section>

          <!-- 先輩社員インタビュー -->
          <section class="page_recruit_interview recruit_section">
              <h2 class="interview_h2 page_recruit_h2 color">先輩社員インタビュー</h2>
              <div class="pageRecruit_list_text interview_box">
                <div class="gaiyou_pic">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work01-2.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work01-2.jpg" alt="先輩社員インタビュー">
                  </picture>
                </div>
                <dl class="pageRecruit_list_dl">
                  <dt class="senior_name"><span class="name">池田 佳裕</span><br>製造部 製造二課</dt>
                  <dd>
                    <dl>
                      <dt>勤続年数：</dt>
                      <dd>7年</dd>
                    </dl>
                    <dl>
                      <dt>出身高校：</dt>
                      <dd>福島商業高校</dd>
                    </dl>
                    <dl>
                      <dt>趣味：</dt>
                      <dd>歌うこと</dd>
                    </dl>
                    <dl>
                      <dt>性格：</dt>
                      <dd>無理はしない</dd>
                    </dl>
                  </dd>
                </dl>
              </div>
              <p class="interview_text">
              頑張りすぎず程々に、とは思っていますが、工場である以上、生産性は常に考えないといけません。いまより精度と効率を上げる働き方、段取りを考えながら仕事をこなします。現状、景気の良い業界とは言えませんが、成果が出ればやりがいも生まれてきます。
              </p>
          </section>
        </div>

        <div class="recruit_bk_blue02">
        <!-- 募集要項 -->
        <section class="page_recruit_job recruit_section">
          <h2 class="job_h2 page_recruit_h2">募集要項</h2>
            <div class="js-scrollable-wrap">
              <table class="recruit_table page_table page_box js-scrollable">
                <colgroup>
                <col span="2" />
                </colgroup>
                <tr>
                  <th>職種</th>
                  <td>加工機オペレーター</td>
                </tr>
                <tr>
                  <th>雇用形態</th>
                  <td>正社員</td>
                </tr>
                <tr>
                  <th>勤務地</th>
                  <td>〒964-0315<br>福島県二本松市成田字柏崎214番地</td>
                </tr>
                <tr>
                  <th>基本給</th>
                  <td>175,000～250,000円（年齢・経験・能力等を考慮し決定）</td>
                </tr>
                <tr>
                  <th>勤務時間</th>
                  <td>8:00-17:00（1月～3月）<br>8:00-17:30（4月～12月）<br>休憩90分(10:00・15:00…15分 12:00～13:00)
                    <dl>
                      <dt>【出勤について】</dt>
                      <dd>会社カレンダーによりおおよそ隔週で週休二日になります。</dd>
                    </dl>
                    <dl>
                      <dt>【休日出勤について】</dt>
                      <dd>受注状況・生産状況によりお願いする場合がありますが、基本的には土曜の出勤だけで、法定休日(日曜・祝日)は休みになります。</dd>
                    </dl>
                    <dl>
                      <dt>【残業について】</dt>
                      <dd>受注状況・生産状況によりますが、多くても1日2時間程度まで、日勤で言えば19時くらいまでです。残業の場合、定時から10分間の休憩があります。</dd>
                    </dl>
                    <dl>
                      <dt>【夜勤について】</dt>
                      <dd>一部のラインでは二交代制での生産をしていますので、習熟後に夜勤に入っていただく可能性があります。</dd>
                    </dl>
                    <dl>
                      <dt>【休暇について】</dt>
                      <dd>有給休暇は入社6か月後に付与。</dd>
                    </dl>
                  </td>
                </tr>
                <tr>
                  <th>休日・休暇</th>
                  <td>日曜・祝祭日、年間休日：108日</td>
                </tr>
                <tr>
                  <th>待遇・福利厚生</th>
                  <td>交通費全額支給(当社規定による)、社会保障完備、制服貸与、有給休暇、慶弔休暇</td>
                </tr>
              </table>
            </div>

            <div class="entry-button">
              <a href="<?php echo home_url('/'); ?>contact">エントリー</a>
            </div>
          </section>

        <!-- 採用の流れ -->
        <section class="page_recruit_flow recruit_section">
          <h2 class="flow_h2 page_recruit_h2">採用の流れ</h2>
          <p>エントリーから内定までの間に、工場見学や個別説明会を実施しています。
            実際に働いている社員の姿や声を聞くことで、理解を深めた上で入社していただけます。
          </p>

          <ul class="recruit_flow_list">
            <li>
              <div class="flow_item"><p>エントリー</p></div>
              <p>当社HPの問合せフォームから必要事項と応募したい旨を記載して送信してください。</p>
            </li>
            <li>
              <div class="flow_item"><p>履歴書送付<br>書類審査</p></div>
              <p>数日以内に当社から案内をいたします。郵送またはメールにて履歴書を送っていただきます。</p>
            </li>
            <li>
              <div class="flow_item"><p>筆記試験<br>面接</p></div>
              <p>一般常識などの簡単な筆記試験を受けていただいた後、面接を行います。</p>
            </li>
            <li>
              <div class="flow_item"><p>内定</p></div>
              <p>二週間以内を目途に当社から選考結果についてご連絡いたします。</p>
            </li>
          </ul>
        </section>

        <!-- 仕事内容 -->
        <section class="page_recruit_work recruit_section">
          <h2 class="work_h2 page_recruit_h2">仕事内容</h2>
          <p class="page_recruit_work_text">加工機と制御用のP C を操作して、製材品を加工して木造住宅用の部材を生産します。C A D で出力されたデータの取り込み、加工順に合わせた材料の準備と加工機への投入、加工された製品( 完成品) の検品・梱包と出荷ヤードへの搬出を行います。加工機で対応できない特殊加工が必要となる場合もあり、そういった加工は大工技能を持つベテラン作業員が作業を担当しています。また、今後に備えて若手への技術継承も行っています。シフト制のため、予定が組みやすい。業務上必要な資格は会社負担で取得可能。木材の知識が身に付き、余暇、趣味に役立ちます。
          </p>
        </section>

        <!-- この仕事の良いところ -->
        <section class="page_recruit_merit recruit_section">
          <h2 class="merit_h2 page_recruit_h2">この仕事の良いところ</h2>
          <ul class="page_recruit_merit_list">
            <li><span class="num">01</span>シフト制のため、予定が組みやすい。</li>
            <li><span class="num">02</span>業務上必要な資格は会社負担で取得可能。</li>
            <li><span class="num">03</span>木材の知識が身に付き、余暇、趣味に役立ちます。</li>
          </ul> 
        </section>

        <!-- 1日の流れ -->
        <section class="page_recruit_schedul recruit_section">
          <h2 class="schedul_h2 page_recruit_h2">一日の流れ</h2>
          <dl class="schedule_dl">
            <dt>7:45</dt>
            <dd>毎朝のラジオ体操～全体朝礼～各部署ごとのミーティング</dd>
          </dl>
          <dl class="schedule_dl">
            <dt>8:00</dt>
            <dd>今日の担当ラインに入って作業開始</dd>
          </dl>
          <dl class="schedule_dl">
            <dt>10:00</dt>
            <dd>休憩</dd>
          </dl>
          <dl class="schedule_dl">
            <dt>10:15</dt>
            <dd>作業再開</dd>
          </dl>
          <dl class="schedule_dl">
            <dt>12:00</dt>
            <dd>お昼休憩<br>※お弁当(一食350円)が当日朝まで注文可能<br>※テレビ・冷暖房・給湯設備のある食堂スペースあり</dd>
          </dl>
          <dl class="schedule_dl">
            <dt>13:00</dt>
            <dd>午後の作業開始</dd>
          </dl>
          <dl class="schedule_dl">
            <dt>15:00</dt>
            <dd>休憩</dd>
          </dl>
          <dl class="schedule_dl">
            <dt>15:15</dt>
            <dd>作業再開</dd>
          </dl>
          <dl class="schedule_dl">
            <dt>17:20</dt>
            <dd>作業を終えてラインの清掃</dd>
          </dl>
          <dl class="schedule_dl">
            <dt>17:30</dt>
            <dd>終業 帰宅</dd>
          </dl>
        </section>

        <!-- よくある質問 -->
        <section class="page_recruit_question page_section recruit_section">
          <h2 class="question_h2 page_recruit_h2">よくある質問</h2>
          <ul>
            <li>
              <p class="question"><span class="qa">Q</span>体力・筋力が必要ですか？</p>
              <p class="answer"><span class="qa">A</span>扱うのが木材のため、ある程度の力は必要ですが、女性でも可能です。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>夜勤はありますか？</p>
              <p class="answer"><span class="qa">A</span>一部のラインでは二交代制での生産をしていますので、習熟後に夜勤に入っていただく可能性があります。</p>
            </li>

            <li>
              <p class="question"><span class="qa">Q</span>残業はどのくらいありますか？</p>
              <p class="answer"><span class="qa">A</span>受注状況・生産状況によりますが、多くても1日2時間程度まで、日勤で言えば19時くらいまでです。残業の場合、定時から10分間の休憩があります。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>週休二日制でしょうか？</p>
              <p class="answer"><span class="qa">A</span>完全週休二日制ではありませんが、会社カレンダーによりおおよそ隔週で週休二日としています。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>休日出勤はありますか？</p>
              <p class="answer"><span class="qa">A</span>受注状況・生産状況によりお願いする場合がありますが、基本的には土曜の出勤だけで、法定休日(日曜・祝日)は休みになります。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>女性はどのくらいの人数働いていますか？</p>
              <p class="answer"><span class="qa">A</span>加工機オペレーターとしては2020/9月現在で0人ですが、過去にのべ数名の方に勤務いただいた実績があります。また、他職種ですが工場内の業務に従事している方が1名います。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>喫煙は可能ですか？</p>
              <p class="answer"><span class="qa">A</span>休憩時間に指定の喫煙場所での喫煙が可能です。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>社外の人との関わりはありますか？</p>
              <p class="answer"><span class="qa">A</span>ラインの中での仕事になりますので社外の人との接触はほぼありません。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>自分の意見や考え方を仕事に反映させることは可能ですか？</p>
              <p class="answer"><span class="qa">A</span>作業のムリ・ムラ・ムダの改善のための提案は大歓迎です。また、4半期毎に教育目的の個人面談を実施していますので、その折に相談・提案することで仕事に反映することも出来ます。</p>
            </li>
          </ul>
        </section>

        <div class="entry-button">
            <a href="<?php echo home_url('/'); ?>contact">エントリー</a>
        </div>

        <ul class="other_list">
          <li>
            <div class="other_list_btn">
              <a href="<?php echo home_url('/'); ?>contact">CADオペレーター</a>
            </div>
          </li>
          <li>
            <div class="other_list_btn">
              <a href="<?php echo home_url('/'); ?>contact">セールスドライバー</a>
            </div>
          </li>
        </ul>
        </div>
      </li>

      <!--===================
        加工機おペーレータ
      ===================ー-->
      <li class="pageRecruit_content tab-02">
          <p>テキスト</p>
      </li>

      <li class="pageRecruit_content tab-03">
      <p>テキスト</p>
      </li>

    </ul>
  </div>
</section>

</div>

<!--====================================================

  Contact
  お問い合わせ

=====================================================-->
<?php get_template_part('contact'); ?>

</main>

<?php get_footer(); ?>