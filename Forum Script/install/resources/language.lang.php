<?php
/* INSTALL LANGUAGE VARIABLES */
$l['none'] = 'Yok';
$l['not_installed'] = 'Yüklü Değil';
$l['installed'] = 'Yüklü';
$l['not_writable'] = 'Yazma İzinleri Kapalı';
$l['writable'] = 'Yazma İzinleri Açık';
$l['done'] = '<img src="../images/valid.gif" alt="onay" style="vertical-align: middle; height="16" width="16" /> ';
$l['next'] = 'İleri';
$l['error'] = 'Hata <img src="../images/error_bg.gif" alt="Hata" style="vertical-align: middle; height="16" width="16" /> ';
$l['multi_byte'] = 'Multi-Bayt';
$l['recheck'] = 'Kontrol Et';

$l['title'] = "MyBB Forum Kurulum Sihirbazı";
$l['welcome'] = 'Hoşgeldiniz';
$l['license_agreement'] = 'Lisans Sözleşmesi';
$l['req_check'] = 'Sistem Gereksinimleri';
$l['db_config'] = 'Veritabanı Ayarları';
$l['table_creation'] = 'Veritabanı Tabloları';
$l['data_insertion'] = 'Tablolar Oluşturuluyor';
$l['theme_install'] = 'Tema Yükleniyor';
$l['board_config'] = 'Forum Ayaları';
$l['admin_user'] = 'Yönetici Ayarları';
$l['finish_setup'] = 'Kurulum Tamamlandı';

$l['table_population'] = 'Tablo Oluşum Bilgileri';
$l['theme_installation'] = 'Tema Kurulumu';
$l['create_admin'] = 'Yönetici Hesabı Oluşturma';

$l['already_installed'] = "Web hostunuzda, MyBB {1} forum sisteminin kurulu olduğu Tespit Edildi.";
$l['mybb_already_installed'] = "<p>MyBB forum kurulum sihirbazına hoşgeldiniz.<br />Web hostunuzda, MyBB {1} forum sisteminin kurulu olduğu Tespit Edildi.</p>
<p>Lütfen yapmak istediğiniz işlemi seçiniz:</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>Şu anki sürümünüz {1} sürümünden eski. Lütfen sürümünüzü MyBB {1} sürümüne yülseltin. <span style=\"font-size: 80%; color: maroon;\">(önerilen)</span></h3>
	<p>Bu seçenek şu anki sürümünüzü, MyBB {1} sürümüne yükseltmenize olanak sağlar.</p>
	<p>Şu anki versiyonunuzda bulunan, tüm konular,yorumlar ve kullanıcılar vb. güncelleme işleminden sonra yeni versiyona aktarılacaktır.</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"Forumu MyBB {1} Sürümüne Yükselt &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>Yeni bir MyBB forum kurulumu yapın.</h3>
	<p>This option will <span style=\"color: red;\">Bu işlem, kurulu sisteminizi silerek</span> yeni bir MyBB forum kurmanızı sağlar.</p>
	<p>Bu işlemin gerçekleşmesi için şu anda kurulu olan MyBB forumunuzu silerek, yeni bir MyBB forum kurulumu yapabilirsiniz.</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('Yeni bir MyBB forum kurulumu gerçekleştirmek istediğinizden eminmisiniz?\\n\\nBu işlem şu anda kurulu olan forumunuzu silecektir ve geri alınamaz!');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"MyBB {1} Kurulumunu Başlat &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB kurulum dosyalarını \"Upload\" klasörüyle birlikte yüklediğinizi tespit edildi.</h3>
	<p>Kurulum dosyalarını eğer \"Upload\" klasörüyle yüklediyseniz, kurulum işlemi başlamayabilir.<br /><br />Bu sorun hakkında ayrınlı bilgi için: <a href=\"http://wiki.mybb.com.tr/MyBB:Forum_Kurulumu\" target=\"_blank\">MyBB Wiki</a> sayfasını ziyaret edebilirsiniz.</p>
</div>";

$l['welcome_step'] = '<p><a href="http://www.mybb.com.tr" title="MyBB Resmi Türkçe Destek Sitesi" target="_blank"><b>MyBB.Com.TR</b></a> MyBB {1} Türkçe Kurulum Sihirbazına Hoşgeldiniz.<br />Bu işlem sayesinde web hostunuza yeni bir MyBB forum kurulumu gerçekleştirebilirsiniz.</p>
<p>MyBB kurulum sihirbazı ile aşağıdaki listede yer alan aşamalardan sırasıyla geçerek, kurulum işlemini tamamlamış olacaksınız.</p>
<ul>
	<li>MyBB için sistem geresinim kontrolü</li>
	<li>MySQL Veritabanı Ayarları</li>
	<li>Veritabanı Tablolarının Oluşturulması</li>
	<li>Varsayılan Verilerin Yüklenmesi</li>
	<li>Varsayılan Tema ve Şablonların Yüklenmesi</li>
	<li>Forum Ayaları ve Yönetici Hesabının Oluşturulması</li>
	<li>Kurulumun Sonu</li>
</ul>
<p>Üsteki listede yer alan her aşamayı tamamlamak için <b>[İleri]</b> tuşuna tıklayın.</p>
<p>Lisans sözleşmesini okumak ve kuruluma devam edebilmek için lütfen <b>İleri</b> tuşuna tıklayın.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> MyBBGroup için sunucu özellikleriniz hakkında anonim istatistikler gönderilsin mi?</label> (<a href="http://wiki.mybboard.net/index.php/Anonymous_Statistics" style="color: #555;" target="_blank"><small>Hangi bilgiler gönderilir?</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>Lisans sözleşmesinin koşullarını kabul ediyorsanız eğer, <font color="#00AF39">İleri</font> tuşuna tıklayıp kuruluma devam edebilirsiniz.</strong></p>';


$l['req_step_top'] = '<p>Bu kısımda, MyBB forum sistemi için gerekli olan minimum sistem geresinimleri ve ayarların geçerli olup olmadığını görebilirsiniz.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">Sistem Gereksinimlerinin Kontrolü</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">Sistem Gereksinimleri</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">PHP Versiyonu:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Desteklenen Veritabanları:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Desteklenen Çeviri Uzantıları:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">PHP XML Uzantıları:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">inc/config.php Dosyasının Yazma İzinleri:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">inc/settings.php Dosyasının Yazma İzinleri:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Cache/ Klasörünün Yazma İzinleri:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Uploads/ Klasörünün Yazma İzinleri:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Uploads/Avatars/ Klasörünün Yazma İzinleri:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>Tebrikler, MyBB kurulumu için sistem gereksinimlerini başarıyla sağladınız.</strong></p>
<p>Lütfen, kuruluma devam edebilmek için <b>İleri</b> tuşuna tıklayınız.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'MyBB kurulumu için gerekli minimum PHP sürümü 5.1.0 ve üzeridir. Sizin PHP sürümünüz {1} .';
$l['req_step_error_dboptions'] = 'MyBB kurulumunu gerçekleştirmek için gerekli olan bir yada daha fazla veritabanı uzantısını sizin sunucunuz desteklemiyor.';
$l['req_step_error_xmlsupport'] = 'MyBB kurulumunun gerçekleşmesi için sunucunuzun PHP XML Handling desteklemesi gerekiyor. Ayrıntılı bilgi için: <a href="http://www.php.net/xml" target="_blank">PHP.net</a> sitesini ziyaret edebilirsiniz.';
$l['req_step_error_configdefaultfile'] = 'MyBB kurulumunun gerçekleşmesi için (inc/config.default.php) dosyasının adını değiştirmeniz gerekiyor. Lütfen, <u>./inc/config.default.php</u> dosyasının adını <u>config.php</u> olarak değiştiriniz. Bu sorun hakkında <a href="http://destek.mybb.com.tr/" target="_blank">MyBB Türkçe Destek</a> sitesinden yardım talebinden bulunabilirsiniz.';
$l['req_step_error_configfile'] = '(./inc/config.php) dosyasının yazma izinleri kapalı. Lütfen, <u>config.php</u> dosyasının CHMOD izinlerini 777 yapınız. Bu sorun hakkında ayrıntılı bilgi için: <a href="http://wiki.mybb.com.tr/MyBB:CHMOD_Ayarlari/" target="_blank">MyBB Chmod</a> izinleri hakkında sayfasını ziyaret ediniz.';
$l['req_step_error_settingsfile'] = '(inc/settings.php) dosyasının yazma izinleri kapalı. Lütfen, <u>settings.php</u> dosyasının CHMOD izinlerini 777 yapınız. Bu sorun hakkında ayrıntılı bilgi için: <a href="http://wiki.mybb.com.tr/MyBB:CHMOD_Ayarlari/" target="_blank">MyBB Chmod</a> izinleri hakkında sayfasını ziyaret ediniz.';
$l['req_step_error_cachedir'] = '(cache/) klasörünün yazma izinleri kapalı. Lütfen, <u>(cache/)</u> klasörünün CHMOD izinlerini 777 yapınız. Bu sorun hakkında ayrıntılı bilgi için: <a href="http://wiki.mybb.com.tr/MyBB:CHMOD_Ayarlari/" target="_blank">MyBB Chmod</a> izinleri hakkında sayfasını ziyaret ediniz.';
$l['req_step_error_uploaddir'] = '(uploads/) klasörünün yazma izinleri kapalı. Lütfen, <u>(uploads/)</u> klasörünün CHMOD izinlerini 777 yapınız. Bu sorun hakkında ayrıntılı bilgi için: <a href="http://wiki.mybb.com.tr/MyBB:CHMOD_Ayarlari/" target="_blank">MyBB Chmod</a> izinleri hakkında sayfasını ziyaret ediniz.';
$l['req_step_error_avatardir'] = '(uploads/avatars/) klasörünün yazma izinleri kapalı. Lütfen, <u>(avatars/)</u> klasörünün CHMOD izinlerini 777 yapınız. Bu sorun hakkında ayrıntılı bilgi için: <a href="http://wiki.mybb.com.tr/MyBB:CHMOD_Ayarlari/" target="_blank">MyBB Chmod</a> izinleri hakkında sayfasını ziyaret ediniz.';
$l['req_step_error_cssddir'] = '(css/) klasörünün yazma izinleri kapalı. Lütfen, <u>(css/)</u> klasörünün CHMOD izinlerini 777 yapınız. Bu sorun hakkında ayrıntılı bilgi için: <a href="http://wiki.mybb.com.tr/MyBB:CHMOD_Ayarlari/" target="_blank">MyBB Chmod</a> izinleri hakkında sayfasını ziyaret ediniz.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3><img src="images/error_bg.gif" alt="Hata" style="vertical-align: middle; height="20" width="20" /> Hata</h3>
<p>MyBB kurulumu aşağıdaki hatalardan dolayı devam edemiyor. Lütfen aşağıdaki hataları düzeltip tekrar deneyin:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>MyBB forum kurulumunun devam edebilmesi için aşağıdaki kısımda veritabanı bilgilerinizi yazınız.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">Veritabanı Ayarları</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">Veritabanı Seçenekleri</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">Veritabanı Tipi:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}1</select></td>
</tr>
{2}
</table>
</div>
<p>Lütfen, kuruluma devam etmeden önce, girmiş olduğunuz bilgilerin doğruluğunu kontrol ederek, <b>İleri</b> tuşuna tıklayınız.</p>';

$l['database_settings'] = "Veritabanı Ayarları";
$l['database_path'] = "Veritabanı Yolu:";
$l['database_host'] = "Veritabanı Server Host Adı:";
$l['database_user'] = "Veritabanı Ftp\Kullanıcı Adı:";
$l['database_pass'] = "Veritabanı Ftp\Şifresi:";
$l['database_name'] = "Veritabanı Adı:";
$l['table_settings'] = "Tablo Ayarları";
$l['table_prefix'] = "Tablo Ön Eki:";
$l['table_encoding'] = "Tablo Formatı:";

$l['db_step_error_config'] = '<div class="error">
<h3><img src="images/error_bg.gif" alt="Hata" style="vertical-align: middle; height="20" width="20" /> Hata</h3>
<p>Kurulum sihirbazı aşağıdaki veritabanı bilgilerinin yanlış olduğunu tespit etti:</p>
{1}
<p>Üsteki tespit edilen hataları düzelterek, kurulum işlemine devam edebilirsiniz.</p>
</div>';
$l['db_step_error_invalidengine'] = 'Seçmiş olduğunuz veritabanı tipi geçersiz. Lütfen geçerli bir veritabanı seçeniz.';
$l['db_step_error_noconnect'] = '\'{1}\' Veritabanı ile bağlantı kuramadı. Girmiş olduğunuz ftp kullanıcı adı ve şifrenizin doğru olduğundan eminmisiniz?';
$l['db_step_error_nodbname'] = '\'{1}\' ile bağlantı kuralabilmesi için geçerli veritabanını seçiniz. Girmiş olduğunuz ftp kullanıcı adı ve şifrenizin doğru olduğundan eminmisiniz?';
$l['db_step_error_missingencoding'] = 'Tablo formatı için henüz bir seçim yapmadınız. Lütfen kuruluma devam etmeden önce, (\'UTF-8 Unicode\') formatının seçili olduğundan emin olun.';
$l['db_step_error_sqlite_invalid_dbname'] = 'Eğer SQLite veritabanı türünü kullanmak istiyorsanız, lütfen dosyaların bulunduğu dizinin ön ekini örnekteki gibi giriniz. (ön ek: /home/user/database.db).';
$l['db_step_error_invalid_tableprefix'] = 'Tablo ön eki için sadece (_) gibi alphanumeric karakterler içeren ön ek kullanabilirsiniz.<br />Lütfen kurulum işlemine devam etmeden önce geçerli bir tablo ön eki giriniz.';
$l['db_step_error_tableprefix_too_long'] = 'tablo ön eki için maksimum 40 karakter uzunluğunda bir ön ek kullanabilirsiniz.<br />Lütfen kurulum işlemine devam etmeden önce, izin verilen uzunlukta bir ön ek giriniz.';

$l['tablecreate_step_connected'] = '<p>Tebrikler, Veritabanı ile sunucu bağlantısı başarılı olarak tamamlandı.</p>
<p>Bağlantı Kurulan Veritabanı Tipi: <b>{1}</b> versiyon: <b>{2}</b></p>
<p>MyBB için veritabanı tabloları başarıyla oluşturuldu.</p>';
$l['tablecreate_step_created'] = '{1} , Tablosu başarıyla oluşturuldu. ';
$l['tablecreate_step_done'] = '<p>Tebrikler, tüm tablolar başarıyla oluşturuldu.<br />Kuruluma devam etmek için lütfen <b>İleri</b> tuşuna tıklayınız.</p>';

$l['populate_step_insert'] = '<p>Varsayılan temel tablolar oluşturuluyor.</p>';
$l['populate_step_inserted'] = '<p>Varsayılan veri bilgileri başarıyla oluşturuldu.<br />Şimdi MyBB default tema ve şablonlarının kurulumu için lütfen, <b>İleri</b> tuşuna tıklayınız.</p>';


$l['theme_step_importing'] = '<br /><p>MyBB için tema ve şablon setleri başarılı olarak yüklendi.<br /><br />Şimdi forum ve çerez ayarları aşamasına geçmek için lütfen, <b>İleri</b> tuşuna tıklayınız.</p>';
$l['theme_step_imported'] = '';


$l['config_step_table'] = '<p>Bu kısımda, aşağıdaki alanlara forum adı (title), forum adresi, çerez ve mail adres bilgilerinizi giriniz.<br />Bu ayarları kurulum işlemi bittikten sonra, Admin Panelinden kolaylıkla değiştirebilirsiniz.</p>
		<div class="border_wrapper">
			<div class="title">Genel Forum Ayarları</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">Forum Detayları</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">Forum Adı, title:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="Title olarak kullanılacak forum adı?" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">Forum URL\'si:<br />(sonunda slash kullanmayın!)</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Website Detayları</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">Website Adı:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="Footer\'da gösterilecek forum adı?" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">Website URL:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">Cookie, Çerez Ayarları <a title="Çerez ayarları nedir ve nasıl olmalıdır?" target="_blank" href="http://wiki.mybb.com.tr/MyBB:Cerez_Ayarlari/"><img src="images/help.png" alt="yardim" style="vertical-align: middle; height="16" width="16" border="0" /></a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">Cookie Domain:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">Cookie Yolu:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">İletişim Bilgileri:</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">İletişim Adresi:<br />(Footer\'da gösterilir.)</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>Lütfen kurulum işlemine devam edebilmek için <b>İleri</b> tuşuna tıklayın.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3><img src="images/error_bg.gif" alt="Hata" style="vertical-align: middle; height="16" width="16" /> Hata</h3>
<p>MyBB kurulum sihirbazı, aşağıdaki hatalardan dolayı devam edemiyor:</p>
{1}
<p>Lütfen üst kısımda belirtilen hataları düzeltip kuruluma devam ediniz.</p>
</div>';
$l['config_step_error_url'] = 'Forum URL\'sini girmediniz.';
$l['config_step_error_name'] = 'Forum adı belirtmediniz.';


$l['admin_step_setupsettings'] = '<p>Temel forum ayarları başarıyla tamamlandı.</p>';
$l['admin_step_insertesettings'] = '<p>{2} ayar gurubuna, {1} adet yeni ayar eklendi.</p>
<p>Kullanıcı tanımlama ayarları eklendi.</p>';
$l['admin_step_insertedtasks'] = '<p>{1} adet zamanlanmış görev eklendi.</p>';
$l['admin_step_insertedviews'] = '<p>{1} adet admin hesabı oluşturuldu.</p>';
$l['admin_step_createadmin'] ='<p>Giriş yapabilmek ve forumu yönetebilmek için bir yönetici hesabı oluşturmanız gerekiyor.<br />Bu hesabı oluşturmak için lütfen aşağıdaki gerekli alanları doldurunuz.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">Admin Hesap Bilgileri</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">Hesap Bilgileri</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">Kullanıcı Adı:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" autocomplete="off" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">Şifre:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off"  /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">Şifre Tekrar:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">İletişim Bilgileri</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">E-posta Adresi:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>Lütfen kurulumun son aşamasına geçmek için <b>İleri</b> tuşuna tıklayınız.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3><img src="images/error_bg.gif" alt="Hata" style="vertical-align: middle; height="16" width="16" /> Hata</h3>
<p>MyBB kurulum sihirbazı, aşağıdaki hataları tespit etti:</p>
{1}
<p>Üsteki hataları düzeltip kurulum işlemine devam edebilirsiniz.</p>
</div>';
$l['admin_step_error_nouser'] = 'Kullanıcı adı girmediniz.';
$l['admin_step_error_nopassword'] = 'Şifre girmediniz.';
$l['admin_step_error_nomatch'] = 'Girmiş olduğunuz şifreler uyuşmuyor.';
$l['admin_step_error_noemail'] = 'İletişim için e-posta adresi girmediniz.';

$l['done_step_usergroupsinserted'] = "<p>Kullanıcı grupları başarıyla oluşturuldu. ";
$l['done_step_admincreated'] = '<p>Admin hesabı başarıyla oluşturuldu. ';
$l['done_step_adminoptions'] = '<p>Yönetici izinleri başarıyla ayarlandı. ';
$l['done_step_cachebuilding'] = '<p>Cache verileri başarıyla yüklendi. ';
$l['done_step_success'] = '<p class="success">Tebrikler, MyBB forum kurulumunu başarıyla tamamladınız.</p>
<p><a href="http://mybb.com">MyBB Group</a>, tarafından kodlanan ve  <a href="http://www.mybb.com.tr">MyBB.Com.TR</a>, tarafından Türkçe\'ye çevrilen, MyBB forum yazılımını tercih ettiğiniz için teşekkür ederiz. MyBB forum yazılımı ile ilgili yardım almak, yeniliklerden haberdar olmak, yeni MyBB sürümlerine ulaşmak, birbirinden güzel ve gelişmiş eklentiler, temalar için <a href="http://www.mybb.com.tr">MyBB.Com.TR</a> adresini ziyaret edebilirsiniz.</p>';
$l['done_step_locked'] = '<p>MyBB kurulum sihirbazı kilitlendi. Kurulum sihirbazını yeniden çalıştırabilmeniz için <b>install</b> klasöründeki \'lock\' dosyasını silmeniz gerekiyor.</p><p>Forumunuzu görüntülemek için <a href="../index.php">Buraya</a> , Admin paneline ulaşmak için <a href="../admin/index.php">Buraya</a> tıklayınız.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="colour:red">MyBB forumunuzu görüntüleyebilmek için <span style=\"font-size: 80%; color: maroon;\">(install)</span> klasörünü silmeniz veya adını değiştirmeniz gerekiyor.</span></strong></p>';
$l['done_subscribe_mailing'] = '<div class="error"><p><strong>MyBB.Com.TR Hakkında !</strong></p><p>MyBB.Com.TR - MyBB Resmi Türkiye Destek Sitesi</p><p>MyBB ile ilgili yeni versiyon güncellemeleri, Eklenti, Modifikasyon, Tema ve yeniliklerden haberdar olmak için: </p><p><a href="http://rss.mybb.com.tr/" target="_blank">MyBB RSS Takip Merkezi</a>nden dilerseniz mail aboneliği yapabilirsiniz.</p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "MyBB Versiyon Yükseltme Sihirbazı";
$l['upgrade_welcome'] = "<p>MyBB {1} versiyon yükseltme sihirbazına hoşgeldiniz.</p><p>Versiyon yükseltme işlemine devam etmek için şu anda kullanmış olduğunuz versiyonu aşağıdaki seçeneklerden seçiniz.</p><p><strong>MyBB sürümünüzü yükseltmeden önce kesinlikle yedek almanızı öneriyoruz.</strong><br />Eğer herhangi bir hata ile karşılaşacak olursanız rahatlıkla yükseltme işlemini iptal edip, forumunuzu geri alabilirsiniz.<br />Bu işlem esnasında forumunuzun boyutuna göre sayfalarınızın yüklenmesi biraz zaman alabilir.</p><p>Eğer yedek aldıysanız ve versiyon yükseltme işlemine hazır olduğunuzu düşünüyorsanız, aşağıdaki seçeneklerden şu anda kullandığınız MyBB sürümünü seçerek <b>İleri</b> tuşuna tıklayınız.</p>";
$l['upgrade_templates_reverted'] = 'Şablonların Kontrolü Başarıyla Tamamlandı.';
$l['upgrade_templates_reverted_success'] = "<p>Şablonlarınızın güncelleme işlemi başarıyla tamamlandı. Lütfen güncelleme işlemine devam edebilmek için <b>İleri</b> tuşuna tıklayınız.</p>";
$l['upgrade_settings_sync'] = 'Eşleşme Ayarları Başarıyla Tamamlandı.';
$l['upgrade_settings_sync_success'] = "<p>Forum ayarlarınız, MyBB\'nin son sürümüne başarıyla yükseltildi.</p><p>{2} ayar grubu ile {1} adet yeni ayar eklendi.</p><p>Güncelleme işlemine devam etmek için lütfen <b>İleri</b> tuşuna tıklayınız.</p>";
$l['upgrade_datacache_building'] = 'Veritabanı Başarılı olarak Yapılandırıldı.';
$l['upgrade_building_datacache'] = '<p>Önbellek ayarları yapılandırılıyor..';
$l['upgrade_continue'] = 'Lütfen <b>İleri</b> tuşuna tıklayınız.';
$l['upgrade_locked'] = "<p>Güncelleme sihirbazı kilitlendi. Güncelleme sihirbazını yeniden çalıştırabilmeniz için <b>install</b> klasöründeki \'lock\' dosyasını silmeniz gerekiyor.</p><p>Forumunuzu görüntülemek için <a href=\"../index.php\">Buraya</a>  Admin paneline ulaşmak için <a href=\"../admin/index.php\">Buraya</a> tıklayınız.</p>";
$l['upgrade_removedir'] = 'Yükseltme yaptığınız MyBB forumunuzu görüntülemeden önce, lütfen (install) klasörünü silin veya adını değiştiriniz.';
$l['upgrade_congrats'] = "<p>Tebrikler, forumunuz MyBB {1} sürümüne başarıyla yükseltildi.</p>{2}<p><strong>Günlelleme işleminden sonra yapmanız gerekenler?</strong></p><ul><li>Bu yükseltme işleminde şablonlarınız güncellenmiş olacağından, güncellenen ve daha önce özelleştirmiş olduğunuz şablonları bularak düzenleme veya orjinal haline çevirme işlemi yaparak, olası yaşayabileceğiniz sorunları çözebilirsiniz.</li></ul>";
$l['upgrade_template_reversion'] = "Şablonların Dönüştürülmesi Hakkında";
$l['upgrade_template_reversion_success'] = "<p>Gerekli tüm veritabanı tabloları başarıyla kurulup, güncelleme işlemi tamamlanmıştır.</p><p>Güncelleme işlemi kullanmış olduğunuz temaların şablonlarının orjinal haline dönmesine neden olabilir. Bu sebepten dolayı <b>İleri</b> tuşuna tıklamadan önce, lütfen gerekli tüm yedeklerinizi aldığınızdan emin olun.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\"> MyBBGroup için sunucu özellikleriniz hakkında anonim istatistikler gönderilsin mi?</label> (<a href=\"http://wiki.mybboard.net/index.php/Anonymous_Statistics\" style=\"color: #555;\" target=\"_blank\"><small>Hangi bilgiler gönderilir?</small></a>)</p>";

$l['please_login'] = "Lütfen Giriş Yapınız";
$l['login'] = "Giriş Yap!";
$l['login_desc'] = "Lütfen güncelleme işlemine başlamadan önce kullanıcı adı ve şifrenizi giriniz. Bu işlemi sadece forum yöneticisi, (süper admin) gerçekleştirebilir.";
$l['login_username'] = "Kullanıcı Adı";
$l['login_password'] = "Şifre";
$l['login_password_desc'] = "Lütfen şifrelerin hassas ve büyük, küçük harf duyarlı olduğunu unutmayın!";

/* Error messages */
$l['locked'] = 'MyBB kurulum sihirbazı kilitli. Kurulum sihirbazını yeniden çalıştırabilmeniz için <b>install</b> klasöründeki \'lock\' dosyasını silmeniz gerekiyor.';
$l['no_permision'] = "Bu işlemi gerçekleştirebilmeniz için gerekli izniniz yok. Versiyon güncelleme işlemi yapabilmeniz için (süper admin), Forum yöneticisi olmanız gerekiyor.<br />(Süper admin) olmak için ./inc/config.php dosyasında kullanıcı ıd numaranızın ekli olması gerekir.<br /><br />Çıkış yapmak için lütfen <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">Buraya</a> tıklayın.";
?>