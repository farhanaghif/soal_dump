@extends('layouts.app')

@section('content')
    @foreach ($types as $type)
        <div class="card bg-primary mx-4 my-4 pt-4">
            <div class="card-header">
                <h2 class="text-center" style="color: white">
                    {{ $type->type }}
                </h2>
                <h6 class="text-center" style="color: white">
                    {{ $type->bank->name }}
                </h6>
            </div>
            <div class="card-body">
                <p>
                    {{ $type }}
                </p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('question', ['bankId' => $type->bank_id, 'type' => $type->type]) }}">
                    <div class="btn btn-info">Kerjakan</div>
                </a>
            </div>
        </div>
    @endforeach
@endsection
