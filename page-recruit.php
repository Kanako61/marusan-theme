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
  <span class="copy_01">家づくりを</span><br>
  <span class="copy_02">縁の下から支える</span><br>
  <span class="copy_03">プロになる。</span>
</p>
</section>

<!-- トップテキスト -->
<section class="recruit_top_text">
  <p>家づくりってどうやって成り立っているんだろう。<br class="pc_br"></p>
  <p>
  マルサンはプレカット工場設立以来、<br class="pc_br">
  数えきれないほどの住宅や建物の構造部材を加工・提供してきました。</p>
  <p class="item_after">「明日の家づくりを創る」</p>
  <p>これまでも、これからも。マルサンは住宅業界が抱える課題や問題に<br class="pc_br">向き合い、未来のための家づくりを支えていきます。
  </p>
</section>
</div>


<div class="recruit_content page_content">

<!-- タブ切り替え -->
<section class="pageRecruit" id="pageRecruit">
  <div class="pageRecruit_list">
    <h1 class="page_recruit_h1">職種紹介</h1>
      <ul class="tab-button">
        <li class="tab tab-01 is-active">加工機オペレーター</li>
        <li class="tab tab-02">CADオペレーター</li>
        <li class="tab tab-03">ドライバー</li>
      </ul>

    <!--タブを切り替えて表示するコンテンツ-->
    <ul class="tab-contents">

      <!--=======================================================================

        加工機オペレーター

      ======================================================================ー-->
      <li class="pageRecruit_content tab-01 is-display" id="tab-01">
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
                  <dt class="senior_name"><span class="name">池田 圭佑</span><br>製造部 製造二課</dt>
                  <dd>
                    <dl>
                      <dt>入社年：</dt>
                      <dd>2017年</dd>
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
              工場作業と聞くと同じ作業の繰り返しをイメージするかもしれませんが、お客様の家は<span class="color">一軒一軒違う</span>ため、寸法や形を都度確認しながらの作業になります。<span class="color">安全を最優先</span>に、より精度と効率を上げるための方法を考えながら仕事をしています。この仕事のやりがいは、<span class="color">気持ちを込めて作った製品が完成した瞬間</span>です。
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
                    <dl class="recruit_table_dl">
                      <dt>【出勤について】</dt>
                      <dd>月当たり、1~2回の土曜出勤があります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>【休日出勤について】</dt>
                      <dd>受注状況・生産状況によりお願いする場合がありますが、基本的には土曜の出勤だけで、法定休日(日曜・祝日)は休みになります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>【残業について】</dt>
                      <dd>受注状況・生産状況によりますが、多くても1日2時間程度まで、日勤で言えば19時くらいまでです。残業の場合、定時から10分間の休憩があります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>【夜勤について】</dt>
                      <dd>一部のラインでは二交代制での生産をしていますので、習熟後に夜勤に入っていただく可能性があります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
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
              <a href="<?php echo home_url('/'); ?>recruit-entory">エントリー</a>
            </div>

            <div class="topBK-btn">
              <a href="#pageRecruit">上部に戻る</a>
            </div>
          </section>

        <!-- 仕事内容 -->
        <section class="page_recruit_work recruit_section">
          <h2 class="work_h2 page_recruit_h2">仕事内容</h2>
          <p class="page_recruit_work_text">加工機と制御用のP C を操作して、製材品を加工して木造住宅用の部材を生産します。C A D で出力されたデータの取り込み、加工順に合わせた材料の準備と加工機への投入、加工された製品( 完成品) の検品・梱包と出荷ヤードへの搬出を行います。加工機で対応できない特殊加工が必要となる場合もあり、そういった加工は大工技能を持つベテラン作業員が作業を担当しています。また、今後に備えて若手への技術継承も行っています。シフト制のため、予定が組みやすい。業務上必要な資格は会社負担で取得可能。木材の知識が身に付き、余暇、趣味に役立ちます。
          </p>
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
        </section>

        <!-- この仕事の良いところ -->
        <section class="page_recruit_merit recruit_section">
          <h2 class="merit_h2 page_recruit_h2">この仕事の良いところ</h2>
          <ul class="page_recruit_merit_list">
            <li><span class="num">01</span>シフト制のため、予定が組みやすい。</li>
            <li><span class="num">02</span>業務上必要な資格は会社負担で取得可能。</li>
            <li><span class="num">03</span>木材の知識が身に付き、余暇、趣味に役立ちます。</li>
          </ul> 
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
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
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
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
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
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
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
        </section>

        <div class="entry-button">
            <a href="<?php echo home_url('/'); ?>recruit-entory">エントリー</a>
        </div>

        <ul class="other_list">
          <li>
            <div class="other_list_btn other_btn_02">
              <a href="#tab-02">CADオペレーター</a>
            </div>
          </li>
          <li>
            <div class="other_list_btn other_btn_03">
              <a href="#tab-03">ドライバー</a>
            </div>
          </li>
        </ul>
        </div>
      </li>


      <!--=======================================================================

        CADオペレーター

      ======================================================================ー-->
      <li class="pageRecruit_content tab-02" id="tab-02">
        <div class="pageRecruit_top_content">
          <!--概要-->
          <section class="page_recruit_gaiyou recruit_section">
            <div class="pageRecruit_list_text gaiyou_box">
              <h2 class="gaiyou_h2 page_recruit_h2 color">CADオペレーター</h2>
              <dl class="pageRecruit_list_dl">
                <dt>平面を立体に</dt>
                <dd>CADソフトを用いてお客様の加工用図面を作成します。</dd>
              </dl>
            </div>
            <div class="gaiyou_pic">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work02-1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work02-1.jpg" alt="CADオペレーター">
              </picture>
            </div>
          </section>

          <!-- 先輩社員インタビュー -->
          <section class="page_recruit_interview recruit_section">
              <h2 class="interview_h2 page_recruit_h2 color">先輩社員インタビュー</h2>
              <div class="pageRecruit_list_text interview_box">
                <div class="gaiyou_pic">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work02-2.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work02-2.jpg" alt="先輩社員インタビュー">
                  </picture>
                </div>
                <dl class="pageRecruit_list_dl">
                  <dt class="senior_name"><span class="name">髙野 里菜</span><br>技術課</dt>
                  <dd>
                    <dl class="recruit_table_dl">
                      <dt>入社年：</dt>
                      <dd>2020年</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>出身高校：</dt>
                      <dd>福島工業高校</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>趣味：</dt>
                      <dd>愛犬とたわむれる</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>性格：</dt>
                      <dd>優柔不断</dd>
                    </dl>
                  </dd>
                </dl>
              </div>
              <p class="interview_text">
              家を建てるという、<span class="color">一生に一度とも言えるお買い物のお手伝い</span>をしていることに誇りを持っています。私がCAD入力をして実際に<span class="color">完成した物件</span>を見学した時はとても感動しました。その家で実際に暮らしている人がいることを想像すると、とても<span class="color">責任のある仕事</span>でもあると感じ、日々仕事の精度や効率を上げられるように精進しています。
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
                  <td>CADオペレーター</td>
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
                    <dl class="recruit_table_dl">
                      <dt>【出勤について】</dt>
                      <dd>月当たり、1~2回の土曜出勤があります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>【休日出勤について】</dt>
                      <dd>受注状況・生産状況によりお願いする場合がありますが、基本的には土曜の出勤だけで、法定休日(日曜・祝日)は休みになります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>【残業について】</dt>
                      <dd>受注状況・生産状況によりますが、多くても1日2時間程度まで、日勤で言えば19時くらいまでです。残業の場合、定時から10分間の休憩があります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>【夜勤について】</dt>
                      <dd>一部のラインでは二交代制での生産をしていますので、習熟後に夜勤に入っていただく可能性があります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
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
              <a href="<?php echo home_url('/'); ?>recruit-entory">エントリー</a>
            </div>

            <div class="topBK-btn">
              <a href="#pageRecruit">上部に戻る</a>
            </div>
          </section>

        <!-- 仕事内容 -->
        <section class="page_recruit_work recruit_section">
          <h2 class="work_h2 page_recruit_h2">仕事内容</h2>
          <p class="page_recruit_work_text">お客様(取引先工務店様)が作成した図面を元に、プレカット専用CADを使い図面のデータ入力をしていく仕事です。CADの入力にあたってお客様との打合せに伺ったり、加工の詳細について電話やメールを使ったやり取りも行います。入力したデータは、お客様への見積りの元データとしても使われ、工場では、CADで入力したデータや図面を元にして加工が行われます。
          </p>
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
        </section>

        <!-- この仕事の良いところ -->
        <section class="page_recruit_merit recruit_section">
          <h2 class="merit_h2 page_recruit_h2">この仕事の良いところ</h2>
          <ul class="page_recruit_merit_list">
            <li><span class="num">01</span>交代勤務もなく、家庭と両立しながら仕事をすることができます。</li>
            <li><span class="num">02</span>自分で家を新築する際に、仕事で得た知識を活かすことができます。</li>
            <li><span class="num">03</span>CAD以外のPCソフトを使用する機会も多く、スキルアップに繋がります。</li>
          </ul> 
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
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
            <dd>今日の作業開始</dd>
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
            <dd>お昼休み　自席・食堂などで昼食やお昼寝など<br>※お弁当(一食350円)が当日朝まで注文可能<br>※テレビ・冷暖房・給湯設備のある食堂スペースあり</dd>
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
            <dd>作業日報を作成、上司に提出</dd>
          </dl>
          <dl class="schedule_dl">
            <dt>17:30</dt>
            <dd>終業 帰宅</dd>
          </dl>
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
        </section>

        <!-- よくある質問 -->
        <section class="page_recruit_question page_section recruit_section">
          <h2 class="question_h2 page_recruit_h2">よくある質問</h2>
          <ul>
            <li>
              <p class="question"><span class="qa">Q</span>CADの知識がなくても大丈夫ですか？</p>
              <p class="answer"><span class="qa">A</span>汎用CAD(JWCADなど)の知識があった方が飲み込みは早いとは思いますが、知識がなくてもわかるように教えていきますので問題ありません。実際、未経験から始めて活躍している社員も多数います。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>残業はありますか？</p>
              <p class="answer"><span class="qa">A</span>はい。受注状況・生産状況により残業していただく場合があります。</p>
            </li>

            <li>
              <p class="question"><span class="qa">Q</span>女性はどのくらいの人数働いていますか？</p>
              <p class="answer"><span class="qa">A</span>2020/9現在、CADオペレーター全12人中6人が女性です。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>産休・育休の取得実績を教えてください。</p>
              <p class="answer"><span class="qa">A</span>産休・育休を取得後、復職した方が複数名在職しています。また、他部門にも育児都合で時短(パート)勤務をされている方もいます。</p>
            </li>
          </ul>
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
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
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
        </section>

        <div class="entry-button">
            <a href="<?php echo home_url('/'); ?>recruit-entory">エントリー</a>
        </div>

        <ul class="other_list">
          <li>
            <div class="other_list_btn other_btn_01">
              <a href="#tab-01">加工機オペレーター</a>
            </div>
          </li>
          <li>
            <div class="other_list_btn other_btn_03">
              <a href="#tab-03">ドライバー</a>
            </div>

          </li>
        </ul>
        </div>
      </li>

      <!--=======================================================================

        ドライバー

      ======================================================================ー-->

      <li class="pageRecruit_content tab-03" id="tab-03">
        <div class="pageRecruit_top_content">
          <!--概要-->
          <section class="page_recruit_gaiyou recruit_section">
            <div class="pageRecruit_list_text gaiyou_box">
              <h2 class="gaiyou_h2 page_recruit_h2 color">ドライバー</h2>
              <dl class="pageRecruit_list_dl">
                <dt>工場とお客様をつなぐ</dt>
                <dd>資材搬入や製品運搬を行い、工場ラインとお客様の架け橋となります。</dd>
              </dl>
            </div>
            <div class="gaiyou_pic">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work03-1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work03-1.jpg" alt="ドライバー">
              </picture>
            </div>
          </section>

          <!-- 先輩社員インタビュー -->
          <section class="page_recruit_interview recruit_section">
              <h2 class="interview_h2 page_recruit_h2 color">先輩社員インタビュー</h2>
              <div class="pageRecruit_list_text interview_box">
                <div class="gaiyou_pic">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work03-2.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-work03-2.jpg" alt="先輩社員インタビュー">
                  </picture>
                </div>
                <dl class="pageRecruit_list_dl">
                  <dt class="senior_name"><span class="name">野口 貴彦</span><br>管理部 管理課</dt>
                  <dd>
                    <dl>
                      <dt>入社年：</dt>
                      <dd>2014年</dd>
                    </dl>
                    <dl>
                      <dt>出身高校：</dt>
                      <dd>小野高校</dd>
                    </dl>
                    <dl>
                      <dt>趣味：</dt>
                      <dd>ドライブ</dd>
                    </dl>
                    <dl>
                      <dt>性格：</dt>
                      <dd>集中力がある</dd>
                    </dl>
                  </dd>
                </dl>
              </div>
              <p class="interview_text">
              私が入社した当初は木造建築については、<span class="color">ほとんど何もわからない状態</span>でしたが、<span class="color">上司の指導や先輩のアドバイス</span>をもらい、今でもこの仕事を続けられているのだと思います。仕事で心掛けていることは、「<span class="color">クレーム０</span>」です。
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
                  <td>ドライバー</td>
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
                    <dl class="recruit_table_dl">
                      <dt>【出勤について】</dt>
                      <dd>月当たり、1~2回の土曜出勤があります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>【休日出勤について】</dt>
                      <dd>受注状況・生産状況によりお願いする場合がありますが、基本的には土曜の出勤だけで、法定休日(日曜・祝日)は休みになります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>【残業について】</dt>
                      <dd>受注状況・生産状況によりますが、多くても1日2時間程度まで、日勤で言えば19時くらいまでです。残業の場合、定時から10分間の休憩があります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>【夜勤について】</dt>
                      <dd>一部のラインでは二交代制での生産をしていますので、習熟後に夜勤に入っていただく可能性があります。</dd>
                    </dl>
                    <dl class="recruit_table_dl">
                      <dt>【休暇について】</dt>
                      <dd>有給休暇は入社6か月後に付与。</dd>
                    </dl>
                  </td>
                </tr>
                <tr>
                  <th>必須資格</th>
                  <td>中型自動車免許・玉掛け技能講習・小型移動式クレーン技能講習</td>
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
              <a href="<?php echo home_url('/'); ?>recruit-entory">エントリー</a>
            </div>

            <div class="topBK-btn">
              <a href="#pageRecruit">上部に戻る</a>
            </div>
          </section>

        <!-- 仕事内容 -->
        <section class="page_recruit_work recruit_section">
          <h2 class="work_h2 page_recruit_h2">仕事内容</h2>
          <p class="page_recruit_work_text">工場で加工した製品(プレカット材)や、一部の住宅資材を建築現場にお届け するお仕事です。プレカット材は現場作業予定に応じて搬入しますが、朝イチ(8:00)までに現場にお届けする場合が多く、距離によっては折り返して1日に何度か搬入する場合もあります。現場搬入時はユニックによる荷降ろしが基本となります。また、その他に小口の素材品(加工していない製材品)の受注品の配達も行います。
          </p>
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
        </section>

        <!-- この仕事の良いところ -->
        <section class="page_recruit_merit recruit_section">
          <h2 class="merit_h2 page_recruit_h2">この仕事の良いところ</h2>
          <ul class="page_recruit_merit_list">
            <li><span class="num">01</span>業務上必要な資格は会社負担で取得可能</li>
            <li><span class="num">02</span>色々な住宅建築の現場に行くので、家が建つ過程や構造を知ることができます。</li>
          </ul> 
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
        </section>

        <!-- 1日の流れ -->
        <section class="page_recruit_schedul recruit_section">
          <h2 class="schedul_h2 page_recruit_h2">一日の流れ</h2>
          <p>※現場までの距離により、大幅に変わります。</p><br>
          <p>朝イチ現場着</p>
          <p>↓</p>
          <p>荷降ろし次第、帰社、折返し分の荷積み</p>
          <p>↓</p>
          <p>折返しの現場へ</p>
          <p>↓</p>
          <p>翌日分の荷積みの後、運転日報を記入・提出して終業</p>
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
        </section>

        <!-- よくある質問 -->
        <section class="page_recruit_question page_section recruit_section">
          <h2 class="question_h2 page_recruit_h2">よくある質問</h2>
          <ul>
            <li>
              <p class="question"><span class="qa">Q</span>使用するトラックは何トン車ですか？</p>
              <p class="answer"><span class="qa">A</span>2t～7tです。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>ユニックや玉掛け、フォークリフトなどの資格は必要ですか？</p>
              <p class="answer"><span class="qa">A</span>積み込み・荷降ろしには必要になります。<br>※業務上必要な資格は費用を会社が負担して資格することができます。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>早出・残業はありますか？</p>
              <p class="answer"><span class="qa">A</span>遠方現場の場合、早出や残業となる場合があります。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>荷降ろし以外に、現場で何か対応することはありますか？</p>
              <p class="answer"><span class="qa">A</span>産工事日程の確認や他物件の搬入路・現場の確認など、お客様からの情報収集を通した営業活動も行います。</p>
            </li>
            <li>
              <p class="question"><span class="qa">Q</span>運搬と付随する業務以外に作業をすることはありますか？</p>
              <p class="answer"><span class="qa">A</span>出荷が少ない場合などに工場内での作業（積み込みや材料集め）をしていただくことがあります。</p>
            </li>
          </ul>
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
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
          <div class="topBK-btn">
            <a href="#pageRecruit">上部に戻る</a>
          </div>
        </section>

        <div class="entry-button">
            <a href="<?php echo home_url('/'); ?>recruit-entory">エントリー</a>
        </div>

        <ul class="other_list">
          <li>
            <div class="other_list_btn other_btn_01">
              <a href="#tab-01">加工機オペレーター</a>
            </div>
          </li>
          <li>
            <div class="other_list_btn other_btn_02">
              <a href="#tab-02">CADオペレーター</a>
            </div>
          </li>
        </ul>
        </div>
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