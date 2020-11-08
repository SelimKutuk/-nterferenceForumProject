<?php
 /*******************************************************************************
 * MyBB 1.6 Turkish UTF-8 Dil Paketi                                            *
 * Copyright © 2010 MyBB Group, All Rights Reserved                             *
 *                                                                              *
 * $Id:															                *
 **************************************************************************************************************
 * Turkish translator  : 27-07-2011 / 20:14:21 - (XpSerkan)   Edit: 26-04-2014 / 18:01 (XpSerkan)             *
 *                                                                                                            *
 * Turkish translation : Copyright © 2010 TR - MyBBGrup.com - Turkish Website Development All Rights Reserved.*
 *************************************************************************************************************/

$l['task_manager'] = "Zamanlanmış Görev Yönetimi";
$l['add_new_task'] = "Yeni Görev Ekle";
$l['add_new_task_desc'] = "Buradan, forumunuzda otomatik olarak çalışan yeni zamanlanmış görevler oluşturabilirsiniz.";
$l['edit_task'] = "Görev Düzenle";
$l['edit_task_desc'] = "Aşağıdan zamanlanmış görev için çeşitli ayarları düzenleyebilirsiniz.";
$l['task_logs'] = "Görev Kayıtları";
$l['view_task_logs'] = "Görev Kayıtlarını Gör";
$l['view_task_logs_desc'] = "Görev çalıştığında ve kayıt aktif olduğunda, sonuçlar ya da hatalar aşağıda listelenecektir. 30 Günden eski girişler otomatik olarak silinecektir.";
$l['scheduled_tasks'] = "Zamanlanmış Görevler";
$l['scheduled_tasks_desc'] = "Forumunuzda otomatik olarak çalışan görevleri buradan yönetebilirsiniz. Görevi çalıştırmak için, görevin sağındaki saat simgesine tıklayın.";

$l['title'] = "Görev Başlığı";
$l['short_description'] = "Kısa Bilgi";
$l['task_file'] = "Görev Dosyası";
$l['task_file_desc'] = "Çalışmasını dilediğin görevin için görev dosyasını seç.";
$l['time_minutes'] = "Zaman: Dakika";
$l['time_minutes_desc'] = "Bu görevin çalışması için olan Dakikaların listesini virgül ile ayırın. (0-59) Eğer '*' yazarsanız, bu görev her dakika başı çalışacaktır.";
$l['time_hours'] = "Zaman: Saat";
$l['time_hours_desc'] = "Bu görevin çalışması için olan Saatlerin listesini virgül ile ayırın. (0-23) Eğer '*' yazarsanız, bu görev her saat başı çalışacaktır.";
$l['time_days_of_month'] = "Zaman: Ayın Günleri";
$l['time_days_of_month_desc'] = "Bu görevin çalışması için olan Günlerin listesini virgül ile ayırın. (1-31) Eğer '*' yazarsanız, bu görev her gün başı çalışacaktır ya da dilediğiniz haftalık bir dilimi aşağıdan seç.";
$l['every_weekday'] = "Her İş günü";
$l['sunday'] = "Pazar";
$l['monday'] = "Pazartesi";
$l['tuesday'] = "Salı";
$l['wednesday'] = "Çarşamba";
$l['thursday'] = "Perşembe";
$l['friday'] = "Cuma";
$l['saturday'] = "Cumartesi";
$l['time_weekdays'] = "Zaman: İş günleri";
$l['time_weekdays_desc'] = "Bu görevin çalışması için bir iş günü seçin. Çoklu iş günü seçmek için CTRLye basılı tutun. Eğer her iş günü çalışsın istiyorsanız ya da önceden tanımlı bir iş günü girdiyseniz; 'Her İşgünü' nü seçiniz.";
$l['every_month'] = "Her Ay";
$l['time_months'] = "Zaman: Aylar";
$l['time_months_desc'] = "Bu görevin çalışması için bir ay seçin. Çoklu ay seçmek için CTRL'ye basılı tutun. Eğer her ay çalışmasını istiyorsanız; 'Her Ay' ı seçiniz.";
$l['enabled'] = "Görev Aktif Edilsin mi?";
$l['enable_logging'] = "Kayıt Tutulsun mu?";
$l['save_task'] = "Görevi Kaydet";
$l['task'] = "Görev";
$l['date'] = "Tarih";
$l['data'] = "Veri";
$l['no_task_logs'] = "Zamanlanmış görev için oluşmuş kayıt henüz yok.";
$l['next_run'] = "Sonra Çalıştır";
$l['run_task_now'] = "Görevi şimdi çalıştır";
$l['run_task'] = "Görevi çalıştır";
$l['disable_task'] = "Görev Pasifleştir";
$l['enable_task'] = "Görev Aktifleştir";
$l['delete_task'] = "Görevi Sil";
$l['alt_enabled'] = "Aktifleştirildi";
$l['alt_disabled'] = "Pasifleştirildi";

$l['error_invalid_task'] = "Belirtilen görev mevcut değil.";
$l['error_missing_title'] = "Zamanlanmış görev için bir başlık girmediniz.";
$l['error_missing_description'] = "Zamanlanmış görev için bir bilgi girmediniz.";
$l['error_invalid_task_file'] = "Seçtiğiniz görev dosyası mevcut değil.";
$l['error_invalid_minute'] = "Girdiğiniz dakika geçersiz.";
$l['error_invalid_hour'] = "Girdiğiniz saat geçersiz.";
$l['error_invalid_day'] = "Girdiğiniz gün geçersiz.";
$l['error_invalid_weekday'] = "Girdiğiniz işgünü geçersiz.";
$l['error_invalid_month'] = "Girdiğiniz ay geçersiz.";

$l['success_task_created'] = "Görev başarıyla oluşturuldu.";
$l['success_task_updated'] = "Görev başarıyla güncellendi.";
$l['success_task_deleted'] = "Görev başarıyla silindi.";
$l['success_task_enabled'] = "Görev başarıyla aktifleştirilidi.";
$l['success_task_disabled'] = "Görev başarıyla pasifleştirildi.";
$l['success_task_run'] = "Görev başarıyla çalıştırıldı.";

$l['confirm_task_deletion'] = "Bu zamanlanmış görevi silmeyi istediğinizden emin misiniz?";
$l['confirm_task_enable'] = "<strong>UYARI:</strong>Sadece Cron ile çalışacak bir görev aktifleştirmektesiniz. (Lütfen daha fazla bilgi için: <b><a href=\"http://wiki.mybb.com.tr\" target=\"_blank\" title=\"MyBB Wiki\">MyBB Wiki</a>&nbsp;<img src=\"http://destek.mybb.com.tr/images/ikon/external_link.png\" alt=\"URL'ye Git\" height=\"8\" width=\"8\"></b>) sayfasını ziyaret ediniz.";
$l['no_tasks'] = "Forumda hiçbir zamanlanmış görev bulunamadı.";

?>