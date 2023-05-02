<?php

namespace App\Http\Controllers;

use App\Models\images;
use Illuminate\Http\Request;
use mikehaertl\pdftk\Pdf;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

//  this is the working file for pdf upload 
class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
  
    public function fileStore(Request $request)
    {

        // $input = $request->all();
        // $image = $request->file('file');

        // $imageName = $image->getClientOriginalName();
        // $sourcePath = storage_path('app/images/' . $request->file->getClientOriginalName());

        // $sourcePath = $image->getPathname();
        // $targetPath = storage_path('app/images/') . $imageName;
        
        // $pdf = new Pdf($sourcePath);

        // $password = '123456';
        // $userPassword = '123456b';

        // $result = $pdf
        //     ->allow('AllFeatures')      
        //     ->setPassword($password)
        //     ->setUserPassword($userPassword)
        //     ->passwordEncryption(128)
        //     ->saveAs($targetPath);
        

        // $imageUpload = new Images;

        // if($request->id) $imageUpload->document_id =  $request->id;
        // else $imageUpload->document_id = $request->session()->get('document_id');
        
        // $imageUpload->image_path = $imageName;
        
        
        // if($imageUpload->save()){

        //     $request->session()->forget(['document_id']);
        //     $request->session()->forget(['last_input']);

        //     return response()->json(['success' => $imageName  ]);
        // }
    }
    
    public function fileDestroy(Request $request)
    {
       
        $Image = Images::find($request->id);

        $filename  = $Image->image_path;
        $Image->delete();

        $path = storage_path('app/images/') . $filename;

        if (file_exists($path)) {
            // File::delete($path);
            unlink($path);
            
        }
        
        return response()->json([
            'pdf' => 'id_'.$request->id
        ]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\images  $images
     * @return \Illuminate\Http\Response
     */
    public function show(images $images)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\images  $images
     * @return \Illuminate\Http\Response
     */
    public function edit(images $images)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\images  $images
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, images $images)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\images  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy(images $images)
    {
        //
    }

    public function getImages($id)
    {
        // $data[] = array();
        
        // $images = images::all()->toArray();
        // foreach($images as $image){
        //     $tableImages[] = $image['image_path'];
        // }
        // $storeFolder = storage_path('app/images');
        // $file_path = storage_path('app/images/');
        // $files = scandir($storeFolder);

        

        // foreach ( $files as $file ) {
        //     if ($file !='.' && $file !='..' && in_array($file,$tableImages)) {       
        //         $obj['name'] = $file;
        //         $file_path = storage_path('app/images/').$file;
        //         $obj['size'] = filesize($file_path);          
        //         $obj['path'] = url('storage/app/images/'.$file);
        //         $data[] = $obj;
        //     }
            
        // }

        // return response()->json($data);

    }    
}
