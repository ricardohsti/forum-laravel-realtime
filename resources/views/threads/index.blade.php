@extends('layouts.default')

@section('content')
<div class="container">
    <h3>{{ __('Most recent Threads') }}</h3>
    <threads 
        title="{{ __('Threads') }}" 
        thread="{{ __('Thread') }}" 
        reply="{{ __('Reply') }}" 
        detail="{{ __('Details') }}"
    >
        @include('layouts.default.preloader')
    </threads>
</div>
@endsection

@section('scripts')
    <script src="/js/threads.js"></script>
@endsection