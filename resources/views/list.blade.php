


<table border="1px">
<tr>
<th>Kullanıcı_ID</th>
<th>Kullanıcı Adı</td>
<th> Şifre</th>
<th> Mail</th>
<th>Telefon Numarası</th></tr>
@foreach($data as $user)
<tr>

<td>{{$user->id}}</td>
<td> {{$user->user_name}} </td>
<td> {{$user->user_pass}} </td>
<td>{{$user->user_mail}}</td>
<td>{{$user->user_phone}}</td>

</tr>
@endforeach
</table>

