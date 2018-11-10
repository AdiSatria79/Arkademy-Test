<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
function validasi($karakter)
  {
    var a =document.form.name.value;
    if(a=="")
    {
      alert("Masukan username");
      document.form.name.focus();
      return false;
    }
    if ((a.length <= 5)|| (a.length > 15))
    {
      alert(" username dengan lima karakter pertama huruf kecil dilanjutkan underscore atau titik dan dilanjutkan dua huruf besar! contoh :qwert_QQ");
      document.form.name.select();
      return false;
    }
    if(preg_match("/^[a-zA-Z]{5}+_+[0-9]{2}$/", $karakter)){
       alert("username ditemukan");
   }else{
     alert(" username dengan lima karakter pertama huruf kecil dilanjutkan underscore atau titik dan dilanjutkan dua huruf besar! contoh :qwert_QQ");
     document.form.name.select();
     return false;
   }
}
</script>
  </head>
  <body>
    <form name="form" method="post" onsubmit="return validasi()">
      <label for="">username</label>
      <input type="text" name="name" value="">
      <input type="submit" name="sub" value="Submit">
    </form>
  </body>
</html>
