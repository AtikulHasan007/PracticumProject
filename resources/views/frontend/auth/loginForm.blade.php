@extends('frontend.master')


@section('content')
<section class="my-account-area ptb-100">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12 col-md-12">
					<div class="register-form">
						<h2>Login</h2>
                        @if(session('message'))
                    <div class="alert alert-{{session('type')}} text-center">
                        <p class="text-success text-{{session('type')}}">{{ session('message')}}</p>
                     </div>
                 @endif

						<form action="{{ route('motors.login')}}" method="post">
                            @csrf
                        
                        
                        
                        <div class="form-group">
								<label for="email">Your Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
                                 @error('email') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>	

                       
                        <div class="form-group">
								<label for="password">   Your Password   </label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter your Passord">
                                 @error('password') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>
                        
                     
							<button type="submit">Login Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



@stop