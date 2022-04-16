
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
                お知らせ一覧
                </div>
            </div>
        </div>
    </div>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="table">
                    <tbody>
                    @foreach($updates as $update)
                    @if($update->user_update == '1')
                    <tr>
                    <td><div class="mb-3">{{$update->created_at}}</div><div>管理者情報が更新されました。</div></td>
                    </tr>
                    @endif
                    @if($update->user_delete == '1')
                    <tr>
                    <td><div class="mb-3">{{$update->created_at}}</div><div>管理者情報が削除されました。</div></td>
                    </tr>
                    @endif
                    @if($update->product_create == '1')
                    <tr>
                    <td><div class="mb-3">{{$update->created_at}}</div><div>商品情報が登録されました。</div></td>
                    </tr>
                    @endif
                    @if($update->product_update == '1')
                    <tr>
                    <td><div class="mb-3">{{$update->created_at}}</div><div>商品情報が更新されました。</div></td>
                    </tr>
                    @endif
                    @if($update->product_delete == '1')
                    <tr>
                    <td><div class="mb-3">{{$update->created_at}}</div><div>商品情報が削除されました。</div></td>
                    </tr>
                    @endif
                    @if($update->order_create == '1')
                    <tr>
                    <td><div class="mb-3">{{$update->created_at}}</div><div>購入情報が登録されました。</div></td>
                    </tr>
                    @endif
                    @if($update->order_delete == '1')
                    <tr>
                    <td><div class="mb-3">{{$update->created_at}}</div><div>購入情報が削除されました。</div></td>
                    </tr>
                    @endif
                    @if($update->contact_create == '1')
                    <tr>
                    <td><div class="mb-3">{{$update->created_at}}</div><div>お問い合わせ情報が登録されました。</div></td>
                    </tr>
                    @endif
                    @if($update->contact_update == '1')
                    <tr>
                    <td><div class="mb-3">{{$update->created_at}}</div><div>お問い合わせ情報が更新されました。</div></td>
                    </tr>
                    @endif
                    @if($update->contact_delete == '1')
                    <tr>
                    <td><div class="mb-3">{{$update->created_at}}</div><div>お問い合わせ情報が削除されました。</div></td>
                    </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
