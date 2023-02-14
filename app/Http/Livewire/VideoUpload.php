<?php

namespace App\Http\Livewire;
use App\Models\Video;

use Livewire\Component;
use Livewire\WithFileUploads;

class VideoUpload extends Component
{
    public Video $videofile;
    use WithFileUploads;
    public $video;
    public function render()
    {
        return view('livewire.video-upload');
    }
    public function videocompleted(){

    }
    // public function upload(){
    //     $this->validate([
    //         'video'=>'required|mimes:mp4|max:102400'
    //     ]);
    // }
}
