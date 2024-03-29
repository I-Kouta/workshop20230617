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
      <h2 class="page-header">著者を登録する</h2>
      <div class="form-group">
        <form action="/author/create" method="post">
          @csrf <!-- 脆弱性対策 -->
          <input type="text" name="authorName" value="" class="form-control" placeholder="著者名" required>
          <button type="submit" class="btn btn-success pull-right">追加</button>
        </form>
      </div>

      <div class="container">
        <h2 class="page-header">本を登録する</h2>
        <div class="form-group">
          <form action="/book/create" method="post">
            @csrf
            <select class="form-select" aria-label="Default select example" name="author_id">
              <option value="">著者を選択してください。</option>
              @foreach($authors as $author)
              <option value="{{ $author->id }}">
                {{ $author->name }}
              </option>
              @endforeach
            </select>
            <input type="text" name="title" value="" class="form-control" placeholder="本のタイトル" required>
            <input type="text" name="price" value="" class="form-control" placeholder="本の金額" required>
            <button type="submit" class="btn btn-success pull-right">追加</button>
          </form>
        </div>
      </div>

    </div>
    <footer>
        <small>Laravel@work.curriculum</small>
    </footer>
</body>
</html>
