<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Models\Car;
use App\Models\Gallery;
use Illuminate\Support\Str;

class CarRepository
{
    public function __construct()
    {
        //
    }
    
    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');

        
        $input['slug'] = Str::slug($request->name);
        
        $input['features'] = json_encode($input['features']);
        



        $car_id = Car::create($input)->id;

        if(isset($input['galleries'])){
            $this->galleriesUpdate($request,$car_id);
        }
        
        return $car_id;
    }
    
    

    /**
     * Update Car.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($car, $request)
    {
        $input = $request->all();



        
        $photo_path = 'assets/images/' . $car->photo;





        if ($file = $request->file('photo')) {
            ImageHelper::handleDeleteImage($photo_path);
            $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');
        }

        $input['slug'] = Str::slug($request->name);


        $car->update($input);

        if(isset($input['galleries'])){
            $this->galleriesUpdate($request,$car->id);
        }
    }

    

    /**
     * Delete brand.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($car)
    {
        if($car->galleries()->count() > 0){
            foreach($car->galleries as $gallery){
                $this->galleryDelete($gallery);
            }
        }
        $photo_path = 'assets/images/' . $car->photo;

        ImageHelper::handleDeleteImage($photo_path);
        $car->delete();
    }
    
    public function galleriesUpdate($request,$car_id=null)
    {
        Gallery::insert($this->storeImageData($request,$car_id));
    }
    
    /**
     * Delete gallery.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function galleryDelete($gallery)
    {
        $path = 'assets/images/' . $gallery->photo;
        ImageHelper::handleDeleteImage($path);
        $gallery->delete();
    }

    /**
     * Custom Function.
     * @return void
     */

    public function storeImageData($request,$car_id=null)
    {
        $storeData = [];
        if ($galleries = $request->file('galleries')) {
            foreach($galleries as $key => $gallery){
                $storeData[$key] = [
                    'photo'=>  ImageHelper::handleUploadedImage($gallery,'assets/images'),
                    'car_id' => $car_id ? $car_id : $request['car_id'],
                ];
            }
        }
        return $storeData;
    }
}
