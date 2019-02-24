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
        {{ __('category.show') }}
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
                    <td>{{ __('category.title') }}</td>
                    <td>{{ $category->title }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
