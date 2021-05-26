@extends('layouts.client')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-9  m-auto  border p-4">
            @if(isset($events))
            @foreach($events as $event)
            <div class="event">
                <div class="d-flex flex-row">
                    <img src="{{ 'http://localhost/admin/img/' . $event->imgSrc }}" width="200" height="150" alt="" srcset="">
                    <div class="infor ml-5">
                        @php echo $event->body @endphp
                        <a href="/event/{{ $event->eventId }}" class="float-right btn btn-success description">chi tiết</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection