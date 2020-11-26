<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
      width: 450px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #07A231;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


</style>
</head>
<body>
<br><br><br><br><br>
<center>
<form action="{{ route('login') }}" method="POST">
  {{ csrf_field() }}
  <div class="imgcontainer">
    <img src="{{ asset('img/feutech.jpg')}}">
  </div>

  <div class="container">
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" placeholder="Username" value="{{ old('email') }}" required autofocus style="width: 100%; padding: 12px 20px; margin: 8px 0;
                                display: inline-block; border: 1px solid #ccc; box-sizing: border-box;">

            @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                  @endif
        </div>
    </div>

    <!-- Account : Admin - admin@abcd.com    Pass: abcd001 || Usertype 1=admin/level3
              Juan - juan@abcd.com      Pass: abcd001 || Usertype 2=forvalidation/level2
              Level One - one@abcd.com  Pass: abcd001 || Usertype 0=reguser/level1 
               -->

    <!-- <input type="password" placeholder="Password" name="psw" required>  -->

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <div class="col-md-6">
          <input id="password" type="password" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
              <span class="help-block">
               <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
      </div>
    </div>

    <button type="submit">Login</button>
  </div>
</form>
</center>
</body>
</html>
