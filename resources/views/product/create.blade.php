@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ __('common.home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products') }}">{{ __('product.products') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('product.add') }}</li>
        </ol>
    </nav>
    <p class="h2">
        {{ __('product.add') }}
    </p>
    <div class="lead"></div>
    <div class="row justify-content-center">
        <div class="card-body">
            <form method="POST" action="{{ route('store_product') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('product.title') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('product.description') }}</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required>

                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('product.price') }}</label>

                    <div class="col-md-6">
                        <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required>

                        @if ($errors->has('price'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="amount_stock" class="col-md-4 col-form-label text-md-right">{{ __('product.amount_stock') }}</label>

                    <div class="col-md-6">
                        <input id="amount_stock" type="text" class="form-control{{ $errors->has('amount_stock') ? ' is-invalid' : '' }}" name="amount_stock" value="{{ old('amount_stock') }}" required>

                        @if ($errors->has('amount_stock'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('amount_stock') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('product.category_id') }}</label>

                    <div class="col-md-6">
                        <input id="category_id" type="text" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" value="{{ old('category_id') }}" required>

                        @if ($errors->has('category_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="amount_ratings" class="col-md-4 col-form-label text-md-right">{{ __('product.amount_ratings') }}</label>

                    <div class="col-md-6">
                        <input id="amount_ratings" type="text" class="form-control{{ $errors->has('amount_ratings') ? ' is-invalid' : '' }}" name="amount_ratings" value="{{ old('amount_ratings') }}" required>

                        @if ($errors->has('amount_ratings'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('amount_ratings') }}</strong>
                            </span>
                        @endif
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
