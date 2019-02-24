@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ __('common.home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('categories') }}">{{ __('category.categories') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('category.add') }}</li>
        </ol>
    </nav>
    <p class="h2">
        {{ __('category.edit') }}
    </p>
    <div class="lead"></div>
    <div class="row justify-content-center">
        <div class="card-body">
            <form method="POST" action="{{ route('update_category') }}">
                @csrf

                <input type="hidden" value="{{ $category->id }}" name="id">

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('category.title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $category->title }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('product.submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
