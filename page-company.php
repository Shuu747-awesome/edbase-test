<?php get_header(); ?>

    <img src="<?php echo get_template_directory_uri(); ?>/images/company.png" alt="エドベース株式会社-会社概要トップ画像">
    
    <div class="row">
      <main>
        <h2>格言ガチャ</h2>
        <div id="gacha-display">
          社長が感銘を受けた格言集！<br>
          下記ボタンをクリック/タップで表示します。
        </div>
        <button id="gacha-button">格言を表示</button>
        <h2>会社概要</h2>
        <table>
          <tr>
            <th>会社名</th>
            <td>エドベース株式会社</td>
          </tr>
          <tr>
            <th>英語表記</th>
            <td>Edbase Co. Ltd.</td>
          </tr>
          <tr>
            <th>代表取締役</th>
            <td>吉田 光利</td>
          </tr>
        </table>
      </main>
      
      <aside>
        <h2>Banner</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner.png" alt="">
      </aside>
    </div>
<?php get_footer(); ?>