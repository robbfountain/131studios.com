@extends('sphene.partials.layout')

@section('header')
    @include('sphene.partials.header-sub')
@stop

@section('content')
    <div class="container" id="app">
        <div class="row">
            <div class="col-md-12 text-center">
                <iframe id="invoiceIFrame" width="100%" height="1200" style="max-width:1000px"></iframe>
            </div>
        </div>
    </div>
    <script language="javascript">
        var iframe = document.getElementById('invoiceIFrame');
        iframe.src = 'https://portal.131studios.com/view/'
            + window.location.search.substring(1, 33);
    </script>
@endsection