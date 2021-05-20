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
								<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" placeholder="Enter your Name">
                                 @error('name') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>

                        <div class="form-group">
								<label for="email">Your Email</label>
								<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" placeholder="Enter your Email">
                                 @error('email') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>

						<div class="form-group">
								<label for="contact">Contact </label>
								<input type="text" class="form-control  @error('contact') is-invalid @enderror" id="contact" value="{{old('contact')}}" name="contact" placeholder="Enter your Contact">
                                 @error('contact') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>

						<div class="form-group">
								<label for="address">Address </label>
								<input type="text" class="form-control  @error('address') is-invalid @enderror" id="address" value="{{old('address')}}" name="address" placeholder="Enter your Address">
                                 @error('address') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>



                        <div class="form-group">
								<label for="nid">NID Number</label>
								<input type="number" class="form-control  @error('nid') is-invalid @enderror" id="nid" name="nid" value="{{old('nid')}}" placeholder="Enter your Nid">
                                 @error('nid') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>
                        <div class="form-group">
								<label for="password">   Your Password   </label>
								<input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" value="{{old('name')}}" placeholder="Enter your Passord">
                                 @error('password') <span class="text-danger font-weight-bolder">   {{$message}}   </span> @enderror
						</div>
                        <div class="form-group">
                            <label for="password_confirmation">   Confirm Password   </label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" value="{{old('name')}}" placeholder="Enter your Passord">

                    </div>


							<button type="submit">Register Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>



@stop
