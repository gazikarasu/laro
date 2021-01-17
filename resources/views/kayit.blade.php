
<form action="kaydet" method="POST">
@csrf
<label>Giriş Formu</label><br>
<br>
<label>User Name or Mail</label>
<br>
<input type="text" name="user_name" placeholder="User Name">
<br>
<label> Password</label>
<br>
<input type="password" name="pass" placeholder="Password">
<br>
<label>E-Mail</label>
<br>
<input type="email" name="mail" placeholder="E-Mail">
<br>
<label> Your Telephone Number </label>
<br>
<input type="number" name="number" placeholder="Your telephone number">
<input type="submit" value="Kayıt Ol">
 </form>
 <a href="list"> <button>Listele</button></a>