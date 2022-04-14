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
                
                <table class="table">
  <tbody>
    <tr>
      <td>product</td>
      <td>{{$order->product}}</td>
    </tr>
    <tr>
      <td>name</td>
      <td>{{$order->name}}</td>
    </tr>
    <tr>
      <td>name_kana</td>
      <td>{{$order->name_kana}}</td>
    </tr>
    <tr>
      <td>email</td>
      <td>{{$order->email}}</td>
    </tr>
    <tr>
      <td>tel</td>
      <td>{{$order->tel}}</td>
    </tr>
    <tr>
      <td>address</td>
      <td>{{$order->address}}</td>
    </tr>
    <tr>
      <td>card</td>
      <td>{{$order->card}}</td>
    </tr>
  </tbody>
</table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>