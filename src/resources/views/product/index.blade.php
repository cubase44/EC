<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <!-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> -->
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="mb-3">
                <p><a href="{{ route('product.create') }}" class="btn btn-outline-dark btn-sm">新規商品登録</a></p>
                </div>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $product)
    <tr>
      <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td><img class="example1" src=" {{ asset($product->image)}}"></td>
      <td class="text-nowrap">
            <div class="mb-3"><p><a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-outline-dark btn-sm">編集</a></p></div>
            <div><p><a href="{{ route('product.delete', ['id' => $product->id]) }}" class="btn btn-outline-dark btn-sm">削除</a></p></div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
img.example1 {
width: 96px;
height: 65px;
}
</style>