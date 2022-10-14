@extends('layouts.app')

@section('content')
    @foreach ($categories as $categori)
        <div class="card bg-dark mx-4 my-4 pt-4">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    @foreach ($categori->banks as $bank)
                        <div class="col-4 d-flex align-self-stretch mb-4">
                            <div class="card">
                                <div class="card-header text-center">{{ $bank->name }}</div>
                                <div class="card-body relative d-flex flex-column text-center">
                                    <p class="text-start">{{ Str::limit($bank->description, 150, ' .....') }}</p>
                                    <p class="mt-auto">
                                        <a href="#">
                                            {{ $bank->category->name }}
                                        </a>
                                    </p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="{{ route('typequestion', ['slug' => $bank->slug, 'bankId' => $bank->id]) }}">
                                        <div class="btn btn-info">Coba Soal</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endforeach
@endsection
