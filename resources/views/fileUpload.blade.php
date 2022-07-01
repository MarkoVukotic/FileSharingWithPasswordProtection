<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>File Upload</title>
</head>
<body>
  

  <h1>This page is for file uploads</h1>


  <form action="{{ route('shareFile') }}" method="POST" enctype="multipart/form-data"
  style="display: grid; gap:0.5rem; grid-template-columns:auto 1fr; max-width: 300px; margin: 0 aut">
    @csrf

    <label for="file">File:</label>
    <input type="file" name='file'>
    <label for="password">Password</label>
    <input id='password' name="password" type="password">

    <button style="grid-column: span 2;" class="submit">Submit</button>

  </form>

</body>
</html>