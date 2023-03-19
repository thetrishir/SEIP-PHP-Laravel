@extends('master')
@section('title', 'Add Product')

@section('body')

    <div class="container py-3">
        <h1 class="text-center"> Add Product </h1>
        @if (Session::get('notification'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h2 class="text-success text-center">{{ Session::get('notification') }} </h2>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action="{{ route('addProduct') }}" method="POST" style="background-color: #f2f2f2; padding: 20px;">
            @csrf

            <div class="form-group" style="background-color: #fff; padding: 10px;">
                <label for="title">Product Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Product Title" required>
            </div>

            <div class="form-group" style="background-color: #fff; padding: 10px;">
                <label for="price">Product Price</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" class="form-control" name="price" min="0.00" step="0.01"
                        placeholder="0.00" required>
                </div>
            </div>

            <div class="form-group" style="background-color: #fff; padding: 10px;">
                <label for="description">Product Description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter Product Description" required></textarea>
            </div>

            <div class="col-auto" style="background-color: #fff;">
                <label for="color">Product Color</label>
                <input type="color" class="form-control" name="color" value="#000000">
            </div>

            <div class="col-auto p-3" style="background-color: #fff;">
                <label for="size">Product Size</label>
                <select name="size" class="form-control">
                    <option value="">- Choose Size -</option>
                    <option value="xxl">XXL</option>
                    <option value="xl">XL</option>
                    <option value="l">L</option>
                    <option value="m">M</option>
                    <option value="s">S</option>
                </select>
            </div>

            <div class="form-group" style="background-color: #fff; padding: 10px;">
                <label for="image">Product Image</label>
                <input type="file" class="form-control" name="image" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: #007bff; border-color: #007bff;">Add
                Product</button>
        </form>



    @endsection
