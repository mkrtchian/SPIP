<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/ecrire_?lang_cible=ja
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'activer_plugin' => 'プラグインを作動します',
	'aide_non_disponible' => '現在の言語の設定では、このオンラインヘルプはまだご利用になれません。',
	'auteur' => '著者:',
	'avis_acces_interdit' => 'アクセス権がありません',
	'avis_article_modifie' => 'ご注意ください。 @nom_auteur_modif@　が@date_diff@分前にこの記事について作業を行いました。',
	'avis_aucun_resultat' => '一致するデータがありませんでした。',
	'avis_chemin_invalide_1' => '選択されたファイルパス',
	'avis_chemin_invalide_2' => 'が無効です。前のページに戻って、与えられた情報を確認してください。',
	'avis_connexion_echec_1' => 'SQLサーバーへの接続に失敗しました。', # MODIF
	'avis_connexion_echec_2' => '前のページに戻って、与えられている情報を確認してください。',
	'avis_connexion_echec_3' => '<b>注意</b> 多くのサーバー上では、それを利用できるためには事前に自分が, SQLにアクセスできるよう<b>リクエストを行う</b>必要があります。 もし接続できない場合、現在このリクエストが行われているかどうかを確認してください。', # MODIF
	'avis_connexion_ldap_echec_1' => 'LDAPサーバへの接続に失敗しました。',
	'avis_connexion_ldap_echec_2' => '前のページに戻って、与えられている情報を確認してください。',
	'avis_connexion_ldap_echec_3' => '交代でLDAPサポートをユーザのインポートのために利用しないでください。',
	'avis_deplacement_rubrique' => '注意！ この項目は、 @contient_breves@　件のニュースを含んでいます: それを移動する場合は、確認のためこのボックスにチェックを入れてください。',
	'avis_erreur_connexion_mysql' => 'SQL接続のエラーです。',
	'avis_espace_interdit' => '<b>許されないエリア</b><p>SPIPが既にインストールされています。',
	'avis_lecture_noms_bases_1' => 'インストールプログラムは、インストールされたデータベースの名前を読むことが出来ませんでした。',
	'avis_lecture_noms_bases_2' => 'ベースが有効でないか、ベースリストを許可する機能がアクティブではありませんでした。
これはセキュリティ上の理由によります（多くのホスティングによくみられるものです）。',
	'avis_lecture_noms_bases_3' => '二つ目の選択において、あなたのログイン名を含むデータベースが利用可能なようです :',
	'avis_non_acces_page' => 'このページにはアクセスしていません。',
	'avis_operation_echec' => '操作に失敗しました。',
	'avis_suppression_base' => '注意！データ消去します。復旧出来ません。',

	// B
	'bouton_acces_ldap' => 'LDAPへのアクセスを追加 >>',
	'bouton_ajouter' => '追加する',
	'bouton_demande_publication' => 'この記事の公開を要求する',
	'bouton_desactive_tout' => 'すべて無効',
	'bouton_effacer_tout' => 'すべての削除',
	'bouton_envoyer_message' => '最後のメッセージ: 送る',
	'bouton_modifier' => '修正',
	'bouton_radio_afficher' => '表示',
	'bouton_radio_apparaitre_liste_redacteurs_connectes' => '接続中に接続中エディターのリストに表示',
	'bouton_radio_envoi_annonces_adresse' => 'アナウンスを送信するアドレス:',
	'bouton_radio_envoi_liste_nouveautes' => '最新のニュースリストを送る',
	'bouton_radio_non_apparaitre_liste_redacteurs_connectes' => '接続中のエディターズのリストに表示しない',
	'bouton_radio_non_envoi_annonces_editoriales' => '編集の発表を送らない',
	'bouton_redirection' => 'リダイレクト',
	'bouton_relancer_installation' => 'インストレーションを再起動',
	'bouton_suivant' => '次',
	'bouton_tenter_recuperation' => '修復を試みる',
	'bouton_test_proxy' => 'プロキシーをテスト',
	'bouton_vider_cache' => 'システムキャッシュを空にする',

	// C
	'cache_modifiable_webmestre' => 'これらのパラメータはwebmasterによって修正できます。',
	'calendrier_synchro' => '<b>iCal</b>と互換性のある日記アプリケーションを使っているなら、それとこのサイトの情報を同調（シンクロ）することが出来ます。',

	// D
	'date_mot_heures' => '時',

	// E
	'email' => 'メール',
	'email_2' => 'メール：',
	'entree_adresse_annuaire' => 'ディレクトリのアドレス',
	'entree_adresse_email' => 'メールアドレス',
	'entree_base_donnee_1' => 'データベースアドレス',
	'entree_base_donnee_2' => '(よく、このアドレスはあなたのサイトのアドレスと同じで、時々«localhost»の時もあり、完全に空のままの時もあります。)',
	'entree_biographie' => 'あなたの略記を数行でお願いします。',
	'entree_chemin_acces' => 'パスを<b>入力</b>:',
	'entree_cle_pgp' => 'あなたのPGPキー',
	'entree_contenu_rubrique' => '（セクションの内容を短い言葉で。）',
	'entree_identifiants_connexion' => 'あなたの接続ID...',
	'entree_informations_connexion_ldap' => 'LDAP接続の情報をこのフォームに書き込んでください。あなたはあなたのシステムまたは、ネットワーク管理者によってこの情報を提供されるでしょう。',
	'entree_infos_perso' => 'あなたは誰？',
	'entree_interieur_rubrique' => 'セクションの中に：',
	'entree_liens_sites' => '<b>ハイパーリンク</b>（訪問サイトの参照...）',
	'entree_login' => 'あなたのログインID',
	'entree_login_connexion_1' => '接続するログインID',
	'entree_login_connexion_2' => '(あなたのFTP用のログインIDと同じときもあれば空欄のときもあります)',
	'entree_mot_passe' => 'パスワード',
	'entree_mot_passe_1' => '接続パスワード',
	'entree_mot_passe_2' => '(あなたのFTP用のパスワードと同じときもあれば空欄のときもあります)',
	'entree_nom_fichier' => 'ファイル名を打ち込んでください @texte_compresse@:',
	'entree_nom_pseudo' => 'あなたの名前か仮名',
	'entree_nom_pseudo_1' => '（あなたの名前か仮名）',
	'entree_nom_site' => 'あなたのウェブサイトの名前',
	'entree_nouveau_passe' => '新しいパスワード',
	'entree_passe_ldap' => 'パスワード',
	'entree_port_annuaire' => 'ディレクトリのポートナンバー',
	'entree_signature' => '署名',
	'entree_titre_obligatoire' => '<b>タイトル</b> [必須]<br />',
	'entree_url' => 'あなたのサイトのURL',
	'erreur_plugin_fichier_absent' => 'ファイルが見つかりません',

	// I
	'ical_info1' => 'このページは、このサイトでの活動であなたとの連絡を保ついくつかの手段を提供します。',
	'ical_info2' => 'さらに情報が欲しい場合、躊躇せずに、<a href="@spipnet@">SPIP’sドキュメント</a>を訪れてください。', # MODIF
	'ical_info_calendrier' => 'あなたは２種類のカレンダーが自由に使えます。１つめはすべての公開された記事を示すサイトマップです。２つめは編集中のアナウンスに加え、あなたの最新のプライベートメッセージも含んでいます: URL中に含まれる個人のキーはあなたの為に確保してあり、あなたのパスワードを新しくすることでいつでも変更することができます。',
	'ical_methode_http' => 'ダウンロードする',
	'ical_methode_webcal' => '同調（シンクロ）する (webcal://)', # MODIF
	'ical_texte_js' => 'このサイトで出版された最新記事を、あなたの管理しているどんなサイトでもとても簡単に、たった１行のjavascriptで表示することが出来ます。',
	'ical_texte_prive' => 'このカレンダーは完全に個人用で、このサイトのあなたのプライベートの編集活動を知らせます（仕事、個人的な約束、提出された記事とニュース...）。',
	'ical_texte_public' => 'このカレンダーは、あなたがこのサイト（公開された記事とニュース）のパブリックな活動を理解するのを手伝います。',
	'ical_texte_rss' => 'あなたはこのサイトの最新のニュースを、XML/RSS (Rich Site Summary) リーダーによって取得することが出来ます。これはまた、互換性あるフォーマットでやり取り（サイトを配信）をする別のサイトで、SPIPで発表された最新のニュースを、読めるようにするフォーマットです。',
	'ical_titre_js' => 'Javascript',
	'ical_titre_mailing' => 'メーリングリスト',
	'ical_titre_rss' => 'Backendファイル',
	'icone_activer_cookie' => 'クッキーを置く',
	'icone_afficher_auteurs' => '著者を表示',
	'icone_afficher_visiteurs' => '訪問者を表示',
	'icone_arret_discussion' => 'このディスカッションに参加するのをやめる',
	'icone_calendrier' => 'カレンダー',
	'icone_creer_auteur' => '新しい著者を作って、彼をこの記事に参加させる。',
	'icone_creer_mot_cle' => '新しいキーワードと、この記事へのリンクを作る',
	'icone_creer_rubrique_2' => '新しいセクションを作る',
	'icone_modifier_article' => 'この記事を修正',
	'icone_modifier_rubrique' => 'このセクションを修正',
	'icone_retour' => '戻る',
	'icone_retour_article' => '記事に戻る',
	'icone_supprimer_cookie' => 'クッキーの削除',
	'icone_supprimer_rubrique' => 'このセクションを削除',
	'icone_supprimer_signature' => 'この署名を削除',
	'icone_valider_signature' => 'この署名を確認',
	'image_administrer_rubrique' => 'あなたはこのセクションを管理することができる',
	'info_1_article' => '１記事',
	'info_activer_cookie' => '<b>管理者用クッキー</b>を使うことが出来ます。 それによって
パブリックなサイトとプライベートエリアの切替が簡単に出来ます。',
	'info_admin_gere_rubriques' => 'この管理者は下記のセクションを管理:',
	'info_administrateur' => '管理者',
	'info_administrateur_1' => '管理者',
	'info_administrateur_2' => 'サイトについて（<i>注意して使って</i>）',
	'info_administrateur_site_01' => 'もしサイトの管理者ならば',
	'info_administrateur_site_02' => 'このリンクをクリック',
	'info_administrateurs' => '管理者',
	'info_administrer_rubrique' => 'あなたはこのセクションを管理することができる',
	'info_adresse' => 'そのアドレスへ:',
	'info_adresse_url' => 'あなたの公開サイトのURL',
	'info_aide_en_ligne' => 'SPIPオンラインヘルプ',
	'info_ajout_image' => '記事に添付書類として画像イメージを付け加えるとき、
  SPIPは自動的にヴィニェット＜半身像・ロゴなど＞（サムネイル）を
  挿入された画像から作成します。 これにより例えば
  ギャラリーやポートフォリオの自動作成を可能にします。',
	'info_ajouter_rubrique' => '管理する他のセクションを追加:',
	'info_annonce_nouveautes' => '最新のニュースアナウンス',
	'info_article' => '記事',
	'info_article_2' => '記事',
	'info_article_a_paraitre' => '公開されている記事の投稿日付',
	'info_articles_02' => '記事',
	'info_articles_2' => '記事',
	'info_articles_auteur' => 'この著者の記事',
	'info_articles_trouves' => '記事が見つかりました',
	'info_attente_validation' => '適性検査前のあなたの記事',
	'info_aujourdhui' => '今日：',
	'info_auteurs' => '著者たち',
	'info_auteurs_par_tri' => '著者@partri@',
	'info_auteurs_trouves' => '見つかった著者たち',
	'info_authentification_externe' => '外部の認証',
	'info_avertissement' => '警告',
	'info_base_installee' => 'あなたのデータベースの中に構造物がインストールされました。',
	'info_chapeau' => '飾り',
	'info_chapeau_2' => 'イントロダクション:',
	'info_chemin_acces_1' => 'オプション: <b>ディレクトリのアクセス・パス</b>',
	'info_chemin_acces_2' => 'ここから先では、ディレクトリの情報にアクセス・パスを設定する必要があります。この情報はディレクトリに保存されているユーザプロファイルを読むために必須です。',
	'info_chemin_acces_annuaire' => 'オプション : <b>ディレクトリのアクセス・パス',
	'info_choix_base' => '３番目のステップ:',
	'info_classement_1' => ' @liste@ の外',
	'info_classement_2' => ' @liste@ 外',
	'info_code_acces' => 'あなたの所有するアクセスコードを忘れないで下さい！',
	'info_config_suivi' => 'もしもこのアドレスがメーリングリストのものと一致する場合、サイト参加者が登録可能なアドレスを下記に表示することができます。記すべきアドレスは、URL（例えばWeb経由の登録ページなど）、サブジェクトを特定してあるメールアドレス (たとえば: <tt>@adresse_suivi@?subject=subscribe</tt>)がいいでしょう。',
	'info_config_suivi_explication' => 'あなたはこのサイトに関するメーリングリストに加入することが出来ます。あなたは自動送信メールによって、公表するために提出された記事、ニュースに関するアナウンスを受け取るでしょう。(訳注：フランス語？だらけ）',
	'info_confirmer_passe' => '新しいパスワードの確認:',
	'info_connexion_base' => '２番目のステップ: <b>データベースと接続を試みる</b>',
	'info_connexion_ldap_ok' => 'LDAP接続に成功しました。</b><p> 次の段階に進んでください。</p>', # MODIF
	'info_connexion_mysql' => '最初のステップ: <b>あなたのSQLと接続</b>',
	'info_connexion_ok' => '接続が成功しました。',
	'info_contact' => '連絡方法',
	'info_contenu_articles' => '記事の内容',
	'info_creation_paragraphe' => '(パラグラフ＜段落・文節＞を作るには、空行をおけばいいだけです。)', # MODIF
	'info_creation_rubrique' => '記事を書けるようになる前に、<br />最低１つのセクションを作成する必要があります。<br />',
	'info_creation_tables' => '４番目のステップ: <b>データベースのテーブルの作成</b>',
	'info_creer_base' => '新しいデータベースを<b>作成</b>:',
	'info_dans_rubrique' => 'セクション内:',
	'info_date_publication_anterieure' => '公表時の日付:',
	'info_date_referencement' => 'このサイトを参照した日付 :',
	'info_derniere_etape' => '最後のステップ: <b>終わりました！',
	'info_descriptif' => '記述:',
	'info_discussion_cours' => '進行中の討論',
	'info_ecrire_article' => '記事を書く前に、あなたは最低１つのセクションを作らなければなりません。',
	'info_email_envoi' => '送り主のe-mailアドレス（任意）',
	'info_email_envoi_txt' => 'e-mailを送るのに使っている送り主のe-mailアドレスを入力してください（デフォルトで、受信者のアドレスは送信者のアドレスが入力してあります :',
	'info_email_webmestre' => 'ウェブマスターのe-mailアドレス（任意）', # MODIF
	'info_envoi_email_automatique' => 'メールを自動送信',
	'info_envoyer_maintenant' => '今送る',
	'info_etape_suivante' => '次のステップに進む',
	'info_etape_suivante_1' => '次のステップに移ることが出来ます。',
	'info_etape_suivante_2' => '次のステップに移ることが出来ます。',
	'info_exportation_base' => '@archive@ へデータベースをエキスポート（輸出）',
	'info_facilite_suivi_activite' => 'サイトでの編集活動のお手伝いのために、SPIPは記事公開要求、適性検査の結果など、メールで自動送信することが出来ます。（例えばメーリングリストなど）',
	'info_fichiers_authent' => '認証ファイル ".htpasswd"',
	'info_forums_abo_invites' => 'あなたのサイトはサブスクリプションのための掲示板を持っています; 訪問者達はパブリックなサイトでそれらのために登録するかもしれません。',
	'info_gauche_admin_tech' => '<b>管理者のみがこのページにアクセス出来る。</b><p> そのページはさまざまな技術的メンテナンスのための手順を提供します。いくらかの手順では同WEBサイトへのFTPアクセスによる特別な認証手順が必要です。</p>', # MODIF
	'info_gauche_admin_vider' => '<b>このページは管理者のみアクセス出来ます。</b><p> このページはいろいろなメンテナンスの手順を提供します。いくつかの手順は同WEBサイトへのアクセスによる特別な認証を必要とします。</p>', # MODIF
	'info_gauche_auteurs' => 'あなたはサイトの著者たちすべてをここで見つけることができます。
 それぞれの状態はアイコンの色によって示されています（管理者 = 緑; エディター = 黄色）。',
	'info_gauche_auteurs_exterieurs' => '外部の著者たち、サイトへのどんなアクセスもない、は青いアイコンで示されています; また、削除された著者たちはゴミ箱です。', # MODIF
	'info_gauche_messagerie' => 'メッセージ交換はエディター同士でのメッセージの交換を可能にします、保護されたメモ（あなたの私用向け）または、プライベートエリアのホームページのアナウンスを示す（あなたが管理者の場合）。',
	'info_gauche_statistiques_referers' => 'このページは<i>referrers</i>のリストを表示します。つまり昨日と今日の間、あなたのサイトへのリンクを含んだサイト：実際にこのリストは２４時間ごとに初期化されています。',
	'info_gauche_visiteurs_enregistres' => 'ここでサイトのパブリックなエリアで登録された訪問者たちを探せるでしょう（寄付による掲示板）。',
	'info_generation_miniatures_images' => '画像のサムネイルを生成',
	'info_hebergeur_desactiver_envoi_email' => '若干のホストでは、それらサーバー上から自動的にメールを送ることが出来ません。そういう場合、SPIPの次の機能は実施できません。',
	'info_hier' => '昨日：',
	'info_identification_publique' => 'あなたの公開ID...',
	'info_image_process' => 'ミニチュアを作る最も良い方法を、対応する写真の上を、クリックして選んでください。',
	'info_image_process2' => '<b>付記</b> <i>もし画像を見ることが出来なかったら、あなたのサーバーではソフトが使えるように設定してありません。もしあなたがそれらの機能を使いたいなら、プロバイダの技術サポートに«GD»か«Imagick»拡張をインストールしてもらって下さい。</i>', # MODIF
	'info_images_auto' => '画像自動管理',
	'info_informations_personnelles' => '５番目のステップ: <b>個人情報</b>',
	'info_inscription_automatique' => '新しいエディターの登録の自動化',
	'info_jeu_caractere' => 'サイトの文字コード',
	'info_jours' => '日',
	'info_laisser_champs_vides' => 'これらのフィールドを空のままにしておくことができます)',
	'info_langues' => 'サイトの言語',
	'info_ldap_ok' => 'LDAP認証はインストールされています。',
	'info_lien_hypertexte' => 'リンク:',
	'info_liste_redacteurs_connectes' => '接続中のエディターのリスト',
	'info_login_existant' => 'このIDは既に使われています。',
	'info_login_trop_court' => 'ログインIDが短すぎます。',
	'info_maximum' => '最大:',
	'info_meme_rubrique' => '同じセクションで',
	'info_message_en_redaction' => '進行中のあなたのメッセージ',
	'info_message_technique' => '技術的なメッセージ:',
	'info_messagerie_interne' => '内部のメッセージ交換',
	'info_mise_a_niveau_base' => 'SQLデータベースがアップグレードした',
	'info_mise_a_niveau_base_2' => '{{警告!}} あなたは前にこのサイトにあったものより
  {古い}バージョンのSPIPのファイルをインストールしました: あなたのデータベースには損失の危機が迫り、
  あなたのサイトはこれ以上適切に動かないでしょう。<br />{{SPIPファイルを
  再インストール。}}',
	'info_modifier_rubrique' => '修正するセクション:',
	'info_modifier_titre' => '修正: @titre@',
	'info_mon_site_spip' => '私のSPIPのサイト',
	'info_moyenne' => '平均：',
	'info_multi_cet_article' => 'この記事の言語：',
	'info_multi_langues_choisies' => 'あなたのサイトのエディターが利用できる言語を下で選んでください。もうすでにあなたのサイト内で（リストの上で）使われている言語は無効に出来ません。',
	'info_multi_secteurs' => '... ルート（一番上のフォルダ）にあるセクションだけ有効にしますか？',
	'info_nom' => '名前',
	'info_nom_destinataire' => '受取人の名前',
	'info_nom_site' => 'ＨＰの名前',
	'info_nombre_articles' => '@nb_articles@ 記事、',
	'info_nombre_rubriques' => '@nb_rubriques@ セクション、',
	'info_nombre_sites' => '@nb_sites@サイト、',
	'info_non_deplacer' => '動かさないで...',
	'info_non_envoi_annonce_dernieres_nouveautes' => 'SPIPは定期的にサイトの最新のニュース、アナウンスを送ることができます。
  （最近公開された記事とニュース）。',
	'info_non_envoi_liste_nouveautes' => '最新のニュースのリストを送らない',
	'info_non_modifiable' => '変更できない',
	'info_non_suppression_mot_cle' => '私はこのキーワードを削除することを望みません。',
	'info_notes' => '補足',
	'info_nouvel_article' => '新しい記事',
	'info_nouvelle_traduction' => '新しい翻訳:',
	'info_numero_article' => '記事番号:',
	'info_obligatoire_02' => '[要求した]', # MODIF
	'info_option_accepter_visiteurs' => 'パブリックなサイトからの訪問者の登録を許可',
	'info_option_ne_pas_accepter_visiteurs' => '訪問者の登録を断る',
	'info_options_avancees' => '拡張オプション',
	'info_ou' => '又は...',
	'info_page_interdite' => '禁じられたページ',
	'info_par_nombre_article' => '(記事の数によって)',
	'info_passe_trop_court' => 'パスワードが短すぎます。',
	'info_passes_identiques' => 'その二つのパスワードは同一でない。',
	'info_plus_cinq_car' => '６文字以上',
	'info_plus_cinq_car_2' => '(６文字以上)',
	'info_plus_trois_car' => '(４文字以上)',
	'info_popularite' => '人気度: @popularite@; 訪問者: @visites@',
	'info_post_scriptum' => 'Postscript',
	'info_post_scriptum_2' => 'Postscript:',
	'info_pour' => 'for',
	'info_preview_texte' => '（少なくとも"提出中"状態の）すべての記事とニュースを公表した時どのように見えるか試しに見ることが出来ます。このプレビューモードは管理人だけに限定するか、すべての編集者に開放するか、完全に無効にすることが出来ます。',
	'info_procedez_par_etape' => 'どうかステップbyステップで進んでください',
	'info_procedure_maj_version' => '新しいバージョンのSPIPに順応させるために、データベースをアップグレードするべきです。',
	'info_ps' => 'P.S.',
	'info_publier' => '発表',
	'info_publies' => 'オンラインに公開されたあなたの記事',
	'info_question_accepter_visiteurs' => 'もしあなたのサイトのテンプレートが、プライベートエリアに入らないで登録する訪問者たちを許すなら、次のオプションを有効にしてください:',
	'info_question_inscription_nouveaux_redacteurs' => '公開されているサイトで新しいエディターの登録を募りますか？　許可した場合、訪問者たちはフォームから自動で登録でき、プライベートエリアにアクセスし自分の記事を提出できます。 <blockquote><i>登録作業中に、ユーザーは自動的に送信されるプライベートエリアへのIDとパスワードを記したe-mailを受け取ります。若干のホストでは、それらサーバー上からメールが送れない場合があります：そういう場合、自動登録を実施できません。', # MODIF
	'info_racine_site' => 'サイトのルート',
	'info_recharger_page' => 'ちょっとしてからこのページを再読込してください。',
	'info_recherche_auteur_zero' => '"@cherche_auteur@"は何も見つかりませんでした。',
	'info_recommencer' => 'もう一度挑戦してみて下さい。',
	'info_redacteur_1' => '編集者',
	'info_redacteur_2' => 'プライベートエリアへのアクセスを持っている (<i>推奨</i>)',
	'info_redacteurs' => 'エディターズ',
	'info_redaction_en_cours' => '進行中の編集',
	'info_redirection' => 'リダイレクション',
	'info_refuses' => 'あなたの記事は拒絶された',
	'info_reglage_ldap' => 'オプション：<b>LDAPインポートの調整</b>',
	'info_renvoi_article' => '<b>リダイレクション。</b> この記事はそのページを参照します:',
	'info_reserve_admin' => '管理者のみがこのアドレスを変更することが出来る。',
	'info_restreindre_rubrique' => '管理できるセクションの制限:',
	'info_resultat_recherche' => '検索結果:',
	'info_rubriques' => 'セクション',
	'info_rubriques_02' => 'セクション',
	'info_rubriques_trouvees' => '見つかったセクション',
	'info_sans_titre' => '無名',
	'info_selection_chemin_acces' => '<b>下を選択</b> ディレクトリのアクセスパス:',
	'info_signatures' => '署名',
	'info_site' => 'サイト',
	'info_site_2' => 'サイト：',
	'info_site_min' => 'サイト',
	'info_site_reference_2' => '参照されたサイト',
	'info_site_web' => 'ウェブサイト：', # MODIF
	'info_sites' => 'サイト',
	'info_sites_lies_mot' => '参照されたサイトをこのキーワードと関連付ける',
	'info_sites_proxy' => 'プロキシを使う',
	'info_sites_trouves' => '見つかったサイト',
	'info_sous_titre' => 'サブタイトル:',
	'info_statut_administrateur' => '管理者',
	'info_statut_auteur' => 'この著者の状態:', # MODIF
	'info_statut_auteur_autre' => 'その他の状態:',
	'info_statut_redacteur' => 'エディター',
	'info_statut_utilisateurs_1' => '読み込まれたユーザーの標準の状態',
	'info_statut_utilisateurs_2' => '始めて接続したときにLDAPディレクトリに存在・属している人たちの状態を選択してください。後で、それぞれの著者ごとにケースバイケースで値を変更できます。',
	'info_suivi_activite' => '編集活動の手伝い',
	'info_surtitre' => 'トップタイトル:',
	'info_taille_maximale_vignette' => 'システムによって生産されたビネット（半身像、ロゴなど）の最大の大きさ:',
	'info_terminer_installation' => 'あなたは今標準的なインストール手順を終えることができます。',
	'info_texte' => 'テキスト',
	'info_texte_explicatif' => '説明用の文章',
	'info_texte_long' => '(文章が長い：いくつかに文章に分けられていますが、適正検査後、システムが自動で繋ぎます。)',
	'info_texte_message' => 'あなたのメッセージ文章:', # MODIF
	'info_texte_message_02' => 'メッセージの文章',
	'info_titre' => 'タイトル:',
	'info_total' => '合計:',
	'info_tous_articles_en_redaction' => '進行中のすべての記事',
	'info_tous_articles_presents' => 'このセクションに出版したすべての記事',
	'info_tous_les' => 'すべて:',
	'info_tout_site' => '全サイト',
	'info_tout_site2' => '記事はこの言語へ翻訳されていません。',
	'info_tout_site3' => '記事はこの言語へ翻訳されていますが、いくつかの別言語版に、その後入力がなされました。翻訳のアップデートを要求します。',
	'info_tout_site4' => '記事はこの記事へ翻訳されています、そして、翻訳版は更新されました。',
	'info_tout_site5' => '元の記事。',
	'info_tout_site6' => '<b>警告:</b> オリジナルの記事だけを表示している。
翻訳版はオリジナルと結びつけられる、
それらのステータスを表す色によって:',
	'info_travail_colaboratif' => '記事の共同作業',
	'info_un_article' => '記事、',
	'info_un_site' => '１つのサイト、',
	'info_une_rubrique' => '１つのセクション、',
	'info_une_rubrique_02' => '１セクション',
	'info_url' => 'URL:',
	'info_urlref' => 'リンク:',
	'info_utilisation_spip' => 'SPIPが使えるように準備中...',
	'info_visites_par_mois' => '月単位で表示:',
	'info_visiteur_1' => '訪問者',
	'info_visiteur_2' => 'パブリックなサイトの',
	'info_visiteurs' => '訪問者',
	'info_visiteurs_02' => 'パブリックなサイトの訪問者数',
	'install_echec_annonce' => 'このインストールではたぶん動かないか、上手く機能しないサイトになるでしょう。',
	'install_extension_mbstring' => 'SPIPは次によって停止中:',
	'install_extension_php_obligatoire' => 'SPIPにはphpの拡張モジュールが必要:',
	'install_select_langue' => '言語を選んだら、"次＞＞"ボタンを押してインストールを始めて下さい。',
	'intem_redacteur' => 'エディター',
	'item_accepter_inscriptions' => '登録を許可',
	'item_activer_messages_avertissement' => '警告メッセージを作動させる',
	'item_administrateur_2' => '管理者',
	'item_afficher_calendrier' => 'カレンダーに表示',
	'item_choix_administrateurs' => '管理者たち',
	'item_choix_generation_miniature' => '自動的に画像のサムネイルを作る。',
	'item_choix_non_generation_miniature' => '画像のサムネイルを作らない。',
	'item_choix_redacteurs' => 'エディターズ',
	'item_choix_visiteurs' => 'パブリックなサイトの訪問者',
	'item_creer_fichiers_authent' => '.htpasswdファイルを作る',
	'item_login' => 'ログインID',
	'item_mots_cles_association_articles' => '記事',
	'item_mots_cles_association_rubriques' => 'セクション',
	'item_mots_cles_association_sites' => '参照か供給（シンジケート）しているサイト',
	'item_non' => 'いいえ',
	'item_non_accepter_inscriptions' => '登録を許可しない',
	'item_non_activer_messages_avertissement' => '警告メッセージを表示しない',
	'item_non_afficher_calendrier' => 'カレンダー上に表示しない',
	'item_non_creer_fichiers_authent' => 'それらファイルを作らない',
	'item_non_publier_articles' => 'それらの公開日付前に記事を公表しない。',
	'item_nouvel_auteur' => '新しい著者',
	'item_nouvelle_rubrique' => '新しいセクション',
	'item_oui' => 'はい',
	'item_publier_articles' => 'それらの発表日時を無視して記事を公表する。',
	'item_reponse_article' => '記事に返信',
	'item_visiteur' => '訪問者',

	// J
	'jour_non_connu_nc' => '未定義',

	// L
	'lien_ajouter_auteur' => 'この著者を追加',
	'lien_email' => 'e-mail',
	'lien_nom_site' => 'サイトの名前:',
	'lien_retirer_auteur' => '著者を削除',
	'lien_site' => 'サイト',
	'lien_tout_deplier' => 'すべて拡張',
	'lien_tout_replier' => 'すべて壊す',
	'lien_trier_nom' => '名前でソート',
	'lien_trier_nombre_articles' => '記事番号でソート',
	'lien_trier_statut' => '状態でソート',
	'lien_voir_en_ligne' => 'オンラインで見る:',
	'logo_article' => '記事のロゴ', # MODIF
	'logo_auteur' => '著者のロゴ', # MODIF
	'logo_rubrique' => 'セクションのロゴ', # MODIF
	'logo_site' => 'サイトのロゴ', # MODIF
	'logo_standard_rubrique' => 'セクションのための標準的なロゴ', # MODIF
	'logo_survol' => 'ホバリングするロゴ', # MODIF

	// M
	'menu_aide_installation_choix_base' => 'あなたのデータベースの選択',
	'module_fichier_langue' => '言語ファイル',
	'module_raccourci' => 'ショートカット',
	'module_texte_affiche' => 'テキストを表示',
	'module_texte_explicatif' => 'あなたは次のショートカットをあなたのサイトのテンプレートで使うことができます。それらは言語ファイルによって種々の言語に自動的に翻訳されます。',
	'module_texte_traduction' => '« @module@ »の言語ファイルは次の言語が使用可能:',
	'mois_non_connu' => '未定義',

	// O
	'onglet_repartition_actuelle' => '今',

	// R
	'required' => '[要求した]', # MODIF

	// S
	'statut_admin_restreint' => '(限定された管理者)', # MODIF

	// T
	'taille_cache_image' => 'SPIPによる画像自動管理（ビネット（半身像、画像で作られている題名、TeXフォーマットの数式など...) @dir@ ディレクトリ内を合計 @taille@ に調整します。',
	'taille_cache_infinie' => 'このサイトは<code>CACHE/</code>ディレクトリのどんな大きさの制限も設定していない。',
	'taille_cache_maxi' => 'SPIPは<code>CACHE/</code>ディレクトリのデータの大きさを大体<b>@octets@</b>までに制限できます。',
	'taille_cache_octets' => 'キャッシュの大きさは現在 @octets@ です。', # MODIF
	'taille_cache_vide' => 'キャッシュは空です。',
	'taille_repertoire_cache' => '現在のキャッシュの大きさ',
	'text_article_propose_publication' => 'この記事は公開の為に提出されました。この記事の掲示板で、どうぞためらわずに意見してください(ページの一番下)。', # MODIF
	'texte_acces_ldap_anonyme_1' => 'いくらかのLDAPサーバーはどんな匿名でのアクセスも許しません。こういう場合、あなたはこの後ディレクトリの情報を検索できる最初のIDを入力する必要があります。しかしながら、次のところはほとんどの場合は空欄のままで大丈夫です。',
	'texte_admin_effacer_01' => 'この手順はデータベースの<i>すべての</i> 内容を削除します。<i>すべての</i> エディター達や管理者のアクセスの為の設定も含みます。実行した後、新しいデータベースを作り、管理者が最初にアクセスするため、SPIPを再インストールする必要があります。',
	'texte_adresse_annuaire_1' => '( もしあなたのディレクトリがあなたのWebサイトと同じマシンにインストールされているなら、それはおそらく«localhost»。）',
	'texte_ajout_auteur' => '次の著者は記事に加筆した:',
	'texte_annuaire_ldap_1' => 'もしあなたがディレクトリ（LDAP）にアクセスできるのなら、SPIPに自動的にユーザーを輸入（インポート）することが可能です。',
	'texte_article_statut' => '記事の状態:',
	'texte_article_virtuel' => '仮想記事',
	'texte_article_virtuel_reference' => '<b>仮想記事:</b> あなたのSPIPサイト内の記事を参照しているが、ほかのURLへとリダイレクトしている。リダイレクションを削除するには上のURLを削除して下さい。',
	'texte_aucun_resultat_auteur' => '"@cherche_auteur@"は見つかりませんでした。',
	'texte_auteur_messagerie' => 'このサイトはリアルタイムでメッセージ交換できるように、接続中のエディターのリストを絶えず表示することが出来ます。このリストに表れないようにも出来ます。(そうすると、他の著者たちには" 見えません ")。',
	'texte_auteurs' => '著者たち',
	'texte_choix_base_1' => 'あなたのデータベースの選択:',
	'texte_choix_base_2' => 'SQLサーバーはいくつかのデータベースを含んでいます。',
	'texte_choix_base_3' => 'あなたのホストがあなたに割り当てたものを<b>下から１つ選んで下さい</b>:',
	'texte_compte_element' => '@count@ 要素',
	'texte_compte_elements' => '@count@ 要素',
	'texte_connexion_mysql' => 'あなたのホストからあなたに提供されている情報を参照して下さい: もしあなたのホストがSQL、SQLサーバーへの接続コードをサポートするなら、それはあなたを与えるべきです。', # MODIF
	'texte_contenu_article' => '（記事の内容の短い説明。）',
	'texte_contenu_articles' => 'あなたのサイト用に決めたレイアウトに基づいて、あなたはいくつかの記事の項目を使うか使わないか決めることが出来ます。次のリストの中から使うものを選択してください。',
	'texte_crash_base' => 'もしあなたのデータベースが壊れたら、あなたは自動的に復元に挑戦することが出来ます。',
	'texte_creer_rubrique' => '記事を書き始める前に、<br /> あなたはセクションを作らなければなりません。',
	'texte_date_creation_article' => '記事が作られた日時:',
	'texte_date_publication_anterieure' => '公開前の日付:',
	'texte_date_publication_anterieure_nonaffichee' => '公表前の日時を隠す。',
	'texte_date_publication_article' => 'オンラインに公表された日時:',
	'texte_descriptif_rapide' => '短い記述',
	'texte_effacer_base' => 'SPIPデータベースを削除',
	'texte_en_cours_validation' => '次の記事およびニュースは公表するために送られました。それらの掲示板を通してあなたの意見を述べることを、どうぞためらわないでください。', # MODIF
	'texte_enrichir_mise_a_jour' => 'あなたは、«印刷上のショートカット»を使うことによってあなたの文章のレイアウトを豊かにすることができます。',
	'texte_fichier_authent' => '<b>SPIPは<tt>.ecrire/data/</tt>フォルダ内に<tt>.htpasswd</tt>ファイルと<tt>.htpasswd-admin</tt>ファイルを作るべきですか？</b><p>それらのファイルであなたのサイトの他の部分で、著者たちと管理者に限定したアクセスを使うことが出来ます。（例えば、外部の統計プログラムとか）。</p><p>
もしこのようなファイルを使わないのなら、このオプションを触らないでください（ファイルを作らないでください）。</p>', # MODIF
	'texte_informations_personnelles_1' => '今調整することによって、システムはあなたにサイトへのアクセスを提供するでしょう。',
	'texte_informations_personnelles_2' => '(メモ: もしそれが再インストールであり、そしてあなたのアクセスがまだ機能しているなら、あなたは', # MODIF
	'texte_introductif_article' => '（記事の紹介文章。）',
	'texte_jeu_caractere' => 'このオプションはあなたのサイトがローマ字（«western»）とその派生物以外の文字セット（日本語など）を表示する場合に使用すると便利です。そういう場合、自分にあった文字コード（文字の設定）に変えなければいけません。とにかく、私たちは正しいのを探すために違うのを試してみることを勧めします。もしこの設定を変更したなら、忘れずに<tt>#CHARSET</tt>タグにあわせて公開しているサイトを変更してください。',
	'texte_login_ldap_1' => '（匿名アクセスのために空状態にしておくか、完全なパスを入力、例えば、«<tt>uid=smith, ou=users, dc=my-domain, dc=com</tt>»。）',
	'texte_login_precaution' => '警告! これは今あなたが接続しているログインIDです。
 注意してこのフォームを使ってください...',
	'texte_mise_a_niveau_base_1' => 'あなたはちょうど今SPIPのファイルを更新しました
 今あなたはサイトのデータベースも更新しなければなりません。',
	'texte_modifier_article' => '修正する記事:',
	'texte_multilinguisme' => 'もし記事をいくつかの言語で管理したいなら、完全なナビゲーション インターフェースによって、あなたのサイトの組織の記事と、セクションに言語選択メニューを追加できます。', # MODIF
	'texte_multilinguisme_trad' => '同じく、あなたは１つの記事の、違う翻訳版間のリンク管理システムを有効にできます。', # MODIF
	'texte_non_compresse' => '<i>未圧縮</i>（あなたのサーバーでこの機能は使えません）',
	'texte_nouvelle_version_spip_1' => 'たった今SPIPの新しいバージョンがインストールされました。',
	'texte_nouvelle_version_spip_2' => 'この新しいバージョンはこまめに更新（アップデート）することが必要となります。もしこのサイトの管理者なら、<tt>ecrire</tt>ディレクトリの<tt>inc_connect.php3</tt>ファイルを削除して、あなたのデータベースとの接続の仕方などを変更するためインストールを再度実施してください。<p>（付記：もし接続用の情報などを忘れているのなら、<tt>inc_connect.php3</tt>を"削除する前に"見ておいてください。）</p>', # MODIF
	'texte_operation_echec' => '前のページに戻って、他のデータベースを選択するか、新しいのを作ってください。あなたのホストに提供された情報を確認してみてください。',
	'texte_plus_trois_car' => '３文字以上',
	'texte_plusieurs_articles' => '数人の著者たちが見つかった "@cherche_auteur@":',
	'texte_port_annuaire' => '（デフォルト値で通常は適切です。)',
	'texte_proposer_publication' => '記事が完成した後、<br />あなたは公開するためそれを提出することができる。',
	'texte_proxy' => 'ある場合（イントラネット、保護されたネットワーク...）、供給（シンジケート）するサイトにアクセスするために、<i>HTTPプロキシ</i>の使用が必要です。プロキシが必要なときは、下にプロキシのアドレスを入力してください。例えば、<tt><html>http://proxy:8080</html></tt>のように入力します。普通ここには何も入力しません。（通常使用しません。）',
	'texte_publication_articles_post_dates' => '出版用に未来の日付が設定された記事に対するSPIPの対応を決めて下さい。',
	'texte_rappel_selection_champs' => '[忘れずにこの部分をきちんと選択してください。]',
	'texte_recalcul_page' => 'もしあなたが１つのページだけリフレッシュしたい場合、公開エリアで« リフレッシュ »ボタンを使った方が良いです。',
	'texte_recuperer_base' => 'データベースを復元',
	'texte_reference_mais_redirige' => 'あなたのSPIPサイト内の記事を参照しているけれど、他のURLへとリダイレクションしている。',
	'texte_requetes_echouent' => '<b>いくらかのSQLの要求（クエリー）がシステム的に何も理由を表さず失敗したとき、データベース自体が壊れている可能性があります。</b><p>SQLは偶然壊れたとき、また使えるようにテーブルの機能を修復します。ここで、あなたはこの修復に挑戦できます; 失敗した場合、あなたは画面の複製をとっておくべきです。何が悪かったのかが書いてあるかもしれません。</p><p>もし問題が残っているなら、あなたのホストと連絡をとってください。</p>', # MODIF
	'texte_selection_langue_principale' => 'あなたはサイトの"主な言語"を下で選択できます。運良く、この選択によって、選択した言語でしか記事が書けないということはありませんが、次を決定します

<ul><li> 公開されているサイトの日付の標準な書き方</li>

<li> 文章の表示のためにSPIPが使う印刷エンジンの性質;</li>

<li> 公開されているサイトの掲示板で使われる言語</li>

<li> プライベートエリア内で表示される標準言語</li></ul>',
	'texte_sous_titre' => 'サブタイトル',
	'texte_statistiques_visites' => '(黒い線： 日曜日 / 黒い曲線：平均水準)',
	'texte_statut_attente_validation' => '適正検査前',
	'texte_statut_publies' => 'オンラインに公開された',
	'texte_statut_refuses' => '拒否された',
	'texte_suppression_fichiers' => 'これを使うとSPIPのすべてのキャッシュファイルが削除されます。これを許可すると、特にサイトの構造や画像の重要な変更を入力している場合に備えて、すべてのページのリフレッシュを強制します。',
	'texte_sur_titre' => 'トップタイトル',
	'texte_table_ok' => ': このテーブルはOK。',
	'texte_tentative_recuperation' => '復元を試みる',
	'texte_tenter_reparation' => 'データベースの復元を試みる',
	'texte_test_proxy' => 'このプロキシを試すために、ここにあなたがテストしてみたいウェブサイトのアドレスを入力してください。',
	'texte_titre_02' => '件名:',
	'texte_titre_obligatoire' => '<b>タイトル</b> [必須]',
	'texte_travail_article' => '@nom_auteur_modif@は、@date_diff@分前、この記事で働いていた',
	'texte_travail_collaboratif' => '同じ記事上で数人のエディターが頻繁に働くと、システムは記事が同時に修正されるのを防ぐために最近«開かれた»と表示することができます。このオプションはたくさん警告メッセージが表示されるのを防ぐため、初めは無効になっています。',
	'texte_vide' => '空にする',
	'texte_vider_cache' => 'キャッシュを空にする',
	'titre_admin_tech' => '技術的なメンテナンス',
	'titre_admin_vider' => '技術的なメンテナンス',
	'titre_cadre_afficher_article' => '記事の表示:',
	'titre_cadre_afficher_traductions' => '次の言語のための、翻訳のステータスの表示:',
	'titre_cadre_ajouter_auteur' => '著者の追加:',
	'titre_cadre_interieur_rubrique' => 'セクションで',
	'titre_cadre_numero_auteur' => '著者番号',
	'titre_cadre_signature_obligatoire' => '<b>署名</b> [必須]<br />',
	'titre_config_fonctions' => 'サイトの設定',
	'titre_configuration' => 'サイトの設定',
	'titre_connexion_ldap' => 'オプションズ: <b>あなたのLDAPコネクション</b>',
	'titre_groupe_mots' => 'キーワードグループ:',
	'titre_langue_article' => '記事の言語', # MODIF
	'titre_langue_rubrique' => 'セクションの言語', # MODIF
	'titre_langue_trad_article' => '記事の言語と翻訳版',
	'titre_les_articles' => '記事',
	'titre_naviguer_dans_le_site' => 'このサイトをブラウザする...',
	'titre_nouvelle_rubrique' => '新しいセクション',
	'titre_numero_rubrique' => 'セクション番号:',
	'titre_page_articles_edit' => '変更: @titre@',
	'titre_page_articles_page' => '記事',
	'titre_page_articles_tous' => '全てのサイト',
	'titre_page_calendrier' => 'カレンダー @nom_mois@ @annee@',
	'titre_page_config_contenu' => 'サイトの設定',
	'titre_page_delete_all' => '撤回できない、ページ全体の削除',
	'titre_page_recherche' => '検索語 @recherche@ による検索結果',
	'titre_page_statistiques_referers' => '統計（入ってくるリンク）',
	'titre_page_upgrade' => 'SPIPアップグレード',
	'titre_publication_articles_post_dates' => '記事の投稿時間の公開',
	'titre_reparation' => '修理',
	'titre_suivi_petition' => '署名の把握',
	'trad_article_traduction' => '記事のすべてのバージョン:',
	'trad_delier' => 'この記事をその翻訳に関連付けないで下さい。', # MODIF
	'trad_lier' => 'この記事はこの記事番号の翻訳です:',
	'trad_new' => 'この記事の新しい翻訳を書く', # MODIF

	// U
	'utf8_convert_erreur_orig' => 'エラー: その文字セット　@charset@　は、対応していません。',

	// V
	'version' => 'バージョン:'
);

?>
