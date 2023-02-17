 <div class="step-two">
            <div  class="card">
                <div class="card-body">
                  <h5 class="card-title">Course Detail</h5>
        
                  <!-- Multi Columns Form -->
                  <div class="row">
                    <div class="col-md-12 py-3 ">
                      <label for="subject"  class="form-label">Which subject are you going to teach?</label>
                      <input type="text" id="subject" wire:model="subject" name="subject" class="form-control"  placeholder="Enter your subject of interest">
                      <span class="text-danger">@error('subject'){{$message}}@enderror</span>
                    </div> 
                    <div class="col-md-12 py-3">
                      <label  class="form-label">Which language(s) would you feel confortable teaching in?</label>
                      <select  wire:model="language" name="language" class="form-control">
                        <option selected >Select Language</option>
                        <option  value="English">English</option>
                        <option  value="French">French</option>
                        <option  value="German">German</option>
                        <option  value="Spanish">Spanish</option>
                      </select>
                      <span class="text-danger">@error('availibility'){{$message}}@enderror</span>                 
                     </div>
                     <div class="col-md-12 py-3">
                      <label  class="form-label">When are you available to start your class ?</label>
                      <select  wire:model="availibility" name="availibility"  class="form-control">
                        <option selected >Select availibility</option>
                        <option  value="immediately">Immediately</option>
                        <option  value="later_this_month">Later this month</option>
                        <option  value="nextmonth">Next month</option>
                        <option  value="later_this_year">Later this year</option>

                      </select>
                      <span class="text-danger">@error('availibility'){{$message}}@enderror</span>                 
                     </div>
                  </div>
                </div>
     </div>
                    
</div> 