@extends('layouts.front')

@section('content')
    <div class="container">
        <h1>myProfile</h1>
        <hr color="#c0c0c0">
        @if (!is_null($headline))
              <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <h4>last modified</h4>
                                <div class="date">
                                    {{ $headline->updated_at->format('Y年m月d日') }}
                                </div>
                                <h4>name</h4>
                                <div class="title">
                                    {{ str_limit($headline->name, 150) }}
                                </div>
                                <h4>gender</h4>
                                <div class="title">
                                    {{ str_limit($headline->gender, 150) }}
                                </div>
                                <h4>hobby</h4>
                                <div class="body mt-3">
                                    {{ str_limit($headline->hobby, 1500) }}
                                </div>
                                <h4>introduction</h4>
                                <div class="body mt-3">
                                    {{ str_limit($headline->introduction, 1500) }}
                                </div>
                            </div>
                            
                        </div>
                    </div>
            
        @endif
        <hr color="#c0c0c0">
        
    </div>
    
@endsection