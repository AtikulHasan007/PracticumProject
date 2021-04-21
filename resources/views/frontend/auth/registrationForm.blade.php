@extends('frontend.master')


@section('content')
<section class="my-account-area ptb-100">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12 col-md-12">
					<div class="register-form">
						<h2>Register</h2>
                        @if(session('success'))
    <div class="alert alert-success text-center">
    <p class="text-success">{{ session('success')}}</p>
    </div>
    @endif
						<form action="{{ route('motors.registration')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
								<label for="image">Your Photo</label>
								<input type="file" class="form-control" id="image" name="image">
						</div>
                        <div class="form-group">
								<label for="name">Your Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
                                 @error('name') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>
                        
                        <div class="form-group">
								<label for="email">Your Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
                                 @error('email') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>	

                        <div class="form-group">
								<label for="nid">NID Number</label>
								<input type="number" class="form-control" id="nid" name="nid" placeholder="Enter your Nid">
                                 @error('nid') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>	
                        <div class="form-group">
								<label for="password">   Your Password   </label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter your Passord">
                                 @error('password') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>
                        
                     
							<button type="submit">Register Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



@stop