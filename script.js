
///Kullanıcı Girişi Şuan Kullanılmıyor Girişler Forumdan Olucak Sonradan Otomatik script ile foruma 
// yönlendirme yapılcak

var kullanıcılar = [
    {email:"selimmm1525@gmail.com@gmail.com",sifre:12345},
    {email:"selimkutuk@gmail.com",sifre:12345}

]

var email = prompt("email?");
var sifre = prompt("sifre");


function giris(){
    if((email == kullanıcılar[0].email && sifre== kullanıcılar[0].sifre)||
        (email ==kullanıcılar[1].email && sifre==kullanıcılar[1].sifre)){
        console.log("Giriş Yapıldı");
    }else{
        console.log("Kullanıcı adı veya şifre hatalı");
    }

}

giris(sifre,email);