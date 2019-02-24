@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h2">
        {{ __('category.categories') }}
    </p>
    <div class="lead"></div>
    <div class="row">
        <div class="col">
            <a href="{{ route('create_category') }}" class="btn btn-secondary float-left">{{__('common.add')}}</a>
        </div>
        <div class="col">

        </div>
    </div>
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ __('category.title') }}</th>
                <th scope="col" class="text-center">{{ __('common.action') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td class="text-center" >
                        <a href="{{route('show_category', ['id' => $category->id])}}" class="btn btn-primary">
                            {{ __('common.view_short') }}
                        </a>
                        <a href="{{route('edit_category', ['id' => $category->id])}}" class="btn btn-secondary">
                            {{ __('common.edit_short') }}
                        </a>
                        <a href="{{route('delete_category', ['id' => $category->id])}}" class="btn btn-danger">
                            {{ __('common.delete_short') }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        {{ $categories->links() }}
    </div>
</div>
@endsection
