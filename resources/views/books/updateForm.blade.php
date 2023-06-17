<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>本を探そう</title>
</head>

<body class="container">

    <header>
        <a href="/index"><h1 class="page-header">Webアプリ開発ワークショップ</h1></a>
    </header>

    <div class="container">
      <h2 class='page-header'>本のタイトルや金額を変更する</h2>
      <div class="form-group">
        <form action="/book/update" method="post">
        @csrf
        <input type="hidden" name="id" value="">
        <label for="">本のタイトル</label>
        <input type="text" name="upTitle" value="{{ $books->title }}" class="form-control" required>
        <label for="">本の金額</label>
        <input type="text" name="upPrice" value="{{ $books->price }}" class="form-control" required>
        <button type="submit" class="btn btn-primary pull-right">更新</button>
      </form>
      </div>
    </div>
    <footer>
        <small>Laravel@work.curriculum</small>
    </footer>

</body>

</html>
