<div class="step-one">
    <div  class="card">
        <div class="card-body">
          <h5 class="card-title">Personal Detail</h5>
     <!-- Multi Columns Form -->
          <div class="row">
            <div class="col-md-12 py-3 ">
             
              @if ($image)
              <img width="100%" class="text-center my-2 justify-content-center" height="250" src="{{ $image->temporaryUrl()}}"><br><br>
          @endif
            <label  class="form-label">Select an image</label>
              <input type="file" wire:model="image" name="image" class="form-control"  >
              <span class="text-danger">@error('image'){{$message}}@enderror</span>
            </div>
            <div class="col-md-6 py-3 ">
              <label  class="form-label">First Name</label>
              <input type="text" wire:model="firstname" name="firstname" class="form-control"  placeholder="Enter your firstname">
              <span class="text-danger">@error('firstname'){{$message}}@enderror</span>
            </div>
            <div class="col-md-6 py-3">
              <label  class="form-label">Last Name</label>
              <input type="text"  wire:model="lastname" name="lastname" class="form-control"  placeholder="Enter your lastname">
              <span class="text-danger">@error('lastname'){{$message}}@enderror</span>
            </div>
            <div class="col-md-6 py-3">
              <label  class="form-label">Email</label>
              <input type="email"  wire:model="email" class="form-control"  name="email" placeholder="Enter your email">
              <span class="text-danger">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="col-md-6 py-3">
              <label  class="form-label">Location</label>
              <input type="text"  wire:model="address" class="form-control"  name="address" placeholder="Enter your location or address">
              <span class="text-danger">@error('address'){{$message}}@enderror</span>
            </div>
          </div>
        </div>
        </div>    
        </div>