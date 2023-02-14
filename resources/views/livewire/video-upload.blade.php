<div class="col-md-10 my-3" x-data="{ isUploading: false, progress: 0 }"

x-on:livewire-upload-start="isUploading = true"

x-on:livewire-upload-finish="isUploading = false"

x-on:livewire-upload-error="isUploading = false"
x-on:livewire-upload-progress="progress = $event.detail.progress" >
    <label for="validationDefault01" class="form-label">Upload Video</label>
         <input type="file" wire:model="video"  class="form-control">
         @error('video') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
<div class="progress my-2">
    <div class="progress-bar" role="progressbar" :style="`width:${progress}%`" ></div>
</div>
</div>
@error('video') <span class="error my-2 alert alert-danger">{{ $message }}</span> @enderror
</div>