@extends('layouts.default')

@section('content')
<div class="container">
    <h3>{{ $result->title }}</h3>
    <div class="card grey lighten-4">
        {{ $result->body }}
    </div>

    <replies 
        form-title="{{ __('Reply Form') }}" 
        textarea-placeholder="{{ __('Type your answer') }}" 
        submit="{{ __('Submit') }}"
    >
        @include('layouts.default.preloader')
    </replies>
</div>
@endsection

@section('scripts')
    <script src="/js/replies.js"></script>
@endsection