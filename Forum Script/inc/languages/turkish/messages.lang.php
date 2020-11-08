<?php
/***************************************************************************
 * MyBB 1.6 Turkish UTF-8 Dil Paketi                                       *
 * Copyright 2010 MyBB Group, All Rights Reserved                          *
 *                                                                         *
 * $Id: messages.lang.php 5740 2011-12-30 20:01:16Z ralgith $              *
 **************************************************************************************************************
 * Turkish translator  : 31-03-2012 / 22:45:42 - (XpSerkan), Fixed 1: 23-04-2013 / 14:11:06 (S.G)             * 
 *                                                                                                            *
 * Turkish translation : Copyright © 2010 TR - MyBBGrup.com - Turkish Website Development All Rights Reserved.*
 **************************************************************************************************************/

$l['click_no_wait'] = "Eğer Daha Fazla Beklemek İstemiyorsanız Lütfen Buraya Tıklayın.";
$l['redirect_return_forum'] = "<br /><br />Alternatif Olarak, <a href=\"{1}\">Foruma Geri Dön.</a>.";
$l['redirect_emailsent'] = "E-posta Mesajınız Başarıyla Gönderildi.";
$l['redirect_loggedin'] = "Başarılı Bir Şekilde Giriş Yaptınız.<br />Şimdi Geldiğiniz Yere Geri Yönlendiriliyorsunuz.";

$l['error_invalidpworusername'] = "Geçersiz kullanıcı adı veya şifre girdiniz. <br /><br />Eğer Şifrenizi Unuttuysanız, Lütfen Alttaki Link'ten Yeni Bir Tane Şifre Alınız.<br/>Yeni Şifre Almak İçin <a href=\"member.php?action=lostpw\">Buraya</a> Tıklayınız.";
$l['error_invalidpworusername1'] = "Geçersiz e-posta veya şifre girdiniz. <br /><br />Eğer Şifrenizi Unuttuysanız, Lütfen Alttaki Link'ten Yeni Bir Tane Şifre Alınız.<br/>Yeni Şifre Almak İçin <a href=\"member.php?action=lostpw\">Buraya</a> Tıklayınız.";
$l['error_invalidpworusername2'] = "Geçersiz bir kullanıcı adı, şifre veya e-posta adresi girdiniz. <br /><br />Eğer Şifrenizi Unuttuysanız, Lütfen Alttaki Link'ten Yeni Bir Tane Şifre Alınız.<br/>Yeni Şifre Almak İçin <a href=\"member.php?action=lostpw\">Buraya</a> Tıklayınız.";
$l['error_incompletefields'] = "Bir Veya Daha Fazla Alanı Boş Bıraktınız. Lütfen Geri Dönüp Gerekli Kısımları Doldurunuz.";
$l['error_alreadyuploaded'] = "<img src=\"images/icons/uyari.gif\" alt=\"Hata\" style=\"vertical-align: middle; height=\"14\" width=\"14\" /> Bu Mesaj Zaten Aynı İsimde Bir Eklenti İçeriyor. Lütfen Dosyayı Yeniden Adlandırın yada Farklı Bir Dosya Yüklemeyi Deneyiniz.<br />Veya Alternatif Olarak, <b>(Eklentiyi Güncelle)</b>'yebilirsiniz.";
$l['error_alreadyuploaded_perm'] = "Bu konuda zaten aynı isimde ek dosya var. Lütfen ya ek dosya ismini değişin yada var olan dosya ile değişin.";
$l['error_nomessage'] = "Üzgünüz, Geçerli Bir Mesaj Girmediniz. Devam Edebilmek İçin Lütfen Geri Dönüp Mesajı Düzeltiniz.";
$l['error_invalidemail'] = "Geçerli Bir E-posta Adresi Girmediniz.";
$l['error_nomember'] = "Belirttiğiniz Üye, Ya Geçersiz yada Mevcut Değil.";
$l['error_maxposts'] = "Üzgünüz, Fakat Günlük Mesaj Yollama Sınırını Aştınız.<br /><br />Günlük En Fazla {1} Tane Mesaj Gönderme Hakkınız Bulunuyor.";
$l['error_nohostname'] = "Girdiğiniz IP Adresine Göre Host Adı Bulunamadı.";
$l['error_invalidthread'] = "Belirtilen Konu Forumumuzda Mevcut Değil.";
$l['error_invalidpost'] = "Belirtilen Yorum Forumumuzda Mevcut Değil.";
$l['error_invalidattachment'] = "Belirtilen Eklenti Forumumuzda Mevcut Değil.";
$l['error_invalidannouncement'] = "Belirtmiş olduğunuz duyuru bulunamadı.";
$l['error_invalidforum'] = "Geçersiz Forum";
$l['error_closedinvalidforum'] = "Kapalı Bır Foruma Mesaj Göndermeye Çalışıyorsunuz,Veya Bu Bölüm Bir Kategori Olabilir.";
$l['error_attachtype'] = "Yüklemek İstediğiniz Eklentinin Dosya Türüne İzin Verilmiyor. Lütfen Yüklemek İçin Farklı Bir Dosya Türü Deneyiniz. <br /><strong>İzin Verilen Dosya Türleri:</strong> (zip, tar, txt, php, pdf, css, png, jpeg, gif) Gibi..";
$l['error_attachsize'] = "Yüklemek İstediğiniz Eklentinin Boyutu, İzin Verilenden Fazla Büyük. Maximum Bu Tür Yüklenebilir Dosya Boyutu: {1} KB.";
$l['error_uploadsize'] = "Yüklemeye Çalıştığınız Dosyanın Boyutu Çok Büyük.";
$l['error_uploadfailed'] = "Dosya Yükleme İşlemi Başarısız Oldu. Lütfen Yüklemek İçin Geçerli Bir Dosya Seçip Tekrar Deneyiniz.";
$l['error_uploadfailed_detail'] = "Hata Detayları: ";
$l['error_uploadfailed_php1'] = "PHP Döngüsü: Yüklenen dosyanın php.ini içinde maksimum dosya boyutu upload sınırını aştı. Lütfen bu hatayı forum yöneticinize bildiriniz.";
$l['error_uploadfailed_php2'] = "Yüklemeye Çalıştığınız Dosyanın Boyutu, Maksimum İzin Verilen Boyutu Aştı.";
$l['error_uploadfailed_php3'] = "Yüklemeye Çalıştığınız Dosya Kısmen Yüklenemedi.";
$l['error_uploadfailed_php4'] = "Hiçbir Dosya Yüklenmedi.";
$l['error_uploadfailed_php6'] = "PHP Döngüsü: Geçici Temporary Klasörü Eksik. Lütfen Bu Hatayı Forum Yöneticinize Bildiriniz.";
$l['error_uploadfailed_php7'] = "PHP Döngüsü: Dosya Diske Yazılamadı.  Lütfen Bu Hatayı Forum Yöneticinize Bildiriniz.";
$l['error_uploadfailed_phpx'] = "PHP Hata Kodu Döngüsü: {1}.  Lütfen Bu Hatayı Forum Yöneticinize Bildiriniz.";
$l['error_uploadfailed_nothingtomove'] = "Geçersiz Bir Dosya Belirtildi, Bu Yüzden Yüklenen Dosya Hedefine Taşınamadı.";
$l['error_uploadfailed_movefailed'] = "Dosya Hedefine Taşınırken Bir Hata Oluştu.";
$l['error_uploadfailed_lost'] = "Ekli Dosya Bu Sunucuda Bulunamadı.";
$l['error_emailmismatch'] = "Girilen E-posta Adresleri Uyuşmuyor. Lütfen Geri Dönüp Tekrar Deneyiniz.";
$l['error_nopassword'] = "Geçerli Bir Şifre Girmediniz.";
$l['error_usernametaken'] = "Seçtiğiniz Kullanıcı Adı Zaten Kayıtlı. Daha önce kayıt yapdıysanız, lütfen <a href=\"member.php?action=login\">Giriş</a> yapınız.";
$l['error_nousername'] = "Bir Kullanıcı Adı Girmediniz.";
$l['error_invalidusername'] = "Geçersiz Bir Kullanıcı Adı Girdiniz.";
$l['error_invalidpassword'] = "Hatalı Bir Şifre Girdiğiniz. Eğer Şifrenizi Unuttuysanız, <a href=\"member.php?action=lostpw\">Buraya</a> Tıklayınız. Veya Geri Dönüp Tekrar Deneyiniz.";
$l['error_postflooding'] = "Üzgünüz, Mesajınız Gönderilemiyor. Yöneticiler Sadece Her {1} Saniyede bir Mesaj Gönderebilme Hakkına Sahiptir.";
$l['error_nopermission_guest_1'] = "<img src=\"images/icons/uyari.gif\" alt=\"Hata\" style=\"vertical-align: middle; height=\"14\" width=\"14\" /> Ya Giriş Yapmadınız, Ya Da Bu Sayfaya Erişim İzniniz Yok. Veya Bunun Sebebi Aşağıdaki Nedenlerden Dolayı Olabilir:";
$l['error_nopermission_guest_2'] = "Ya giriş yapmadınız, ya da kayıtlı değilsiniz. Lütfen giriş yapabilmek için aşağıdaki giriş formunu kullanın.";
$l['error_nopermission_guest_3'] = "Yöneticilere ait özel bir bölüme veya izniniz olmayan bir kaynağamı girmeye çalışıyorsunuz? Forum kurallarından bu işlemi yapma yetkinizin olup olmadığını kontrol ediniz.";
$l['error_nopermission_guest_4'] = "Üyelik hesabınız yöneticiler tarafından iptal edilmiş veya hala aktivasyon maili bekliyor olabilirsiniz.";
$l['error_nopermission_guest_5'] = "Eğer Doğrudan Bu Sayfaya Eriştiyseniz, Size İzin Verilen, Uygun Formlar veya Linkleri Kullanabilirsiniz.";
$l['login'] = "Giriş Yap";
$l['need_reg'] = "Üyemiz Olmak İstermisiniz?";
$l['forgot_password'] = "Şifrenizimi Unuttunuz?";
$l['error_nopermission_user_1'] = "Bu Sayfaya Erişim İzniniz Yok. Bunun Sebebi Aşağıdaki Nedenlerden Dolayı Olabilir:";
$l['error_nopermission_user_ajax'] = "Bu Sayfaya Erişim İzniniz Yok.";
$l['error_nopermission_user_2'] = "Üyelik Hesabınız Banlanmış veya Bu Sayfaya Erişim İzniniz Engellenmiş Olabilir.";
$l['error_nopermission_user_3'] = "Yöneticilere Ait Özel Bölüme veya İzniniz Olmayan Bir Kaynağamı Girmeye Çalışıyorsunuz? Forum Kurallarından Bu İşlemi Yapma Yetkinizin Olup Olmadığını Kontrol Ediniz.";
$l['error_nopermission_user_4'] = "Hesabınız, Hala Aktivasyon Maili veya Yönetici Onayı Bekliyor Olabilir.";
$l['error_nopermission_user_5'] = "Eğer Doğrudan Bu Sayfaya Eriştiyseniz, Size İzin Verilen, Uygun Formlar veya Linkleri Kullanabilirsiniz.";
$l['error_nopermission_user_resendactivation'] = "Aktivasyon Kodunu Tekrar Yolla";
$l['error_nopermission_user_username'] = "Şu anda Giriş Yaptığınız Kullanıcı Adı: '{1}'";
$l['logged_in_user'] = "Kullanıcı Giriş Zamanı";
$l['error_too_many_images'] = "Çok Fazla Resim.";
$l['error_too_many_images2'] = "Üzgünüz, Mesajınız Çok Sayıda Resim İçerdiğinden Dolayı Gönderilemiyor. Devam Edebilmek İçin Lütfen Bazı Resimleri Siliniz.";
$l['error_too_many_images3'] = "<b>Not:</b> Mesaj Başına İzin Verilen Maximum Resim Sayısı";
$l['error_attach_file'] = "Dosya Yükleme Hatası";
$l['please_correct_errors'] = "Lütfen Devam Etmeden Önce Aşağıdaki Hataları Düzeltin:";
$l['error_reachedattachquota'] = "Üzgünüz, Eklentiyi Yükleyemezsiniz, Çünkü Eklenti Yükleme Limitiniz {1} Ulaştı.";
$l['error_maxattachpost'] = "Üzügünüz fakat, {1} dosyası konu başına izin verilen maksimum ek dosya ekleme limitine ulaştığı için eklenemiyor.";
$l['error_invaliduser'] = "Belirtilen kullanıcı geçersiz veya yok.";
$l['error_invalidaction'] = "Geçersiz Eylem";
$l['error_messagelength'] = "Üzgünüz, Mesajınız Çok Uzun Olduğu İçin Gönderilemiyor. Lütfen Mesajınızı Kısaltıp, Tekrar Göndermeyi Deneyiniz.";
$l['error_message_too_short'] = "Üzgünüz, Mesajınız Çok Kısa Olduğu İçin Gönderilemiyor.";
$l['failed_login_wait'] = "Başarız Giriş Sayısı Limitini Aştınız. Tekrar Giriş Yapmayı Denemek İçin, {1} Saat, {2} Dakika, {3} Saniye, Beklemeniz Gerekiyor.";
$l['failed_login_again'] = "<br />Geriye Sadece <strong>{1}</strong> Giriş Yapma Hakkınız Kaldı.";
$l['error_max_emails_day'] = "24 Saat İçinde Sadece {1} Mesaj Gönderme Hakkınız Olduğu İçin, Konuyu Arkadaşınıza Gönderme veya E-posta Kullanım Özelliklerini Kullanamazsınız.";

$l['emailsubject_lostpw'] = "Şifreni Sıfırla {1}";
$l['emailsubject_passwordreset'] = "Yeni Şifre {1}";
$l['emailsubject_subscription'] = "Yeni Yorum {1}";
$l['emailsubject_randompassword'] = "{1} Şifreniz";
$l['emailsubject_activateaccount'] = "{1} Hesap Aktivasyonu";
$l['emailsubject_forumsubscription'] = "{1} İçinde Yeni Konu";
$l['emailsubject_reportpost'] = "{1} Rapor Edilmiş Mesaj";
$l['emailsubject_reachedpmquota'] = "Özel Mesaj Kotanız Şu anda {1} Ulaştı";
$l['emailsubject_changeemail'] = "{1} E-posta Değişikliği";
$l['emailsubject_newpm'] = "{1} Yeni Özel Mesaj";
$l['emailsubject_sendtofriend'] = "{1} Web Sayfası";
$l['emailbit_viewthread'] = "... (Devamını Okumak İçin Konuyu Ziyaret Edin.)";

$l['email_lostpw'] = "{1},

{2}, Üyelik Hesabınız, Şifre Sıfırlama Aşamasında, Tamamlamak İçin Alttaki Linke Tıklamanız Gerekiyor.

{3}/member.php?action=resetpassword&uid={4}&code={5}

Eğer Üsteki Link Çalışmıyorsa, Lütfen Aşağıdaki Bağlantıyı Deneyiniz.

{3}/member.php?action=resetpassword

Aşağıdaki Bilgileri Girmeniz Gerekiyor:
Kullanıcı Adı: {1}
Aktivasyon Kodu: {5}


Teşekkürler,
{2} Yönetimi";
$l['email_lostpw1'] = "{1},

{2}, Üyelik Hesabınız, Şifre Sıfırlama Aşamasında, Tamamlamak İçin Alttaki Linke Tıklamanız Gerekiyor.

{3}/member.php?action=resetpassword&uid={4}&code={5}

Eğer Üsteki Link Çalışmıyorsa, Lütfen Aşağıdaki Bağlantıyı Deneyiniz.

{3}/member.php?action=resetpassword

Aşağıdaki Bilgileri Girmeniz Gerekiyor:
E-posta adresiniz
Aktivasyon Kodu: {5}

Teşekkürler,
{2} Yönetimi";
$l['email_lostpw2'] = "{1},

{2}, Üyelik Hesabınız, Şifre Sıfırlama Aşamasında, Tamamlamak İçin Alttaki Linke Tıklamanız Gerekiyor.

{3}/member.php?action=resetpassword&uid={4}&code={5}

Eğer Üsteki Link Çalışmıyorsa, Lütfen Aşağıdaki Bağlantıyı Deneyiniz.

{3}/member.php?action=resetpassword

Aşağıdaki Bilgileri Girmeniz Gerekiyor:
Kullanıcı Adı: {1} (veya e-posta adresiniz)
Aktivasyon Kodu: {5}

Teşekkürler,
{2} Yönetimi";

$l['email_reportpost'] = "{1} , {2} Bu Konuyu Rapor Etti:

{3}
{4}/{5}

Konunun Rapor Edilme Sebebi:
{7}

Bu Mesaj Forumdaki Tüm Yöneticilere Gönderildi.

Lütfen Bu Mesajı, Dikkatli Bir Şekilde, En kısa Sürede Kontrol Ediniz.";

$l['email_passwordreset'] = "{1},

{2} Şifreniz Sıfırlandı.

Yeni Şifreniz: {3}

Foruma Giriş Yapabilmek İçin Bu Şifreyi Kullanmanız Gerekiyor. Şifrenizi Foruma Giriş Yaptıktan Sonra Kullanıcı Paneli'nizden Değiştirebilir siniz.

Teşekkürler,
{2} Yönetimi";
$l['email_randompassword'] = "{1},

{2} Sitemize Üye Olup Aramıza Katıldığınız İçin Teşekkür Ederiz. Aşağıdaki Bilgileri Kullanarak {2}, Sitemize Giriş Yapabilirsiniz.

Kullanıcı Adı: {3}
Şifreniz: {4}

Giriş Yaptıktan Sonra Güvenliğiniz İçin Şifrenizi Değiştirmelisiniz. Şifrenizi Kullanıcı Paneli'nize Girerek, Sol Taraftaki Menüde Bulunan, (Şifreni Değiştir), Seçeneğine Tıklayıp Değiştirebilirsiniz.

Teşekkürler,
{2} Yönetimi";

$l['email_randompassword1'] = "{1},

{2} Sitemize Üye Olup Aramıza Katıldığınız İçin Teşekkür Ederiz. Aşağıdaki Bilgileri Kullanarak {2}, Sitemize Giriş Yapabilirsiniz.

E-posta adresiniz.
Şifreniz: {4}

Giriş Yaptıktan Sonra Güvenliğiniz İçin Şifrenizi Değiştirmelisiniz. Şifrenizi Kullanıcı Paneli'nize Girerek, Sol Taraftaki Menüde Bulunan, (Şifreni Değiştir), Seçeneğine Tıklayıp Değiştirebilirsiniz.

Teşekkürler,
{2} Yönetimi";

$l['email_randompassword2'] = "{1},

{2} Sitemize Üye Olup Aramıza Katıldığınız İçin Teşekkür Ederiz. Aşağıdaki Bilgileri Kullanarak {2}, Sitemize Giriş Yapabilirsiniz.

Kullanıcı Adı: {3} (veya e-posta adresiniz)
Şifreniz: {4}

Giriş Yaptıktan Sonra Güvenliğiniz İçin Şifrenizi Değiştirmelisiniz. Şifrenizi Kullanıcı Paneli'nize Girerek, Sol Taraftaki Menüde Bulunan, (Şifreni Değiştir), Seçeneğine Tıklayıp Değiştirebilirsiniz.

Teşekkürler,
{2} Yönetimi";

$l['email_sendtofriend'] = "Merhaba,

{2} Sitesindeki, Aşağıdaki Konunun İlgini Çekebileceğini Düşünüyorum:

{1}

{3}


{1} Mesajın Bir Kısmı Aşağıdadır:

------------------------------------------

{4}

------------------------------------------

Teşekkürler,
{2} Yönetimi
";

$l['email_forumsubscription'] = "{1},

{2}, {3} Bölümünde Yeni Bir Konu Başlattı. Bu {4}, Sizin Takip Ettiğiniz Forumdur.



Konu Başlığı: {5}

Mesajın Bir Kısmı Aşağıdadır:

-------------------------------------------

{6}

----------------------------------------------

Devamını Okumak İçin Lütfen Aşağıda Linki Ziyaret Edin:

{7}/{8}

Ayrıca Forumda Yeni Konu ve Yorumlar Olabilir. Fakat Siz Forumu Tekrar Ziyaret Edinceye Kadar, Hiçbir Bildirim Almazsınız.


Teşekkürler,
{4} Yönetimi

------------------------------------------

Takip İptal Bilgisi:

Bu Konu Hakkında, Mail Bildirimi Almak İstemiyorsanız, Aşağıda Linki Ziyaret Ediniz:
{7}/usercp2.php?action=removesubscription&type=forum&fid={9}&my_post_key={10}

------------------------------------------";

$l['email_activateaccount'] = "{1},

{2}, Sitesindeki Üyelik İşlemini Tamamlamak İçin Alttaki Linke Tıklamanız Gerekiyor.

{3}/member.php?action=activate&uid={4}&code={5}

Eğer Üsteki Link Çalışmıyorsa, Lütfen Aşağıdaki Bağlantıyı Deneyiniz.

{3}/member.php?action=activate



Aşağıdaki bilgileri girmeniz gerekiyor:

Kullanıcı Adı: {1}
Aktivasyon Kodu: {5}


Teşekkürler,
{2} Yönetimi";

$l['email_activateaccount1'] = "{1},

{2}, Sitesindeki Üyelik İşlemini Tamamlamak İçin Alttaki Linke Tıklamanız Gerekiyor.

{3}/member.php?action=activate&uid={4}&code={5}

Eğer Üsteki Link Çalışmıyorsa, Lütfen Aşağıdaki Bağlantıyı Deneyiniz.

{3}/member.php?action=activate

Aşağıdaki bilgileri girmeniz gerekiyor:
E-posta Adresiniz
Aktivasyon Kodu: {5}

Teşekkürler,
{2} Yönetimi";

$l['email_activateaccount2'] = "{1},

{2}, Sitesindeki Üyelik İşlemini Tamamlamak İçin Alttaki Linke Tıklamanız Gerekiyor.

{3}/member.php?action=activate&uid={4}&code={5}

Eğer Üsteki Link Çalışmıyorsa, Lütfen Aşağıdaki Bağlantıyı Deneyiniz.

{3}/member.php?action=activate

Aşağıdaki bilgileri girmeniz gerekiyor:
Kullanıcı Adı: {1} (veya e-posta adresiniz)
Aktivasyon Kodu: {5}

Teşekkürler,
{2} Yönetimi";

$l['email_subscription'] = "{1},

{2} Sizin Takip Ettiğiniz {3}. Bölümündeki Konuya Yorum Yazdı. Konu Başlığı {4}.

Mesajın Bir Kısmı Aşağıdadır:

------------------------------------------
{5}
------------------------------------------

Devamını Okumak İçin Lütfen Aşağıda Linki Ziyaret Edin:

{6}/{7}

Ayrıca Forumda Yeni Konu ve Yorumlar Olabilir. Fakat Siz Forumu Tekrar Ziyaret Edinceye Kadar, Hiçbir Bildirim Almazsınız.


Teşekkürler,
{3} Yönetimi

------------------------------------------

Takip İptal Bilgisi:

Bu Konu Hakkında, Mail Bildirimi Almak İstemiyorsanız, Aşağıda Linki Ziyaret Ediniz:

{6}/usercp2.php?action=removesubscription&tid={8}&key={9}&my_post_key={10}

------------------------------------------";
$l['email_reachedpmquota'] = "{1},

Bu Otomatik Olarak {2} Gelen E-posta Olup, Özel Mesaj Kotanızın Dolduğunu Bildirmek İçindir.

Bir veya Daha Çok Kullanıcı Size Özel Mesaj Göndermeye Çalıştı, Fakat Kotanız Dolu Olduğu İçin Başarılı Olamadılar.

Lütfen Gereksiz Özel Mesajlarınızı Silerek Kotanızın Açılmasını Sağlayınız, Ayrıca Özel Mesajları Silme İşlemi Esnasında, Çöp Kutusu'nuda Temizlemeyi Unutmayınız.

Teşekkürler,
{2} Yönetimi
{3}";
$l['email_changeemail'] = "{1},

{2}, E-posta Adresinizi Değiştirme Talebi Aldınız. (Lütfen Aşağıda Ayrıntılara Bakınız).

Eski E-posta Adresi: {3}
Yeni E-posta Adresi: {4}

Eğer Bu Değişikliklerin Doğruluğunu Onaylıyorsanız, {2}, Alttaki Linke Tıklamanız Gerekiyor.

{5}/member.php?action=activate&uid={8}&code={6}

Eğer Üsteki Link Çalışmıyorsa, Lütfen Aşağıdaki Bağlantıyı Deneyiniz

{5}/member.php?action=activate

Aşağıdaki Bilgileri Girmeniz Gerekiyor:

Kullanıcı Adı: {7}
Aktivasyon Kodu: {6}

Eğer E-posta Adresi Değişikliğini Onaylamazsanız, Eski E-posta Adresiniz Değişmeyecektir.


Teşekkürler,
{2} Yönetimi
{5}";
$l['email_newpm'] = "{1},

{3} Sitesinden Yeni Bir Özel Mesaj Aldınız, Gönderen {2}. Bu Mesajı Okumak İçin Linke Tıklayınız:

{4}/private.php

{3}, Gelen Mesajı Okumadığınız Takdirde, Yeni Bir Mesaj Geldiğinde Bildirim Almayabilirsiniz.

Ayrıca Kullanıcı Hesabınıza Girerek, Özel Mesaj Bildirimini Kapatabilirsiniz:

{4}/usercp.php?action=options


Teşekkürler,
{3} Yönetimi
{4}";
$l['email_emailuser'] = "{1},

{3} Sitesinden Yeni Bir Özel Mesaj Aldınız, Gönderen: {2},

------------------------------------------
{5}
------------------------------------------


Teşekkürler,
{3} Yönetimi
{4}

------------------------------------------
Diğer Üyelerden E-posta Bildirimi Almak İstemiyormusunuz?

Eğer Diğer Üyelerden E-posta Bildirimi Almak İstemiyorsanız, Kullanıcı Paneli'nize Girerek, Özel Mesaj Bildirimini Kapatabilirsiniz:

{4}/usercp.php?action=options

------------------------------------------";
?>