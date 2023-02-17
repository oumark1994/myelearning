<div class="col-lg-8">
    <form wire:submit.prevent="submitapplicatiion" enctype="multipart/form-data" method="post"  class="row justify-content-center align-items-center g-3">
    @if($currentStep==1)
        @include('livewire.stepone')
    @elseif($currentStep==2)
        @include('livewire.steptwo')
    @elseif($currentStep==3)
       @include('livewire.steptree')
    @elseif($currentStep==4)
      @include('livewire.stepfour')
    @endif
                        {{-- @if ($currentStep == 5)
                        <div class="step-five">
                          <div  class="card">
                            <h5 class="card-title">Congratulations</h5>
                              <div class="card-body">
                                <div class="row">
                                <h3>Your application  has been successfully has been received.We are going to review it and approve it</h3> 
                                </div>
                              </div>
                          </div>
                        </div>
                   @endif --}}
    <div class="d-flex justify-content-between my-2">
          @if ($currentStep == 1)
          <div></div> 
          @endif
          @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
          <button type="button" class="btn btn-outline-info" wire:click="decreaseStep()">Back</button>
          @endif
          @if ($currentStep == 1 || $currentStep == 2 || $currentStep ==3)
            <button type="button" class="btn btn-outline-primary" wire:click="increaseStep()">Next</button>
          @endif
          @if ($currentStep == 4)
            <button type="submit" class="btn  btn-outline-secondary">Submit</button>
          @endif
      </div>

        </div>
        
                
    

    </div>
</div>
</form><!-- End Multi Columns Form -->
</div>
