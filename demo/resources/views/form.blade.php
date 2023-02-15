<!DOCTYPE html>
<html>
    <body>
        <form action="{{url('/')}}/show" method="POST">
          @csrf {{--generationg csrf token--}}
        
            username : <br>
            <input type="text" name="username" value="{{old('username')}}"><br>   
            <span>
                @error('username') {{--showing error to user--}}
                {{$message}}
                @enderror
            </span>
            <br>
            Email: <br>
            <input type="email" name="email" value="{{old('email')}}"><br>
            <span>
                @error('email'){{--showing error to user--}}
                {{$message}}
                @enderror
            </span>
            <br>

            password : <br>
            <input type="password" name="password"><br>
            <span>
                @error('password'){{--showing error to user--}}
                {{$message}}
                @enderror
            </span>
            <br>

            password : <br>
            <input type="password" name="password_confirmation"><br>
            <span>
                @error('password_confirmation'){{--showing error to user--}}
                {{$message}}
                @enderror
            </span>
            <br>

            <input type="submit" name="submit">
        </form>
    </body>
</html>