<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <x-layout>
    <form action="register" method="POST">
      @csrf
      <div class="mb-3">
        @error('username') 
        {{$message}}
        @enderror
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input value="{{old('username')}}" name="username" type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="user" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" value="{{old('email')}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        @error('password') 
        {{$message}}
        @enderror
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        @error('password') 
        {{$message}}
        @enderror
        <label for="exampleInputPassword1" class="form-label">confirm Password</label>
        <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="mb-3">
  <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body> -->

<form action="register" method="POST">
  @csrf
  <div class="mb-3">
    @error('username') 
    {{$message}}
    @enderror
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input value="{{old('username')}}" name="username" type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="user" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" value="{{old('email')}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    @error('password') 
    {{$message}}
    @enderror
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">LOGIN</button>
</form>

</x-layout>
</html>