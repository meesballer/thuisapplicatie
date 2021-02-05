<h1>Sign In</h1>

@if ($errors->any ())

    <ul>

        {{implode ('', $errors->all ('<li>: message</li>'))}}

    </ul>

@endif

{{Form::open (array ('url' => 'logincheck'))}}

<p> {{Form::text ('gebruikersnaam', ‘‘, array ('placeholder'=>'Gebruikersnaam','maxlength'=>30))}} </p>

<p> {{Form::wachtwoord ('wachtwoord', array('placeholder'=>'Wachtwoord','maxlength'=>30)) }} </p>

<p> {{Form::submit ('Inloggen')}} </p>

{{Form::close ()}}
-
