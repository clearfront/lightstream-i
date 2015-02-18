<section class="content-section contact-form"> 
  <div class="container">
    <div class="row lightGallery work-gallery padding">
      <div class="col-lg-6 col-md-6 col-xs-12">
        <form action="sendmail.php" method="post" id="sendmail">
          <h3 style="color: #FFF; left: 0px; top: 0px; bottom: 4px; position: relative;">Have a project in mind or just want to say hi? </h3>
          <p>Please fill in our quick form and one of our representatives will contact you as soon as possible. </p>
          <input name="Name" type="text" id="Name" placeholder="* Full Name" class=" rounded col-lg-11 clearfix " data-validation="required" data-validation-error-msg="Please provide Full Name">
          
          <input name="Email" type="text" id="Email" placeholder="* Email"  class=" rounded col-lg-11 clearfix " data-validation="email" data-validation-error-msg="Please provide Email"/>
          
          <!--<input name="Budget" type="text" id="Budget" placeholder="Budget" class=" rounded col-lg-11 clearfix"/>-->
          
          <label>Budget</label>
          
          <select name="Budget" id="Budget" placeholder="Budget" class=" rounded col-lg-12 clearfix">
            <option value="1000-3000" selected="selected">£1000 - £3000</option>
            <option value="3000-5000">£3000 - £5000</option>
            <option value="5000-10000">£5000 - £10,000</option>
            <option value="10000-25000">£10,000 - £25,000</option>
            <option value="25000-50000">£25,000 - £50,000</option>
            <option value="50000-100000">£50,000 - £100,000</option>
            <option value="100000-150000">£100,000 - £150,000</option>
            <option value="150000-200000">£150,000 - £200,000</option>
            <option value="200000-250000">£200,000 - £250,000</option>
            <option value="250000-300000">£250,000 - £300,000</option>
            <option value="300000">£300,000 +</option>
          </select>
          
          <input name="Phone" type="text" id="Phone" placeholder="Phone" class=" rounded col-lg-11 clearfix" />
          
          <textarea name="Details"  id="Details" placeholder="Details" class="rounded  clearfix span11 "></textarea>
          
          <input name="Send" type="submit" class="clearfix roundedmore " id="Send"  value="SEND DETAILS" />
        </form>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12 padding">
        <p class="telephone">Tel: <span>0845 519 7209</span></p>
        <p class="telephone">Email: <span><a href="mailto:hi@lightstream-i.com">hi@lightstream-i.com</a></span></p>
        <p> Lightstream Interactive Ltd <br/>
          Progress Centre<br/>
          Charlton Place<br/>
          Manchester<br/>
          M12 6HS</p>
        <br/>
      </div>
    </div>
  </div>
</section>
