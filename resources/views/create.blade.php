
<!DOCTYPE html>
<html>
<body>
  <section id="contact">
    <!-- ヘッダー -->
    <header>
      <link rel="stylesheet" href="renshuu.css">
        <!-- ロゴ -->
        <a href="create">contact画面</a>

        <!--PC用ナビゲーション-->
        <nav id="contact-nav-pc">
            <a href="introduction">Introduction</a>
            <a href="portfolio">portfolio</a>
            <a href="create">contact</a>
            <a href="community">community</a>
        </nav>
    </header>
    <!-- お問い合わせフォーム -->
       <section id="contact">
        <h2 class="index-h2">CONTACT</h2>
        <form action="store" method="post">
            @csrf
            <div>
                <div class="contact-heading">
                  <label class="contact-label">お名前<span class="contact-span">
                </div>
                <div class="contact-form">
                  <input type="text" id="input-name" name="name" placeholder="入力してください" class="contact-textbox">
                </div>
              </div>
              <div> 
                <div class="contact-heading">
                  <label class="contact-label">メールアドレス<span class="contact-span"></span></label>
                </div>
                <div>
                  <input type="text" id="input-mail" name="email" placeholder="入力してください" class="contact-textbox">
                </div>
              </div>
              <div>
                <div class="contact-heading">
                  <label class="contact-label">電話番号</label>
                </div>
                <div>
                  <input type="text" id="input-tel" name="tel" placeholder="入力してください" class="contact-textbox">
                </div>
              </div>
              <div>
                <div class="contact-heading">
                  <label class="contact-label">問合内容<span class="contact-span">
                </div>
                <div>
                  <textarea class="contact-textarea" id="input-text" placeholder="入力してください" name="message"></textarea>
                </div>
              </div>
              <div>
                <div class="contact-heading">
                  <label class="contact-label">ご希望方法<span class="contact-span">
                </div>
                <div>
                  <input class="radiobutton" type="radio" value="tel" name="contact" checked><label>お電話</label>
                  <input class="radiobutton" type="radio" value="mail" name="contact"><label>メール</label>
                  <input class="radiobutton" type="radio" value="both" name="contact"><label>どちらでも</label>
                </div>
              </div>
              <div>
                <div class="contact-heading">
                  <label class="contact-label">個人情報の取り扱い</label>
                </div>
                <div>
                  <details>
                    <summary>お問い合わせフォームの個人情報の取り扱いについて</summary>
                    <div>
                      <span>１．組織の名称又は氏名</span><br>
                      株式会社SocialTech<br><br>
                      <span>２．個人情報保護管理者（若しくはその代理人）の氏名又は職名、所属及び連絡先
                        鈴木 一郎 コーポレート部</span><br>
                      メールアドレス：support@socialtech.net<br>
                      TEL：03-xxxx-xxxx<br>
                      <span>３．個人情報の利用目的</span><br>
                      ・本サービス及び本サービスに関連する情報の提供又はそれらに関する連絡のため<br>
                      ・ユーザーの本人確認のため<br>
                      ・当社サービスのご案内のため<br>
                      ・当社の商品等の広告または宣伝（電子メールによるものを含むものとします。）<br><br>
                      <span>４．個人情報の取り扱い業務の委託</span><br>
                      個人情報の取扱業務の全部または一部を外部に業務委託する場合があります。<br>
                      その際、弊社は、個人情報を適切に保護できる管理体制を敷き実行していることを条件として<br>
                      委託先を厳選したうえで、機密保持契約を委託先と締結し、お客様の個人情報を厳密に管理させます。<br><br>
                      <span>５．個人情報の開示等の請求</span><br>
                      お客様は、弊社に対してご自身の個人情報の開示等（利用目的の通知、開示、内容の訂正・追加・削除、利用の停止または消去、第三者への提供の停止）に関して、当社問合わせ窓口に申し出ることができます。<br>
                      その際、弊社はお客様ご本人を確認させていただいたうえで、合理的な期間内に対応いたします。<br><br>
                      なお、個人情報に関する弊社問合わせ先は、次の通りです。<br><br>
                      株式会社SocialTech　個人情報問合せ窓口<br>
                      〒150-0043　東京都渋谷区道玄坂2丁目11-1 Ｇスクエア渋谷道玄坂 4F<br>
                      メールアドレス：support@socialtech.net　TEL：03-xxxx-xxxx<br><br>
                      <span>６．個人情報を提供されることの任意性について</span><br><br>
                      お客様がご自身の個人情報を弊社に提供されるか否かは、お客様のご判断によりますが、もしご提供されない場合には、適切なサービスが提供できない場合がありますので予めご了承ください。
                    </div>
                  </details>
                  <input type="checkbox" name="agree">
                  <span>個人情報の取り扱いについてご同意いただける場合は、チェックをしてください。</span>
                </div>
              </div>
              <input id="output-btn" type="submit" src="images/button-submit.png" value="送信する">
      <footer>
        <div id="footer-logo">
        </div>
         <div id="footer-link">
            <a href="introduction">Introduction</a>
            <a href="portfolio">portfolio</a>
            <a href="create">contact</a>
            <a href="community">community</a>
            <span id="copyright">&copy;2023 Mania!, Inc. All Rights Reserved. </span>
         </div>
        </form>
      </section>
    <script src="js/test.js"></script>
</body>
</html>