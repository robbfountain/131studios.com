@extends('frontend.partials.layout')

@section('header')
    {{--@include('frontend.partials.header-sub')--}}
@stop

@section('content')
    @php
    header('X-Frame-Options: ALLOW-FROM https://example.com/');
    @endphp
    
    <center>
        <iframe id="invoiceIFrame" width="100%" height="1200" style="max-width:1000px"></iframe>
    </center>
    <script language="javascript">
        var iframe = document.getElementById('invoiceIFrame');
        iframe.src = 'https://client.131studios.com/view/'
            + window.location.search.substring(1, 33);
    </script>
@endsection