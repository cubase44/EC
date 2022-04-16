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
        <img class="example2" src="{{ asset('img/mainimage.jpeg') }}">
        <!-- <div class="product">FinderProでその一瞬を収める</div> -->
        </div>
        <!--メインビジュアル画像ここまで-->
        <!--ここからwrapperー-->
        <div id="wrapper">
<table>
    @foreach($products as $product)
    <tr>
      <td><img class="example1" src="{{ asset($product->image)}}"></td>
      <td><p>・{{$product->name}}　¥{{$product->price}}(+tax)</p><p>{{$product->description}}</p><p><a href="{{ route('order.create', ['id' => $product->id]) }}" class="btn btn-primary">商品を購入する</a></p></td>
    </tr>
    @endforeach
  </table>
        </div>
        <!--wrapperここまで-->
        <!--ここからフッター-->
        <footer class="footer">
        <div class="container">
          <div class="item1">CONTACT US</div>
          <div class="item1">ご要望など弊社にご連絡ください。<br>090-1234-5678(平日9:00〜18:00)</div>
          <div class="item3"><a href="{{ route('contact.create') }}" class="btn btn-secondary">お問い合せ</a></div> 
          <div class="item2">©️2022 FinderPro.</div>
        </div>
        </footer>
        <!--フッターここまで-->
    </body>
</html>

<style>
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
  bottom: 0;
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

.product{
  /* animation: SlideIn 5.0s infinite; */
    position: absolute;
    top:15%;
    left:50%;
    transform: translate(-50%,-50%);
    font-size:30px;
    color: white;
}

/* CSSアニメーションの設定 */
/* @keyframes SlideIn {
  0% {
    opacity: 0;
    transform: translateX(64px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
} */
</style>