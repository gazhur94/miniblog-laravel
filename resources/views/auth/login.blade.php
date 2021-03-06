

@extends('layouts.app')

@section('content')

<div class="container">
           
           <header>
               <h1>Login and Registration Form</h1>
               
           </header>
           <section>				
               <div id="container_demo" >
                   <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                   <a class="hiddenanchor" id="toregister"></a>
                   <a class="hiddenanchor" id="tologin"></a>
                   <div id="wrapper">
                       <div id="login" class="animate form">
                           <form   autocomplete="on" method="POST" action="{{ route('sendLogin') }}"> 
                                 {{ csrf_field() }}
                               <h1>Log in</h1> 
                               <p> 
                                   <label for="username" class="uname" > Your email or username </label>
                                   <input id="username" name="email" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                               </p>
                               <p> 
                                   <label for="password" class="youpasswd"> Your password </label>
                                   <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                               </p>
                               <p class="keeplogin"> 
                                   <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                   <label for="loginkeeping">Keep me logged in</label>
                               </p>
                               <p > 
                                  <input type="submit" name="login" value="Sign in">
                               </p>
                               <p class="change_link">
                                   Not a member yet ?
                                   <a href="#toregister" class="to_register">Join us</a>
                               </p>
                           </form>
                       </div>

                       <div id="register" class="animate form">
                           <form   autocomplete="on" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                               <h1> Sign up </h1> 
                               <p> 
                                   <label for="usernamesignup" class="uname" >Your username</label>
                                   <input id="usernamesignup" name="name" required="required" type="text" placeholder="mysuperusername690" />
                               </p>
                               <p> 
                                   <label for="emailsignup" class="youmail"  > Your email</label>
                                   <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                               </p>
                               <p> 
                                   <label for="passwordsignup" class="youpasswd" >Your password </label>
                                   <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                               </p>
                               <p> 
                                   <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password </label>
                                   <input id="passwordsignup_confirm" name="password_confirmation" required="required" type="password" placeholder="eg. X8df!90EO"/>
                               </p>
                               <p > 
                                   <input type="submit" name="register" value="Sign up"/> 
                               </p>
                               <p class="change_link">  
                                   Already a member ?
                                   <a href="#tologin" class="to_register"> Go and log in </a>
                               </p>
                           </form>
                       </div>
                       
                   </div>
               </div>  
           </section>
       </div>
@endsection