@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h2">
        {{ __('product.products') }}
    </p>
    <div class="lead"></div>
    <div class="row">
        <div class="col">
            <a href="{{ route('create_product') }}" class="btn btn-secondary float-left">{{__('common.add')}}</a>
        </div>
        <div class="col">

        </div>
    </div>
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('product.title') }}</th>
                <th scope="col">{{ __('product.description') }}</th>
                <th scope="col">{{ __('product.price') }}</th>
                <th scope="col">{{ __('product.category') }}</th>
                <th scope="col" class="text-center">{{ __('product.amount_stock') }}</th>
                <th scope="col" class="text-center">{{ __('product.amount_ratings') }}</th>
                <th scope="col" class="text-center">{{ __('common.action') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td class="text-center">{{ $product->amount_stock }}</td>
                    <td class="text-center">{{ $product->amount_ratings }}</td>
                    <td class="text-center" >
                        <a href="{{route('show_product', ['id' => $product->id])}}" class="btn btn-primary">
                            {{ __('common.view_short') }}
                        </a>
                        <a href="{{route('edit_product', ['id' => $product->id])}}" class="btn btn-secondary">
                            {{ __('common.edit_short') }}
                        </a>
                        <a href="{{route('delete_product', ['id' => $product->id])}}" class="btn btn-danger">
                            {{ __('common.delete_short') }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        {{ $products->links() }}
    </div>
</div>
@endsection
