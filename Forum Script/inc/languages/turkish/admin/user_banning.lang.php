<?php
/********************************************************************************
 * MyBB 1.6 Turkish UTF-8 Dil Paketi                                            *
 * Copyright 2010 MyBB Group, All Rights Reserved                               *
 *                                                                              *
 * $Id: user_banning.lang.php 5297 2010-12-28 22:01:14Z Tomm $                  *
 **************************************************************************************************************
 * Turkish translator  : 21-05-2010 / 19:15:12 - (XpSerkan) (29.05.2012 - 11:17 - LoDoS)                      *
 *                                                                                                            *
 * Turkish translation : Copyright © 2010 TR - MyBBGrup.com - Turkish Website Development All Rights Reserved.*
 **************************************************************************************************************/

// Tabs
$l['banning'] = "Kullanıcı Yasakla";
$l['banned_accounts'] = "Yasaklanmış Kullanıcı Hesapları";
$l['banned_accounts_desc'] = "Buradan, foruma girişi yasaklanmış olan kullanıcıları yönetebilirsiniz.";
$l['ban_a_user'] = "Kullanıcı Yasakla";
$l['ban_a_user_desc'] = "Kullanıcıları buradan yasaklayabilirsiniz.";
$l['edit_ban'] = "Yasak Düzenleme";
$l['edit_ban_desc'] = "Yasaklanmış Kullanıcıların banlanma sebebini ve uzunluğunu buradan düzenleyebilirsiniz.";
$l['banned_ips'] = "Yasaklanmış IP Adresleri";
$l['disallowed_usernames'] = "Yasaklanmış Kullanıcı Adları";
$l['disallowed_email_addresses'] = "Yasaklı E-posta Adresleri";

// Errors
$l['error_invalid_ban'] = "Düzenlemek için geçersiz bir yasak seçtiniz.";
$l['error_invalid_username'] = "Girmiş olduğunuz kullanıcı adı yok ya da geçersiz.";
$l['error_no_perm_to_ban'] = "Bu kullanıcıyı yasaklama iznine sahip değilsiniz.";
$l['error_already_banned'] = "Bu kullanıcı zaten yasaklanmış grupta ve yenisine eklenemez.";
$l['error_ban_self'] = "Kendinizi yasaklayamazsınız.";
$l['error_no_reason'] = "Bu kullanıcı için bir yasak sebebi girmediniz.";

// Success
$l['success_ban_lifted'] = "Seçilen yasaklama başarılı bir şekilde kaldırıldı.";
$l['success_banned'] = "Seçilen kullanıcı başarılı bir şekilde yasaklandı.";
$l['success_ban_updated'] = "Seçilen yasaklama başarılı bir şekilde güncellendi.";
$l['success_pruned'] = "Seçilen kullanıcının mesajları ve konuları başarılı bir şekilde kaldırıldı.";

// Confirm
$l['confirm_lift_ban'] = "Bu yasağı iptal etmek istediğinizden emin misiniz?";
$l['confirm_prune'] = "Bu kullanıcı tarafından yazılan tüm konu ve mesajları kaldırmak istediğinize emin misiniz?";

//== Pages
//= Add / Edit
$l['ban_username'] = "Kullanıcı Adı <em>*</em>";
$l['autocomplete_enabled'] = "Oto-Tamamlama bu alanda aktif.";
$l['ban_reason'] = "Yasak Sebebi";
$l['ban_group'] = "Yasak Grubu <em>*</em>";
$l['ban_group_desc'] = "Bu kullanıcının yasaklanması için yasak grubuna taşınması gerekir.";
$l['ban_time'] = "Yasak Süresi <em>*</em>";

//= Index
$l['user'] = "Kullanıcı Adı";
$l['moderation'] = "Moderasyon İşlemleri";
$l['ban_lifts_on'] = "Yasağın Bitiş Tarihi";
$l['time_left'] = "Kalan Süre";
$l['permenantly'] = "Kalıcı Olarak";
$l['na'] = "Belirtilmemiş";
$l['for'] = "";
$l['bannedby_x_on_x'] = "<strong>{1}</strong><br /><small>Yasaklayan; {2} on {3} {4}</small>";
$l['lift'] = "Yasağı Kaldır";
$l['no_banned_users'] = "Şu anda yasaklanmış kullanıcı yok.";
$l['prune_threads_and_posts'] = "Konuları &amp; Yorumları kaldır";

// Buttons
$l['ban_user'] = "Kullanıcı Yasaklama";
$l['update_ban'] = "Yasak Güncelleme";

?>