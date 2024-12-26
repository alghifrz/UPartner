<h1>Selamat datang di Dashboard Mahasiswa</h1>
<p>Data NIM yang dikirim: {{ $user->nim }}</p>
<p>Data Nama yang dikirim: {{ $user->name }}</p>
<p>Data Prodi yang dikirim: {{ $user->prodi->prodi_name }}</p>
<p>Data Email yang dikirim: {{ $user->email }}</p>
<p>Data Password yang dikirim: {{ $user->password }}</p>
