# backend2

こちらがバックエンド課題置き場所となっております<br>
Readme.txtに各ファイルの大まかな説明を入れております<br>

[開発環境(バックエンド)]
OS:Windows8.1<br>
使用ソフト:Adobe DreamWeaver CC 2015<br>
テストサーバ:さくらインターネットVPS<br>
URL http://hn-en.com/staff/login2.php<br>
本番サーバ:Amazon EC2 | AWS<br>
URL http://ec2-52-197-203-199.ap-northeast-1.compute.amazonaws.com/<br>

中間における主な課題点と改善<br>

SQLインジェクション<br>
phpコード内に書かれたSQL文に対するセキュリティ問題<br>
プレースホルダによるSQL文組み立てをPHP+PDO+MySQLで実装することで回避を図る<br>

QSRF(クロスサイトリクエストフォージェリ)<br>
ログイン画面(トップページ)でログインリクエストの送信があるためトークン埋め込みと<br>
承認時にセッションIDを再生成し回避を試みた。<br>

中間以降から実装した機能<br>
リロードによるサーバへの多重登録を禁止<br>
リロードによるフォーム再送信の消去<br>
POSTメッセージが送られて多重登録になるのを防ぐために処理とページで表示される部分を
分けてhttpステータスコード303でPOSTメッセージをGETメッセージに変更し処理させる<br>
メールアドレス登録項目の削除、外部キーとして非表示のid<br>
楽曲登録画面における重複登録の禁止及び更新処理<br>

実装したかった機能<br>
直リンクによる403(forbidden)ステータス画面への遷移<br>
ページの見やすさ、デザイン設計<br>

各ページにおける役割と機能紹介<br>
<ユーザアカウントがない場合>
login2.php…ログイン認証画面<br>
↓<br>
input.php…登録入力画面<br>
↓↑<br>
check.php…登録確認画面<br>
↓<br>
thanks.php…登録完了画面<br>
↓<br>
login2.phpへ戻る<br>

<ユーザアカウントがある場合>
login2.php…ログイン認証画面<br>
↓↑<br>
musiclist.php…個人専用画面<br>
↓<br>
music.php…個人情報入力画面<br>
↓<br>
regist.php…登録処理画面<br>
↓<br>
musiclist.phpへ戻る
