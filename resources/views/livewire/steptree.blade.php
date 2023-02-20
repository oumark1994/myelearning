<div class="step-three">
    <div  class="card">
        <div class="card-body">
          <h5 class="card-title">Course Detail(2)</h5>

          <!-- Multi Columns Form -->
          <div class="row">
           
            <div class="col-md-12 py-3">
              <label  class="form-label">Underline in 1 to 3 sentences why you are interested teaching at Maximum Impact?</label>
              <textarea name="description" wire:model="description"  class="form-control" cols="30" rows="10"></textarea>
              <span class="text-danger">@error('description'){{$message}}@enderror</span>
            </div>
            <div class="col-md-12 py-3">
                <label  class="form-label">What are some of key lessons you would include in your class ?</label>
                <textarea name="lessons"  wire:model="lessons"  class="form-control" cols="30" rows="6"></textarea>
                <span class="text-danger">@error('lessons'){{$message}}@enderror</span>
              </div>
             
          </div>
        

        </div>
        </div>           
</div>