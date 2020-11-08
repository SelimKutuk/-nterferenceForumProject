<?php
/********************************************************************************
 * MyBB 1.6 Turkish UTF-8 Dil Paketi                                            *
 * Copyright 2010 MyBB Group, All Rights Reserved                               *
 *                                                                              *
 * $Id: tools_backupdb.lang.php 5297 2010-12-28 22:01:14Z Tomm $                *
 **************************************************************************************************************
 * Turkish translator  : 21-05-2010 / 19:15:12 - (XpSerkan) (28.05.2012 - 20:51 - LoDoS)                      * 
 *                                                                                                            *
 * Turkish translation : Copyright © 2010 TR - MyBBGrup.com - Turkish Website Development All Rights Reserved.*
 **************************************************************************************************************/


$l['database_backups'] = "Veritabanı Yedekleri";
$l['database_backups_desc'] = "Buradan sunucunuzdaki kurulu olan forumunuzun, yedek klasöründe mevcut saklanmış yedeklerin listesini bulabilirsiniz.<br />Yedek alma işlemi hakkında ayrıntılı bilgi için:  <b><a href=\"http://wiki.mybb.com.tr/MyBB:Yedek_Nasil_Alinir\" target=\"_blank\" title=\"MyBB Wiki - MyBB Yedek Nasıl Alınır?\">MyBB Wiki</a>&nbsp;<img src=\"../images/icons/external_link.png\" alt=\"\" height=\"8\" width=\"8\"></b> sayfasını ziyaret edebilirsiniz.";
$l['new_database_backup'] = "Yeni Veritabanı Yedeği";
$l['new_backup'] = "Yeni Yedek";
$l['new_backup_desc'] = "Bu kısımdan, veritabanınızın yeni bir yedeğini oluşturabilirsiniz.<br />Yedek alma işlemi hakkında ayrıntılı bilgi için:  <b><a href=\"http://wiki.mybb.com.tr/MyBB:Yedek_Nasil_Alinir\" target=\"_blank\" title=\"MyBB Wiki - MyBB Yedek Nasıl Alınır?\">MyBB Wiki</a>&nbsp;<img src=\"../images/icons/external_link.png\" alt=\"\" height=\"8\" width=\"8\"></b> sayfasını ziyaret edebilirsiniz.";
$l['backups'] = "Yedekler";
$l['existing_database_backups'] = "Oluşturulan Veritabanı Yedekleri";

$l['backup_saved_to'] = "Yedek Kaydedildi :";
$l['download'] = "İndir";
$l['table_selection'] = "Tablo Seçimi";
$l['backup_options'] = "Yedekleme Seçenekleri";
$l['table_select_desc'] = "Hangi tabloların yedeğini alacağınızı buradan seçebilirsiniz. CTRL tuşuna basılı tutarak, tabloları çoklu olarak seçebilirsiniz.";
$l['select_all'] = "Tümünü Seç";
$l['deselect_all'] = "Tümünün Seçimini Kaldır";
$l['select_forum_tables'] = "Forum Tablolarını Seçin";
$l['file_type'] = "Dosya Biçimi";
$l['file_type_desc'] = "Veritabanı yedeği olarak saklanmasını istediğiniz dosya biçimini seçiniz.";
$l['gzip_compressed'] = "GZIP Sıkıştırması";
$l['plain_text'] = "Düz Yazı";
$l['save_method'] = "Kayıt Metodu";
$l['save_method_desc'] = "Yedeğin kaydedileceği Metodu Seçiniz.";
$l['backup_directory'] = "Yedek Klasörü";
$l['backup_contents'] = "Yedeğin İçeriği";
$l['backup_contents_desc'] = "Yedeğe eklenmesini istediğiniz bilgiyi giriniz";
$l['structure_and_data'] = "Yapı ve Veri";
$l['structure_only'] = "Sadece Yapı";
$l['data_only'] = "Sadece Veri";
$l['analyze_and_optimize'] = "Seçimiş Olan Tabloları Analiz ve Optimize Et";
$l['analyze_and_optimize_desc'] = "Seçilmiş olan tabloların yedek alınırken, analiz ve optimize edilmesini ister misiniz?";
$l['perform_backup'] = "Yedeği Oluştur";
$l['backup_filename'] = "Yedek dosya ismi";
$l['file_size'] = "Dosya Boyutu";
$l['creation_date'] = "Oluşturulma Tarihi";
$l['no_backups'] = "Şu an oluşturulmuş bir yedek bulunmamaktadır.";

$l['error_file_not_specified'] = "İndirmek için herhangi bir veritabanı yedeğini seçmediniz";
$l['error_invalid_backup'] = "Seçtiğiniz yedek dosyası ya geçersiz ya da mevcut değil.";
$l['error_backup_doesnt_exist'] = "Belirtilen yedek mevcut değil";
$l['error_backup_not_deleted'] = "Yedek silinemedi.";
$l['error_tables_not_selected'] = "Yedek alımı için bir tablo seçmediniz.";
$l['error_no_zlib'] = "PHP için Zlib kütüphanesi aktif değil - GZIP Sıkıştırılmış veritabanı yedeği oluşturamazsınız.";

$l['alert_not_writable'] = "Yedek klasörünüz (Admin KP klasörü içindeki) yazılabilir değil. Sunucuda yedek kaydedemezsiniz. Yazılabilir olması için Chmod'unu 777 Yapınız";

$l['confirm_backup_deletion'] = "Bu yedeği silmek istediğinizi onaylıyor musunuz?";

$l['success_backup_deleted'] = "Yedek başarılı bir şekilde silindi.";
$l['success_backup_created'] = "Yedek başarılı bir şekilde oluşturuldu.";

?>