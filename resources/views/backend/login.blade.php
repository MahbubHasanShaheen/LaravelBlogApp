<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		@use postcss-preset-env {
  stage: 0;
}

/* helpers/align.css */

.align {
  display: grid;
  place-items: center;
}

/* helpers/grid.css */

:root {
  --gridMaxWidth: 24em;
  --gridWidth: 90%;
}

.grid {
  inline-size: var(--gridWidth);
  margin-inline: auto;
  max-inline-size: var(--gridMaxWidth);
}

/* helpers/icon.css */

.icon {
  block-size: 1.25em;
  display: inline-block;
  inline-size: 1.25em;
  line-height: 1.25em;
  margin-right: 0.625em;
  text-align: center;
  vertical-align: middle;
}

.icon--info {
  background-color: #e5e5e5;
  border-radius: 50%;
}

/* layout/base.css */

:root {
  --bodyBackgroundColor: #eaeaea;
  --bodyColor: #999;
  --bodyFontFamily: 'Helvetica', 'Arial';
  --bodyFontFamilyFallback: sans-serif;
  --bodyFontSize: 0.875rem;
  --bodyFontWeight: 400;
  --bodyLineHeight: 1.5;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
}

body {
  background-color: var(--bodyBackgroundColor);
  font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
  font-size: var(--bodyFontSize);
  font-weight: var(--bodyFontWeight);
  line-height: var(--bodyLineHeight);
  margin: 0;
  min-block-size: 100vh;
}

/* modules/anchor.css */

:root {
  --anchorColor: inherit;
  --anchorHoverColor: #1dabb8;
}

a {
  color: var(--anchorColor);
  text-decoration: none;
  transition: color 0.3s;
}

a:hover {
  color: var(--anchorHoverColor);
}

/* modules/form.css */

fieldset {
  border: none;
  margin: 0;
}

input {
  appearance: none;
  border: none;
  font: inherit;
  margin: 0;
  outline: none;
  padding: 0;
}

input[type='submit'] {
  cursor: pointer;
}

.form input[type='text'],
.form input[type='password'] {
  inline-size: 100%;
}

/* modules/login.css */

:root {
  --loginBorderRadius: 0.25em;
  --loginHeaderBackgroundColor: #282830;

  --loginInputBorderRadius: 0.25em;
}

.login__header {
  background-color: var(--loginHeaderBackgroundColor);
  border-top-left-radius: var(--loginBorderRadius);
  border-top-right-radius: var(--loginBorderRadius);
  color: #fff;
  padding: 1.5em;
  text-align: center;
  text-transform: uppercase;
}

.login__title {
  font-size: 1rem;
  margin: 0;
}

.login__body {
  background-color: #fff;
  padding: 1.5em;
  position: relative;
}

.login__body::before {
  background-color: #fff;
  content: '';
  height: 0.5em;
  left: 50%;
  margin-left: -0.25em;
  margin-top: -0.25em;
  position: absolute;
  top: 0;
  transform: rotate(45deg);
  width: 0.5em;
}

.login input[type='text'],
.login input[type='password'] {
  border: 0.0625em solid #e5e5e5;
  padding: 1em 1.25em;
}

.login input[type='text'] {
  border-top-left-radius: var(--loginInputBorderRadius);
  border-top-right-radius: var(--loginInputBorderRadius);
}

.login input[type='password'] {
  border-bottom-left-radius: var(--loginInputBorderRadius);
  border-bottom-right-radius: var(--loginInputBorderRadius);
  border-top: 0;
}

.login input[type='submit'] {
  background-color: #1dabb8;
  border-radius: var(--loginInputBorderRadius);
  color: #fff;
  font-weight: 700;
  order: 1;
  padding: 0.75em 1.25em;
  transition: background-color 0.3s;
}

.login input[type='submit']:focus,
.login input[type='submit']:hover {
  background-color: #198d98;
}

.login__footer {
  align-items: center;
  background-color: #fff;
  border-bottom-left-radius: var(--loginBorderRadius);
  border-bottom-right-radius: var(--loginBorderRadius);
  display: flex;
  justify-content: space-between;
  padding-bottom: 1.5em;
  padding-left: 1.5em;
  padding-right: 1.5em;
}

.login__footer p {
  margin: 0;
}


	</style>
</head>
<body class="align">

  <div class="grid">
       @if($errors)
        @foreach($errors->all() as $error)
         <p class="text-danger">{{ $error }}</p>
        @endforeach
       @endif()


       @if(Session::has('error'))
        <p class="text-danger">{{session('error')}}</p>
       @endif
    <form action="" method="POST" class="form login">
         @csrf
      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
         
          <input type="text" name="user_name" placeholder="User Name"/>
        </div>

        <div class="form__field">
         
          <input type="password" name="password" placeholder="Password"/>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" value="Login">

        <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
      </footer>

    </form>

  </div>

</body>
</html>