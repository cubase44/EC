<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>FinderPro</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    </head>
    <body>
        <!--ここからヘッダー-->
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <h2 class="letterspacing20px">FinderPro</h2>
</nav>

        </header>
        <!--ヘッダーここまで-->
        <!--ここからメインビジュアル画像-->
        <div id="main_visual">
        </div>
        <!--メインビジュアル画像ここまで-->
        <!--ここからwrapperー-->
        <div id="wrapper">
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
        <h2>購入手続き</h2>
        <p>以下のフォームに必要事項をご記入の上で購入を押してください</p>
        <form action="{{ route('order.store', ['id' => $product->id]) }}" enctype="multipart/form-data" method="POST" id="new">
      @csrf
      @method('POST')

      <fieldset class="mb-4">

        @csrf

  <div class="col-10 ml-3">
  <table class="table table-bordered">
  <tbody>
  <tr>
      <td>ご購入商品</td>
      <td>・{{$product->name}} ¥{{$product->price}}</td>
    </tr>
    <tr>
      <td>お名前</td>
      <td><input
                    id="name"
                    type="text"
                    name="name"
                    value=""
                    class="form-control"
                    ></td>
    </tr>
    <tr>
      <td>お名前(カナ)</td>
      <td><input
                    id="name_kana"
                    type="text"
                    name="name_kana"
                    value=""
                    class="form-control"
                ></td>
    </tr>
    <tr>
      <td>メールアドレス</td>
      <td><input
                    id="email"
                    type="text"
                    name="email"
                    value=""
                    class="form-control"
                ></td>
    </tr>
    <tr>
      <td>電話番号</td>
      <td><input
                    id="tel"
                    type="text"
                    name="tel"
                    value=""
                    class="form-control"
                ></td>
    </tr>
    <tr>
      <td>発送先住所</td>
      <td><input
                    id="address"
                    type="text"
                    name="address"
                    value=""
                    class="form-control"
                ></td>
    </tr>
    <tr>
      <td>支払い方法</td>
      <td><dd id="form_select">
            <input type="checkbox" name="card" value="1" id="card1" class="checkbox01" /><label
                for="card1"
                >VISAカードでのお支払い</label
            ><br />
            <input type="checkbox" name="card" value="2"  id="card2" class="checkbox01" /><label
                for="card2"
                >MASTERカードでのお支払い</label
            ><br />
      </dd></td>
    </tr>
  </tbody>
</table>
</div>
        <button type="submit" class="btn btn-outline-dark btn-sm">
          購入する
        </button>
        <button type="button" class="btn btn-outline-dark btn-sm" onclick="history.back()">戻る</button>
      </fieldset>
    </form>
        </div>
        <!--wrapperここまで-->
        <!--ここからフッター-->
        <footer class="footer">
        <div class="container">
          <div class="item1">CONTACT US</div>
          <div class="item1">ご要望など弊社にご連絡ください。<br>090-1234-5678(平日9:00〜18:00)</div>
          <div class="item3"><a href="{{ route('contact.create') }}" class="btn btn-info">お問い合せ</a></div>
          <div class="item2">©️2022 FinderPro.</div>
        </div>
        </footer>
        <!--フッターここまで-->
    </body>
</html>

<style>

#wrapper {
    position:relative;
	top: 50px;
			left:100px;
      width: 1200px;
}

img.example1 {
width: 500px;
height: 320px;
margin: 130px;
}

img.example2 {
width: 1450px;
height: 700px;
}

.item1 {
   float: left;
   padding: 40px 30px;
}

.item2 {
  position:relative;
			top: 80px;
			left:420px;
}

.item3 {
  position:relative;
			top: 40px;
			left:30px;
}

.letterspacing20px {
    letter-spacing: 5px;
}

.container-fluid {
    margin: 10px;
}

.navbar-collapse {
    margin: 10px;
}

#column ul {
	width: calc(100 + 20px);
	margin: 0 -10px;
	display: flex;
	flex-wrap: wrap;
}

#column li {
	padding: 0 10px 20px;
}

#column li a,
#column li a:visited {
	text-decoration: none;
	color: #111;
}

#column li p {
	font-size: 90%;
	margin-bottom: 3px;
}

#column li span {
	font-size: 80%;
	display: block;
}

.column02 li {
	width: calc(50% - 20px);
}

.column03 li {
	width: calc(33.3333% - 20px);
}

.column04 li {
	width: calc(25% - 20px);
}

.column05 li {
	width: calc(20% - 20px);
}

/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: -200px;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 150px;
  background-color: #dcdcdc;
}
 
 
/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */
 
.container {
  width: auto;
  max-width: 680px;
  padding: 0 15px;
}
.container .text-muted {
  margin: 20px 0;
}
</style>