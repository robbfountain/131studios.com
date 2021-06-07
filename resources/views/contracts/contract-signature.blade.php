@if($contract->approved_at)
    <div style="margin-top: 3em;">
        <img src="{{$contract->signature_image}}" alt="">
        <div>
            Date: {{$contract->approved_at->format('m-d-Y h:i')}}
        </div>
    </div>
@endif
