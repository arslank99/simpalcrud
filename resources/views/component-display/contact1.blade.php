<x-layout>
	<x-slot name="title">Contact</x-slot>
	<x-slot name="content">
         <div class="container mt-5">
         	<h1 class="text-warning mb-5 border-bottom">Contact Us</h1>
         	<div class="row text-white mb-5">
         		<p class="mx-auto mb-5">Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Consequatur eveniet facilis culpa voluptates nostrum quaerat, asperiores, laboriosam blanditiis ad expedita distinctio adipisci voluptatibus eligendi eaque magnam, deleniti aliquid perspiciatis rerum?</p>
         		<div class="col-md-9 mb-5">
         			<form action="">
         				<div class="row g-3">
         					<div class="col-md-6">
         						<label>Your Name</label>
         						<input type="text" class="form-control mt-2" id="inputname">
         					</div>
         					<div class="col-md-6">
         						<label>Your Email</label>
         						<input type="text" class="form-control mt-2" id="inputemail">
         					</div>
         					<div class="col-md-12">
         						<label for="">Your Subject</label>
         						<input type="text" class="form-control mt-2" id="inputemail">
         					</div>
         					<div class="col-md-12">
         						<label for="">Your Message</label><br>
         						<textarea name="textarea" id="" cols="130" rows="5" required id="textarea"></textarea>
         					</div>
         				</div><br>
         				<button class="btn btn-primary" type="submit">Send</button>
         			</form>
         		</div>
         		<div class="col-md-3 text-center">
         			<ul class="list-unstyled">
         				<li>
         				<i class="fas fa-map-marker-alt fa-2x text-warning"></i>
         				<br>
         				<p>Lahore, Pakitan</p>
         				</li>
         				<li>
         				<i class="fas fa-phone mt-4 fa-2x text-warning"></i>
         				<br>
         				<p>+777-555-666</p>
         				</li>
         			   <li>
         				<i class="far fa-envelope fa-2x text-warning"></i>
         				<br>
         				<p>+777-555-666</p>
         			  </li>
         			</ul>
         		</div>
         	</div>
         </div>
         <div class="text-center mb-5" style="font-size: 25px;">
         	<a href="">
         		<i class="fab fa-facebook-f text-warning"></i>
         	</a>
         	<a href="">
         	<i class="fab fa-twitter text-warning mx-4"></i>
         	</a>
         	<a href="">
         		<i class="fab fa-instagram text-warning"></i>
         	</a>
         	<a href="">
         		<i class="fab fa-google-plus-g text-warning mx-4"></i>
         	</a>
         </div>
	</x-slot>
</x-layout>