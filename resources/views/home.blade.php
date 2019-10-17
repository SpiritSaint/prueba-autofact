@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="tab-content" id="content">
                            <div class="tab-pane fade show active" id="last" role="tabpanel" aria-labelledby="last-tab">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (\App\Repositories\MonthlyFormRepository::can())
                                    @include('partials.form')
                                @else
                                    @include('partials.last-submit', ['last' => \App\Repositories\MonthlyFormRepository::last()])
                                @endif
                            </div>
                            @if (auth()->user()->is_admin)
                                @include('partials.graph')
                                @include('partials.all')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

