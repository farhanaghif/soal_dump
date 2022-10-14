@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>{{ $types->type }}</h1>
    </div>
    @foreach ($types->questions as $question)
        <div class="card bg-primary mx-4 my-4 pt-4">
            <div class="card-header">
                <h2 class="text-center" style="color: white">
                    {{ $question->question }}
                </h2>
                <h6 class="text-center" style="color: white">
                    Ini Correct
                    {{ $question->correct }}
                </h6>
            </div>
            <div class="card-body">
                @foreach ($question->options as $option)
                    <h6>
                        {{ $option->option }}
                    </h6>
                @endforeach
                <p>
                    Ini Pembahasan
                    {{ $question->pembahasan }}
                </p>
            </div>
            {{--  <div class="card-footer text-center">
                <a href="{{ route('questions', ['bankId' => $questions->bank_id, 'questions' => $questions->questions]) }}">
                    <div class="btn btn-info">Kerjakan</div>
                </a>
            </div>  --}}
        </div>
    @endforeach
@endsection
