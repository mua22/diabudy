@extends('polo.layouts.master')
@section('content')
    <div class="row">
        <div class="content col-md-9">
            @yield('center')

        </div>

        <div class="sidebar sidebar-modern col-md-3">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Diabudy Text And Display Ads -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-6813325630235078"
                 data-ad-slot="8696291054"
                 data-ad-format="auto"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            @yield('sidebar')
        </div>
    </div>
@endsection