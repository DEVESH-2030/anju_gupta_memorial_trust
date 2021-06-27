<?php include('header-inner.php'); ?>


  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="donate-form-content">
         <ul class="nav nav-tabs nav-justified">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Give Once</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Give Monthly</a>
          </li>
        </ul>
        <div class="tab-content p-md-5 p-sm-3">
          <div class="tab-pane active container" id="home">
            <form method="post">
              <div class="form-group">
                 <div class="radio mb-2">
                    <div class="input-group d-flex">
                      <input id="donation-24000" class="donation-24000" name="donationvalue" type="radio" value="24000" checked="checked">
                      <div class="d-flex mr-3">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                            <span class="fa fa-minus"></span>
                          </button>
                          </span>
                          <input type="text" name="quant[1]" class="form-control input-number" value="24000" min="24000" max="1000000000">
                          <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                            <span class="fa fa-plus"></span>
                          </button>
                          </span>
                      </div>
                      <div><p class="mb-0">Stop child labour for 40 children by connecting their parents to social protection and welfare</p>
                      </div>
                    </div>
                 </div>
                 <div class="radio mb-2">
                    <div class="input-group d-flex">
                      <input id="donation-12000" class="donation-12000" name="donationvalue" type="radio" value="12000">
                      <div class="d-flex mr-3">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                            <span class="fa fa-minus"></span>
                          </button>
                          </span>
                          <input type="text" name="quant[2]" class="form-control input-number" value="12000" min="12000" max="1000000000">
                          <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                            <span class="fa fa-plus"></span>
                          </button>
                          </span>
                      </div>
                      <div><p class="mb-0">Protect 10 children from the threat of malnutrition through proper monitoring and care</p>
                      </div>
                    </div>
                 </div>
                 <div class="radio mb-2">
                    <div class="input-group d-flex">
                      <input id="donation-7200" class="donation-7200" name="donationvalue" type="radio" value="7200">
                      <div class="d-flex mr-3">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
                            <span class="fa fa-minus"></span>
                          </button>
                          </span>
                          <input type="text" name="quant[3]" class="form-control input-number" value="7200" min="7200" max="1000000000">
                          <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
                            <span class="fa fa-plus"></span>
                          </button>
                          </span>
                      </div>
                      <div><p class="mb-0">Ensure 6 out of school children are enrolled back into school</p>
                      </div>
                    </div>
                 </div>
                 <div class="radio mb-2">
                    <div class="input-group d-flex">
                      <input id="donation-3600" class="donation-3600" name="donationvalue" type="radio" value="3600">
                      <div class="d-flex mr-3">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[4]">
                            <span class="fa fa-minus"></span>
                          </button>
                          </span>
                          <input type="text" name="quant[4]" class="form-control input-number" value="3600" min="3600" max="1000000000">
                          <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[4]">
                            <span class="fa fa-plus"></span>
                          </button>
                          </span>
                      </div>
                      <div><p class="mb-0">Give 5 children a healthy start to life by connecting them to proper healthcare</p>
                      </div>
                    </div>
                 </div>
                 <div class="radio mb-2">
                    <div class="input-group d-flex">
                      <input id="donation-24000" class="donation-24000" name="donationvalue" type="radio" value="24000">
                      <div class="d-flex mr-3">
                       <input type="text" name="" class="form-control ml-4" value="" min="" max="" placeholder="Amount">
                      </div>
                      <div><p class="mb-0">Yes! I want to ensure happy childhoods and brighter futures</p>
                      </div>
                    </div>
                 </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-2">
                    <label>Title</label>
                    <select class="form-control">
                      <option>Select</option>
                      <option>Mr.</option>
                      <option>Ms.</option>
                      <option>Mrs.</option>
                      <option>others</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <label>First Name <span>*</span></label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="col-sm-5">
                    <label>Last Name <span>*</span></label>
                    <input type="text" name="" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-2">
                    <label>Date</label>
                    <select class="form-control">
                      <option>Select</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                   <label>Month</label>
                    <select class="form-control">
                      <option>Select</option>
                      <option>Jan</option>
                      <option>Feb</option>
                      <option>Mar</option>
                      <option>Apr</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <label>Year</label>
                    <select class="form-control">
                      <option>Select</option>
                      <option>2018</option>
                      <option>2019</option>
                      <option>2020</option>
                      <option>2021</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>PAN No.</label>
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-sm-6">
                  <label>Email</label>
                  <input type="text" class="form-control" name="">
                </div>
                </div>
                
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>Mobile <span>*</span></label>
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-sm-6">
                  <label>Phone</label>
                  <input type="text" class="form-control" name="">
                </div>
                </div>
                
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-12">
                    <label>Address <span>*</span></label>
                    <textarea class="form-control"></textarea>
                  </div>
                </div>
              </div>
               <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>Country <span>*</span></label>
                  <select class="form-control">
                    <option>Select</option>
                    <option>India</option>
                    <option>US</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label>State</label>
                  <input type="text" class="form-control" name="">
                </div>
                </div>
                
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>City <span>*</span></label>
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-sm-6">
                  <label>PIN</label>
                  <input type="text" class="form-control" name="">
                </div>
                </div>
                
              </div>
               <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>Citizenship <span>*</span></label>
                  <select class="form-control" id="" name="">
                    <option value="">Select</option>
                    <option value="Indian Citizen">Indian Citizen</option>
                    <option value="Non Resident Indian">Non Resident Indian</option>
                    <option value="Foreign Citizen">Foreign Citizen</option>
                 </select>
                </div>
                <div class="col-sm-6">
                  <label>Additional Note</label>
                  <textarea class="form-control"></textarea>
                </div>
                </div>
                
              </div>
              <!-- <div class="form-group taxdeclaration">
                 <h4>I would like <input id="terms" name="terms" type="hidden" value="50"> 50% tax deduction on this donation.</h4>
              </div> -->
              <div id="popup_box" class="tahnkyou_popup_box">
                 <strong class="title">Thank you for choosing to donate to Anju Gupta Memorial Trust</strong> Important information about your donation:
                 <ul>
                   <li><b>Education:</b> to run, maintain or assist any educational or other institution for coaching, guidance, counseling or vocational training or to grant individual scholarships for poor, deserving and needy students for elementary and higher education. </li>
                   <li><b>Medical:</b> to run, maintain or assist any medical institution, nursing home or clinics or to grant assistance to needy and indigent persons for meeting the cost of medical treatment.</li>
                   <li><b>Social:</b> to give financial or other assistance in kind by way of supporting institutions/campaigns for social issues/welfare causes like blood donation, organ donation, sanitation, child labor, saving the girl child, environment protection etc.</li>
                   <li><b>Senior Citizens:</b> to support and create institutions that work for the welfare of senior citizens.</li>
                   <li><b>Catastrophes:</b> to provide financial support to organizations or institutions to confront major natural disasters, including life threatening, fast-spreading epidemics and also other types of catastrophic disasters, such as massive earthquakes.</li>
                   <li><b>Spiritual:</b> to contribute/support/organize activities/events that enable spiritual well being.</li>
                </ul>
                 
                 <div class="one-time-payment">
                    <div id="billdesk" class="radio">
                       <label>
                       <input id="payment_method" name="payment_method" type="radio" value="BILLDESK">
                       </label>
                       <p class="flex">
                        <img class="img-responsive" src="img/billdesk.jpg" alt="Bill Desk">Bill Desk Payment Gateway (Only Indian Cards Accepted)
                        <a title="" href="#0" data-original-title="Make your payment through *Any bank Visa/Master /Amex credit cards * Any Bank Visa/Master /Maestro Debit Cards * Net banking facility * IMPS" data-toggle="tooltip" data-placement="top"><i class="fa fa-info"> </i></a>
                      </p>
                    </div>
                    <div id="hdfc" class="radio">
                       <label>
                       <input id="payment_method" name="payment_method" type="radio" value="HDFC">
                       </label>
                       <p class="flex">
                        <img class="img-responsive" src="img/HDFCLOGO.png" alt="Citi Bank">
                      HDFC Payment Gateway</p>
                    </div>
                    <div id="paytm" class="radio">
                       <label>
                       <input id="payment_method" name="payment_method" type="radio" value="PAYTM">
                       </label>
                       <p class="flex">
                        <img class="img-responsive" src="img/paytm.jpg" alt="Paytm">Paytm
                         <a title="" href="#0" data-original-title="Make the payment through your Paytm account." data-toggle="tooltip" data-placement="top"><i class="fa fa-info"> </i></a>
                       </p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="formdiv text-center">
                          <div class="form-group">
                             <input id="onetimeform" class="btn donate-btn" type="submit" value="Donate Now">
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
            </form>
          </div>
          <div class="tab-pane container" id="menu1">
            <form method="post">
              <div class="form-group">
                 <div class="radio mb-2">
                    <div class="input-group d-flex">
                      <input id="donation-2000" class="donation-2000" name="donationvalue" type="radio" value="2000" checked="checked">
                      <div class="d-flex mr-3">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                            <span class="fa fa-minus"></span>
                          </button>
                          </span>
                          <input type="text" name="quant[1]" class="form-control input-number" value="2000" min="2000" max="100000">
                          <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                            <span class="fa fa-plus"></span>
                          </button>
                          </span>
                      </div>
                      <div><p class="mb-0">Stop child labour for 40 children by connecting their parents to social protection and welfare</p>
                      </div>
                    </div>
                 </div>
                 <div class="radio mb-2">
                    <div class="input-group d-flex">
                      <input id="donation-1000" class="donation-1000" name="donationvalue" type="radio" value="1000">
                      <div class="d-flex mr-3">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                            <span class="fa fa-minus"></span>
                          </button>
                          </span>
                          <input type="text" name="quant[2]" class="form-control input-number" value="1000" min="1000" max="10000">
                          <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                            <span class="fa fa-plus"></span>
                          </button>
                          </span>
                      </div>
                      <div><p class="mb-0">Protect 10 children from the threat of malnutrition through proper monitoring and care</p>
                      </div>
                    </div>
                 </div>
                 <div class="radio mb-2">
                    <div class="input-group d-flex">
                      <input id="donation-700" class="donation-700" name="donationvalue" type="radio" value="700">
                      <div class="d-flex mr-3">
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
                            <span class="fa fa-minus"></span>
                          </button>
                          </span>
                          <input type="text" name="quant[3]" class="form-control input-number" value="700" min="700" max="10000">
                          <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
                            <span class="fa fa-plus"></span>
                          </button>
                          </span>
                      </div>
                      <div><p class="mb-0">Ensure 7 out of school children are enrolled back into school</p>
                      </div>
                    </div>
                 </div>
                 <div class="radio mb-2">
                    <div class="input-group d-flex">
                      <input id="donation-24000" class="donation-24000" name="donationvalue" type="radio" value="24000">
                      <div class="d-flex mr-3">
                       <input type="text" name="" class="form-control ml-4" value="" min="" max="" placeholder="Amount">
                      </div>
                      <div><p class="mb-0">Yes! I want to ensure happy childhoods and brighter futures</p>
                      </div>
                    </div>
                 </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-2">
                    <label>Title</label>
                    <select class="form-control">
                      <option>Select</option>
                      <option>Mr.</option>
                      <option>Ms.</option>
                      <option>Mrs.</option>
                      <option>others</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <label>First Name <span>*</span></label>
                    <input type="text" name="" class="form-control">
                  </div>
                  <div class="col-sm-5">
                    <label>Last Name <span>*</span></label>
                    <input type="text" name="" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>Start Date</label>
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-sm-6">
                  <label>End Date</label>
                  <input type="text" class="form-control" name="">
                </div>
                </div>
                
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-2">
                    <label>Date</label>
                    <select class="form-control">
                      <option>Select</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                   <label>Month</label>
                    <select class="form-control">
                      <option>Select</option>
                      <option>Jan</option>
                      <option>Feb</option>
                      <option>Mar</option>
                      <option>Apr</option>
                    </select>
                  </div>
                  <div class="col-sm-5">
                    <label>Year</label>
                    <select class="form-control">
                      <option>Select</option>
                      <option>2018</option>
                      <option>2019</option>
                      <option>2020</option>
                      <option>2021</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>PAN No.</label>
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-sm-6">
                  <label>Email</label>
                  <input type="text" class="form-control" name="">
                </div>
                </div>
                
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>Mobile <span>*</span></label>
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-sm-6">
                  <label>Phone</label>
                  <input type="text" class="form-control" name="">
                </div>
                </div>
                
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-12">
                    <label>Address <span>*</span></label>
                    <textarea class="form-control"></textarea>
                  </div>
                </div>
              </div>
               <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>Country <span>*</span></label>
                  <select class="form-control">
                    <option>Select</option>
                    <option>India</option>
                    <option>US</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label>State</label>
                  <input type="text" class="form-control" name="">
                </div>
                </div>
                
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>City <span>*</span></label>
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-sm-6">
                  <label>PIN</label>
                  <input type="text" class="form-control" name="">
                </div>
                </div>
                
              </div>
               <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                  <label>Citizenship <span>*</span></label>
                  <select class="form-control" id="" name="">
                    <option value="">Select</option>
                    <option value="Indian Citizen">Indian Citizen</option>
                    <option value="Non Resident Indian">Non Resident Indian</option>
                    <option value="Foreign Citizen">Foreign Citizen</option>
                 </select>
                </div>
                <div class="col-sm-6">
                  <label>Additional Note</label>
                  <textarea class="form-control"></textarea>
                </div>
                </div>
                
              </div>
              <!-- <div class="form-group taxdeclaration">
                 <h4>I would like <input id="terms" name="terms" type="hidden" value="50"> 50% tax deduction on this donation.</h4>
              </div> -->
              <div id="popup_box" class="tahnkyou_popup_box">
                 <strong class="title">Thank you for choosing to donate to Anju Gupta Memorial Trust.</strong> Important information about your donation:
                 <ul>
                   <li><b>Education:</b> to run, maintain or assist any educational or other institution for coaching, guidance, counseling or vocational training or to grant individual scholarships for poor, deserving and needy students for elementary and higher education. </li>
                   <li><b>Medical:</b> to run, maintain or assist any medical institution, nursing home or clinics or to grant assistance to needy and indigent persons for meeting the cost of medical treatment.</li>
                   <li><b>Social:</b> to give financial or other assistance in kind by way of supporting institutions/campaigns for social issues/welfare causes like blood donation, organ donation, sanitation, child labor, saving the girl child, environment protection etc.</li>
                   <li><b>Senior Citizens:</b> to support and create institutions that work for the welfare of senior citizens.</li>
                   <li><b>Catastrophes:</b> to provide financial support to organizations or institutions to confront major natural disasters, including life threatening, fast-spreading epidemics and also other types of catastrophic disasters, such as massive earthquakes.</li>
                   <li><b>Spiritual:</b> to contribute/support/organize activities/events that enable spiritual well being.</li>
                </ul>
                 <!-- <div class="one-time-payment-form-confirmation">
                    <p>
                      <input checked="checked" name="check" type="checkbox" value="checked" style="display: none;">
                     By sharing your details, you agree to receive stories and updates from CRY via mobile, 
                     <span>
                      <img src="https://www.cry.org/girlchildsupport/images/wht-logo.png" alt="Whats App Logo" style="width: 20px;">
                    </span> Whatsapp, landline, email, and post.<br>
                     If you’d like to change this, please send us an email on donorservice@crymail.org.</p>
                 </div> -->
                 <div class="one-time-payment">
                    <div id="billdesk" class="radio">
                       <label>
                       <input id="payment_method" name="payment_method" type="radio" value="BILLDESK">
                       </label>
                       <p class="flex">
                        <img class="img-responsive" src="img/billdesk.jpg" alt="Bill Desk">Donate Monthly using Credit card  
                        <a title="" href="#0" data-original-title="Make your payment through *Any bank Visa/Master /Amex credit cards * Any Bank Visa/Master /Maestro Debit Cards * Net banking facility * IMPS" data-toggle="tooltip" data-placement="top"><i class="fa fa-info"> </i></a>
                      </p>
                    </div>
                    <div id="hdfc" class="radio">
                       <label>
                       <input id="payment_method" name="payment_method" type="radio" value="HDFC">
                       </label>
                       <p class="flex">
                        <img class="img-responsive" src="img/company-logo-md.png" alt="">
                     Donate monthly using Bank account</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="formdiv text-center">
                          <div class="form-group">
                             <input id="onetimeform" class="btn donate-btn" type="submit" value="Donate Now">
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </section>
	<!-- #about -->
</main>

<?php include('footer.php'); ?>