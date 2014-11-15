<h1>Please login</h1>

<form method="post" action="<?=base_url()?>admin" class="authForm">
	<div>
		<label>Username</label>
		 <input type="text" required="yes" name="username" />
	</div>
	<div>
		<label>Password</label>
		<input type="password" required="yes" name="password" />
	</div>
	<div>
		<button type="submit">Login</button>
	</div>
</form>