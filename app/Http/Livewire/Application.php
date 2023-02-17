<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Instructorapplication;
use App\Models\UserAuth;
use Illuminate\Support\Facades\Session;

class Application extends Component
{
use WithFileUploads;
public $firstname;
public $lastname;
public $email;
public $address;
public $subject;
public $lessons;
public $image;
public $description;
public $website_link;
public $video_link;
public $availibility;
public $language;
public $user_id;
public $totalsteps = 4;
public $currentStep = 1;
public function mount(){
    $this->currentStep = 1;
}
    public function render()
    {
        return view('livewire.application');
    }
    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalsteps){
            $this->currentStep = $this->totalsteps;
        }
    }
    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }
    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'firstname'=>'required|string',
                'lastname'=>'required|string',
                'email'=>'required|email',
                'address'=>'required|string',
                'image'=>'required|image|mimes:png,jpg,jpeg'
            ]);
          }elseif($this->currentStep == 2){
            $this->validate([
                'subject'=>'required|string',
                'language'=>'required|string',
                'availibility'=>'required|string'
            ]);
          }elseif($this->currentStep == 3){
            $this->validate([
                'description'=>'required|string',
                'lessons'=>'required|string'
                
            ]);
          }elseif($this->currentStep == 4){
            $this->validate([
                'website_link'=>'required|string',
                'video_link'=>'required|string'           
            ]);
          }
          
    }
    public function submitapplicatiion(){
        $data = array();
        if(Session::has('loggedInUser')){
            $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
        }
      
    $imageName = time().'.'.$this->image->extension();  
    //    $move_image = $this->image->move(public_path('images'),$imageName);
    $move_image = $this->image->storeAs('images',$imageName,'public');
       if($move_image){
        $values = array(       
'firstname'=>$this->firstname,
'lastname'=>$this->lastname,
'email'=>$this->email,
 'address'=>$this->address,
 'subject'=>$this->subject,
 'lessons'=>$this->lessons,
 'image'=>$imageName,
 'description'=>$this->description,
 'website_link'=>$this->website_link,
 'video_link'=>$this->video_link,
 'availibility'=>$this->availibility,
 'language'=>$this->language,
 'user_id'=>$data->id,
 'status'=>0);
        Instructorapplication::insert($values);
        $successdata = ['Name'=>$this->firstname.' '.$this->lastname,'email'=>$this->email];
        return redirect()->route('successapplication',$successdata);
       }

    }
    public function approved(){
       return dd("hello");
    }
}
