<?php
/********************************************************************************
 * MyBB 1.6 Turkish UTF-8 Dil Paketi                                            *
 * Copyright 2010 MyBB Group, All Rights Reserved                               *
 *                                                                              *
 * $Id$                                                                         *
 **************************************************************************************************************
 * Turkish translator  : 21-05-2010 / 19:15:12 - (XpSerkan) (28.05.2012 - 18:46 - LoDoS)                      *
 *                                                                                                            *
 * Turkish translation : Copyright © 2010 TR - MyBBGrup.com - Turkish Website Development All Rights Reserved.*
 **************************************************************************************************************/

// Tabs
$l['attachments'] = "Ek Dosyalar";
$l['stats'] = "Ek Dosya İstatistikleri";
$l['find_attachments'] = "Ek Dosya Arama";
$l['find_attachments_desc'] = "Dosya arama sistemi sayesinde, kullanıcıların foruma eklemiş olduğu ek dosyaları kolay bir şekilde tarama yaptırarak bulabilirsiniz.<br />Aşağıdaki arama kriterleri isteği bağlı arama alanlarıdır. Aşağıdaki alanlardan eğer arama yapmak için herhangi bir seçim yapılmışsa opsiyonel olarak arama dışı sonuçlar çıkacaktır.";
$l['find_orphans'] = "Hatalı Dosyaları Tara";
$l['find_orphans_desc'] = "Hatalı Dosyalar, veritabanı ve dosya sisteminde eksik yada yanlış eklenmiş dosyalardır. Hatalı Dosya arama sistemini kullanarak bu sorunları giderebilirsiniz.";
$l['attachment_stats'] = "Ek Dosya İstatistikleri";
$l['attachment_stats_desc'] = "Aşağıdaki bulunan ek dosyalar şu anda forumnuzda bulunan genel ek dosya istatistikleridir.";

// Errors
$l['error_nothing_selected'] = "Lütfen silmek için bir ek dosya seçiniz.";
$l['error_no_attachments'] = "Şu anda forumunuza eklenmiş herhangi bir ek dosya bulunamadı. Forumunuza ek dosya eklendiği zaman bu alana ulaşabilirsiniz.";
$l['error_not_all_removed'] = "Hatalı dosyalar başarılı olarak silindi, diğer dosyalar kullanıbilir olduğu için yükleme dizininden silinemedi.";
$l['error_invalid_username'] = "Geçersiz bir kullanıcı adı girdiniz.";
$l['error_invalid_forums'] = "Seçmiş olduğunuz forum(lardan) bir yada bir kaçı geçersiz.";
$l['error_no_results'] = "Belirtmiş olduğunuz arama kriterlerine uygun, herhangi bir ek dosya bulunamadı.";
$l['error_not_found'] = "Ek dosyalar, <b>Ftp/uploads</b> klasöründe bulunamadı.";
$l['error_not_attached'] = "Ek dosyanın yüklenmesinden bu yana 24 saat geçmiş, fakat herhangi bir konu veya yorum ile ilişkilendirilmemiş.";
$l['error_does_not_exist'] = "Bu ek dosya için ilişkilendirilmiş, herhangi bir konu veya yorum bulunamadı.";

// Success
$l['success_deleted'] = "Seçmiş olduğunuz ek dosyalar, başarılı olarak silindi.";
$l['success_orphan_deleted'] = "Seçmiş olduğunuz hatalı ek dosyalar, başarılı olarak yükleme dizininden silindi.";
$l['success_no_orphans'] = "Şu anda forumunuzda herhangi bir hatalı ek dosya bulunamadı.";

// Confirm
$l['confirm_delete'] = "Seçmiş olduğunuz ek dosyaları, silmek istediğinizden eminmisiniz?";

// == Pages
// = Stats
$l['general_stats'] = "Genel Ek Dosya İstatistikleri";
$l['stats_attachment_stats'] = "Ek Dosyalar - Ek Dosya İstatistikleri";
$l['num_uploaded'] = "<b>Yüklü Ek Dosya Sayısı</b>";
$l['space_used'] = "<b>Dosyaların Kullandığı Alan</b>";
$l['bandwidth_used'] = "<b>Tahmini Kullanılan Bant Genişliği</b>";
$l['average_size'] = "<b>Ortalama Ek Dosya Boyutu</b>";
$l['size'] = "Dosya Boyutu";
$l['posted_by'] = "Ekleyen Kullanıcı";
$l['thread'] = "Ekli Olduğu Konu";
$l['downloads'] = "İndirilme";
$l['date_uploaded'] = "Eklenme Tarihi";
$l['popular_attachments'] = "En Popüler 5 Dosya";
$l['largest_attachments'] = "Boyutu En Yüksek Olan 5 Dosya";
$l['users_diskspace'] = "En Çok Dosya Yükleyen 5 Kullanıcı";
$l['username'] = "Yükleme Yapan Kullanıcılar";
$l['total_size'] = "Toplam eklediği Dosya Boyutu";

// = Orphans
$l['orphan_results'] = "Hatalı Dosya Arama - Sonuçları";
$l['orphan_attachments_search'] = "Hatalı Dosya Ara";
$l['reason_orphaned'] = "Hatalı Olma Sebebi";
$l['reason_not_in_table'] = "Dosya Veritabanı Tablosunda Mevcut Değil";
$l['reason_file_missing'] = "Eklenen Dosya Hatalı yada eksik";
$l['reason_thread_deleted'] = "Dosyanın yüklü olduğu Konu Silinmiş";
$l['reason_post_never_made'] = "Konu veya yorum hiç oluşturulmamış";
$l['unknown'] = "Bilinmeyen";
$l['results'] = "Arama Sonuçları";
$l['step1'] = "1). Adım";
$l['step2'] = "2). Adım";
$l['step1of2'] = "1 / 2 Dosya Sistemi Taranıyor...";
$l['step2of2'] = "2 / 2 Veritabanı Taranıyor...";
$l['step1of2_line1'] = "Lütfen bekleyin. Dosya sistemindeki hatalı dosyalar taranıyor...";
$l['step2of2_line1'] = "Lütfen bekleyin. Veritabanındaki hatalı dosyalar taranıyor...";
$l['step_line2'] = "Tarama işlemi bittiğinde, otomatik olarak sonuç sayfasına yönlendireleceksiniz.";
$l['scanning'] = 'Taranıyor..';

// = Attachments / Index
$l['index_find_attachments'] = "Ek Dosyalar - Ek Dosya Ara / Bul";
$l['find_where'] = "Ek Dosya Araması";
$l['name_contains'] = "Dosya Adına Göre Ara";
$l['name_contains_desc'] = "wild card Araması yapmak için, dosya uzantısını giriniz. *.[Dosya Uzantısı]. <b>Örnek:</b> *.zip. , *.rar. , *.png. *.gif.  vb. gibi.";
$l['type_contains'] = "Dosya Türüne Göre Ara";
$l['forum_is'] = "Forum(larda) Ara";
$l['username_is'] = "Kullanıcı Adına Göre Ara";
$l['more_than'] = "Daha Fazla";
$l['greater_than'] = "Daha Büyük";
$l['is_exactly'] = "Tam Olarak";
$l['less_than'] = "Daha Küçük";
$l['date_posted_is'] = "Yüklenme Tarihine Göre Ara";
$l['days_ago'] = "Gün önce";
$l['file_size_is'] = "Dosya Boyutuna Göre Ara";
$l['kb'] = "KB";
$l['download_count_is'] = "İndirilme Sayısına Göre Ara";
$l['display_options'] = "Gösterim Seçenekleri";
$l['filename'] = "Dosya Adına Göre Listele";
$l['filesize'] = "Dosya Boyutuna Göre Listele";
$l['download_count'] = "İndirilme Sayısına Göre Listele";
$l['post_username'] = "Yükleyen Kullanıcı Adına Göre Listele";
$l['asc'] = "Yükselene Göre Listele";
$l['desc'] = "Azalana Göre Listele";
$l['sort_results_by'] = "Listeleme Seçenekleri";
$l['results_per_page'] = "Sayfa Başına Gösterilmesini İstediğiniz Sonuç Sayısı?";
$l['in'] = "-";

// Buttons
$l['button_delete_orphans'] = "Kontrol Edilen Hatalı Dosyaları Sil";
$l['button_delete_attachments'] = "Kontrol Edilen Dosyaları Sil";
$l['button_find_attachments'] = "Aramayı Başlat";

?>