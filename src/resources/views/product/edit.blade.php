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
                @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
                <form action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data" method="POST" id="new">
      @csrf
      @method('POST')
      {{ csrf_field() }}

      <fieldset class="mb-4">

        @csrf

            <div class="mb-3">
    <label class="form-label">name</label>
    <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{$product->name}}"
                    class="form-control"
                    >
  </div>
  <div class="mb-3">
    <label class="form-label">price</label>
    <input
                    id="price"
                    type="text"
                    name="price"
                    value="{{$product->price}}"
                    class="form-control"
                >
  </div>
  <div class="mb-3">
    <label class="form-label">description</label>
    <input
                    id="description"
                    type="text"
                    name="description"
                    value="{{$product->description}}"
                    class="form-control"
                >
  </div>
  <div class="mb-3">
  <label class="form-label">imagename</label>
    <input
                    id="image"
                    type="text"
                    name="image"
                    value=""
                    class="form-control"
                >
  </div>
  <div class="mb-3">
  <label class="form-label">image</label>
  <input type="file" id="file" name="file" class="form-control">
  </div>
        <button type="submit" class="btn btn-outline-dark btn-sm">
          編集する
        </button>
      </fieldset>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>