<?php
/********************************************************************************
 * MyBB 1.6 Turkish UTF-8 Dil Paketi                                            *
 * Copyright 2010 MyBB Group, All Rights Reserved                               *
 *                                                                              *
 * $Id: user_admin_permissions.lang.php 5297 2010-12-28 22:01:14Z Tomm $        *
 **************************************************************************************************************
 * Turkish translator  : 21-05-2010 / 19:15:12 - (XpSerkan) (29.05.2012 - 11:15 - LoDoS)                      *
 *                                                                                                            *
 * Turkish translation : Copyright © 2010 TR - MyBBGrup.com - Turkish Website Development All Rights Reserved.*
 **************************************************************************************************************/

$l['admin_permissions'] = "Yönetici İzinleri";
$l['user_permissions'] = "Kullanıcı İzinleri";
$l['user_permissions_desc'] = "Burada özel kullanıcılar için yönetici izinlerini yönetebilirsiniz.Bu etkin olarak bazı yöneticilerin Admin KP'de bazı bölümlere girişini kapatmanıza izin verir.";
$l['group_permissions'] = "Grup İzinleri";
$l['group_permissions_desc'] = "Yönetici izinleri Admin KP'ne girebilen kullanıcı gruplarına da uygulanabilir.Aynı şekilde bu aracı bazı yönetim gruplarının Admin KP'nde farklı bölümlere girişini kapatabilirsiniz.";
$l['default_permissions'] = "Varsayılan İzinler";
$l['default_permissions_desc'] = "Varsayılan yönetim izinlerinin uygulandığı kullanıcılar özel yönetim izinleri ayarlanmamış kullanıcılar ya da grup izinleri verilmemiş kullanıcılardır.";

$l['admin_permissions_updated'] = "Yönetici izinleri başarıyla güncelleştirildi.";
$l['revoke_permissions'] = "İzinleri Geri Al";
$l['edit_permissions'] = "İzinleri Düzenle";
$l['set_permissions'] = "İzinleri Ayarla";
$l['edit_permissions_desc'] = "Burada tüm sekmelere veya bazı sayfalara erişimi kısıtlayabilirsiniz. \"Ana Sayfa\"ya bütün administratörlerin erişebildiğini unutmayın.";
$l['update_permissions'] = "İzinleri Güncelle";
$l['view_log'] = "Kayıtları Görüntüle";
$l['permissions_type_group'] = "Grubun İzin Türü";
$l['permissions_type_user'] = "Kullanıcının İzin Türü";
$l['no_group_perms'] = "Şu anda ayarlanmış grup izinleri mevcut değildir.";
$l['no_user_perms'] = "Şu anda ayarlanmış kullanıcı izinleri mevcut değildir.";
$l['edit_user'] = "Kullanıcı Profilini Düzenle";
$l['using_individual_perms'] = "Bireysel İzinler Kullanılıyor";
$l['using_custom_perms'] = "Özel İzinler Kullanılıyor";
$l['using_group_perms'] = "Grup İzinleri Kullanılıyor";
$l['using_default_perms'] = "Varsayılan İzinler Kullanılıyor";
$l['last_active'] = "Son Aktivite";
$l['user'] = "Kullanıcı";
$l['edit_group'] = "Grubu Düzenle";
$l['default'] = "Varsayılan";
$l['group'] = "Grup";

$l['error_delete_super_admin'] = "Üzgünüz, ancak seçtiğiniz kullanıcı Süper Administratör olduğunu için bu işlemi gerçekleştiremezsiniz.<br /><br />Bu işlemi gerçekleştirebilmek için, kullanıcı IDnizi inc/config.php dosyasındaki Süper Administratörler listesine eklemeniz gerekmektedir.";
$l['error_delete_no_uid'] = "Bir yönetici/yönetici grubu izin IDsi girmediniz.";
$l['error_delete_invalid_uid'] = "Geçerli bir yönetici/yönetici grubu izin IDsi girmediniz.";

$l['success_perms_deleted'] = "Yönetici/yönetici grubu izinleri başarıyla geri alındı.";

$l['confirm_perms_deletion'] = "Bu yönetici/yönetici grubunun izinlerini geri almak istediğinize emin misiniz.";
$l['confirm_perms_deletion2'] = "Bu kullanıcı\'nın izinlerini geri almak istediğinize emin misiniz.";

?>