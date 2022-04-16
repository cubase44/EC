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
                <form action="{{ route('contact.update', $contact->id) }}" enctype="multipart/form-data" method="POST" id="new">
      @csrf
      @method('POST')

      <fieldset class="mb-4">

        @csrf

            <div class="mb-3">
    <label class="form-label">name</label>
    <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{$contact->name}}"
                    class="form-control"
                    >
  </div>
  <div class="mb-3">
    <label class="form-label">name_kana</label>
    <input
                    id="name_kana"
                    type="text"
                    name="name_kana"
                    value="{{$contact->name_kana}}"
                    class="form-control"
                >
  </div>
  <div class="mb-3">
    <label class="form-label">contents</label>
    <input
                    id="contents"
                    type="text"
                    name="contents"
                    value="{{$contact->contents}}"
                    class="form-control"
                >
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