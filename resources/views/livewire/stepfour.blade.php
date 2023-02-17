<div class=" step-four">
    <div  class="card">
      <h5 class="card-title">Course link(s)</h5>
        <div class="card-body">
         

          <!-- Multi Columns Form -->
          <div class="row">
            <div class="col-md-12 py-3 ">
              <label  class="form-label">Website Link:Share a link where we can view your work.</label>
              <input type="text" wire:model="website_link" name="website_link" class="form-control" placeholder="Website link related to what you would like to teach.">
              <span class="text-danger">@error('website_link'){{$message}}@enderror</span>
            </div>
            <div class="col-md-12 py-3">
              <label  class="form-label">Video Sample Link</label>
              <input type="text" wire:model="video_link" name="video_link" class="form-control"  placeholder="Enter your lastname">
              <span class="text-danger">@error('video_link'){{$message}}@enderror</span>
            </div>
          </div>
        </div>
      </div>      
 </div>