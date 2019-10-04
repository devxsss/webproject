<article class="registrationform">
	<div >
	<h2 >登録フォーム</h2>
	<p>現在、Big West Academy Conferenceへの登録は行っていませんが、詳細についてメーリングリストに登録する場合は、以下のフォームに記入してください。</p>
	</div>
	<br>
	<form class="registration form-horizontal" action="#" >

	  <fieldset id="personalinfo form-group">
			<legend>Personal Info</legend>
		
				<section class="row">
					<label class="col col-lg-4 control-label" for="myname">Name</label>
					<div class="form-control">
						<input class="col col-lg-6" type="text" name="myname" id="myname" autofocus placeholder="Last, First" required>
					</div><!-- controls -->
				</section><!-- row -->

				<section class="row">
					<label class="col col-lg-4 control-label" for="companyname">Company Name</label>
					<div class="controls">
						<input class="col col-lg-6" type="text" name="companyname" id="companyname" />
					</div><!-- controls -->
				</section><!-- row -->

				<section class="row">
					<label class="col col-lg-4 control-label" for="myemail">Email</label>
					<div class="controls">
						<input class="col col-lg-6" type="email" name="myemail" id="myemail" required autocomplete="off" />
					</div><!-- controls -->
				</section><!-- row -->

	  </fieldset><!-- personal info -->
    <br>
	  <fieldset id="otherinfo">
			<legend>Other Info</legend>

				<section class="row">
		  	<label class="col col-lg-4 control-label">Request Type</label>
					<div class="controls col col-lg-6">
						<label class="radio">
							<input type="radio" name="requesttype" value="question" /> Question
						</label>
						<label class="radio">
							<input type="radio" name="requesttype" value="comment" /> Comment
						</label>
					</div><!-- controls -->
				</section><!-- row -->

				
				<section class="row">
		  	<label class="col col-lg-4 control-label">Subscribe</label>
					<div class="controls col col-lg-6">
					<label class="checkbox">
						<input type="checkbox" id="subscribe" name="subscribe" value="yes" />
						Would you like to subscribe to our e-mail list?
					</label>
					</div><!-- controls -->
				</section><!-- row -->
			
				<section class="row">
		  	<label class="col col-lg-4 control-label" for="reference">How did you hear about the Big West Academy Conference?</label>
					<div class="controls col col-lg-6 center">
						<select   name="reference" id="reference">
							<option>Choose...</option>
							<option value="friend">A friend</option>
							<option value="facebook">Facebook</option>
							<option value="twitter">Twitter</option>
						</select>
					</div><!-- controls -->
				</section><!-- row -->
   <br>
	  </fieldset>
	  <button class="btn btn-primary" style="margin:auto;display:block;" type="submit" name="submit">Submit</button>
	</form>
</article>