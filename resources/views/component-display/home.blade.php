<x-layout>
	<x-slot name="title">Home</x-slot>
	<x-slot name="content">
	<div class="text-center mt-3">
			<img src="{{ asset('images/office.jpg') }} " alt="" class="img-fluid" width="550px" height="200px">
	</div>
	<div class="mt-5 text-light text-justify ">
		<h1 class="fw-bold st-font">Hello,</h1>
	</div>
	<div class="px-4 text-light" style="line-height: 2rem;">

		<p style="text-indent: 100px;">I am <strong class="text-warning">Lucy Evans</strong> having 5 years of experince of Full Stack Development for global business.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut assumenda aliquam cupiditate error sint perspiciatis possimus, explicabo saepe, illum nesciunt iusto quisquam mollitia neque deserunt sequi omnis molestias dolor. Id.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Suscipit architecto illo est praesentium nobis eos rem, vel fugiat cum quo modi quasi consectetur adipisci, labore consequuntur expedita sequi, nesciunt deleniti.</p>
	</div>
	<div class="text-center">
		<a href="{{ route('contact1') }}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
		<a href="{{ route('contact1') }}" class="btn btn-outline-info mx-5 my-3">Contact</a>
	</div>
	</x-slot>
</x-layout>