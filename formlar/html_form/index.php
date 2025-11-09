<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Üyelik Formu</title>
</head>
<body>

<h2 style="text-align:center;">Üyelik Formu</h2>

<center>
<form>
  <table>
    <tr>
      <td><label for="phone">Telefon numaranız:</label></td>
      <td><input type="tel"
                 id="phone"
                 name="phone"
                 pattern="^05[0-9]{2}\s[0-9]{3}\s[0-9]{2}\s[0-9]{2}$"
                 placeholder="0532 234 45 45"
                 title="Lütfen şu biçimde girin: 0532 234 45 45"
                 required></td>
    </tr>
    <tr>
      <td><label for="pass">Şifreniz:</label></td>
      <td><input type="text"
                 id="pass"
                 name="pass"
                 pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                 placeholder="ŞifreBiçimi"
                 title="Lütfen şu biçimde girin: En az bir büyük, bir küçük harf, sayı ve 8 karakter"
                 required></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center;"><input type="submit" value="Gönder"></td>
    </tr>
  </table>
</form> 
</center>

</body>
</html>