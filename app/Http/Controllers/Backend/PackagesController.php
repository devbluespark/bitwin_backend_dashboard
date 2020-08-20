<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Package;
use PhpParser\Node\Expr\FuncCall;

class PackagesController extends Controller
{
    public function index(){
        $packages= Package::all();
        return view('backend.packages.index',compact('packages'));
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // var_dump($request->all());
       $data=$request->all();

    /*    $data=$request->validate([
            'package_name' => 'required',
            'package_decription'=> 'required',
            'package_coins' => 'required',
            'package_price'=> 'required',
        
            'package_active' => 'required',
          //  'package_create_by'=> 'min:3|required',
    
        ]);*/

       $data['package_create_by'] = 'Kasun';
       $data['created_at'] = Carbon::now()->timestamp;
       $data['updated_at'] = null;

        var_dump($data);

        Package::create($data);
        return redirect('/admin/packages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('backend.packages.show',compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('backend.packages.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package )
    {
       // echo "updated";
        $package->update($request->all());
        return redirect('admin/packages');
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

    public function change_state(Request $request){
        echo $request->all();
    }

   
    
}