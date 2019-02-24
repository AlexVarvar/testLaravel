@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ __('common.home') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products') }}">{{ __('product.products') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('product.show') }}</li>
        </ol>
    </nav>
    <p class="h2">
        {{ __('product.show') }}
    </p>
    <div class="lead"></div>
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('common.field') }}</th>
                <th scope="col">{{ __('common.value') }}</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>{{ __('product.title') }}</td>
                    <td>{{ $product->title }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{ __('product.description') }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{ __('product.price') }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{ __('product.category') }}</td>
                    <td>{{ $product->category_id }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{ __('product.amount_stock') }}</td>
                    <td>{{ $product->amount_stock }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>{{ __('product.amount_ratings') }}</td>
                    <td>{{ $product->amount_ratings }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
