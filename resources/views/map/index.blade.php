@extends('layout.maindashboard')
@section('title')
    Home
@endsection
@section('style')
@endsection
@section('content')
<div class="col-lg-9">
    <img src="{{asset('images/').'/'.'gambar-logo.jpg'}}" width="900px" class="img-responsive">
    <p>Dapatkan layanan internet kecepatan tinggi hingga 100 Mbps. Saat ini Telkom Indonesia mempersembahkan inovasi layanan WiFi.id Corner di ribuan titik di berbagai kota di penjuru nusantara. Hal ini merupakan bentuk edukasi dan penetrasi internet kecepatan tinggi di Indonesia.</p> 

    <p>Di Wifi.id Corner, pelanggan bisa menikmati akses internet up to 100 Mbps unlimitted dengan menggunakan alat bayar (voucher wifi.id) yang teredia dalam beberapa pilihan, yaitu :</p> 
    <ul>
        <li>Voucher wifi.id card, bisa didapatkan di Plasa Telkom atau outlet pulsa terdekat</li>
        <li>Voucher wifi.id electric, bisa didapatkan di Alfamart, Indomaret, 7 eleven</li>
        <li>Voucher wifi.id potong pulsa 98108, mendapatkannya dengan cara ketik sms NET < spasi > 5000 kirim ke 98108</li>
    </ul>
    <p>
        <center>
        Flashzone Seamless, khusus untuk pelanggan data Telkomsel dengan cara download aplikasi di 
        <a class="btn btn-lg btn-success big-btn android-btn" href="https://play.google.com/store/apps/details?id=com.telkomsel.flashzone">
        <img width="80px" class="pull-left" src="http://www.userlogos.org/files/logos/jumpordie/google_play_04.png"><div class="btn-text"><small>Available on</small><br><strong>Google Play</strong></div></a>
        </center>
    </p>

</div>
@endsection
@section('script')
@endsection