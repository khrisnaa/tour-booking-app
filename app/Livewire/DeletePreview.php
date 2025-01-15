<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TourPhoto;
use Illuminate\Support\Facades\Storage;

class DeletePreview extends Component
{
    public $tourPackage;

    // Method to receive the passed value
    public function mount($tourPackage)
    {
        $this->tourPackage = $tourPackage;
    }


    public function deletePhoto($photoId)
    {

        // Find the photo by ID
        $photo = TourPhoto::find($photoId);

        // Check if the photo exists
        if ($photo) {
            // Delete the photo from storage
            if (Storage::exists($photo->photo)) {
                Storage::delete($photo->photo);
            }

            // Delete the photo record from the database
            $photo->delete();

            // Optionally, you can refresh the tourPackage to reflect the change
            $this->tourPackage->refresh();
        }
    }
    public function render()
    {
        return view('livewire.delete-preview');
    }
}
