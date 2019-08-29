<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Image;
class ImageController extends Controller
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
        $id=DB::table('multimedia')->max('id');

        $path = 'public/multimedia/';
        $files = $request->file('file');
        foreach($files as $file)
        {
            $fileName = time().'.'.$file->getClientOriginalName();
            $size = $file->getClientSize();
            $ruta = '/public/multimedia/'.$fileName;
            $file->move($path, $fileName);

            DB::table('imagen')->insert(
                    [
               'multimedia_id'=> $request->idMultimedia,
               'url'=>$ruta,
                    ]
                );

        
        }
    }

    public function listarImagenes($id)
    {      
           
            $data=DB::table('imagen')->where('multimedia_id', $id)->get();
            
            return response()->json(['data'=>$data]);

    }

    public function delete_img($id)
    {
            

            // $Image=Image::where('id', '=', $id)->first();
            DB::table('imagen')->where('id', '=', $id)->delete();
  
        
            //  if(file_exists(public_path($Image->path)))
            //   {
            //       unlink(public_path($Image->path));
            //   }
            //   else
            //   {
                  
            //   }

            // $Image->delete();
            return response()->json(['data' => "Correcto"]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
