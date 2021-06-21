<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Traits\StoreImageTrait;

class CompanyController extends Controller
{
    use StoreImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest('id')->paginate(10);
        return response()->json([
            'data' => $companies
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company;
        $request_data = $request->except(['token']);
        if ($this->verifyAndStoreImage($request, $fieldname = 'logo', $directory = 'companies') != null)
            $request_data['logo'] = $this->verifyAndStoreImage($request, $fieldname = 'logo', $directory = 'companies');
        else {
            $request_data['logo'] = 'no-image.png';
        }
        $company->name = $request_data['name'];
        $company->email = $request_data['email'];
        $company->website = $request_data['website'];
        $company->logo = $request_data['logo'];
        $company->save();
        return response()->json([
            'data' =>  $company
        ], 200);
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
        $request_data = $request->only('name','email', 'website', 'logo' );
        if ($this->verifyAndStoreImage($request, $fieldname = 'logo', $directory = 'companies') != null)
        $request_data['logo'] = $this->verifyAndStoreImage($request, $fieldname = 'logo', $directory = 'companies');
        $com = Company::find($id);
        $com->fill($request_data)->save();
        return response()->json([
            'data' => $com
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $com = Company::find($id);
        $com->delete();
        return response()->json([
            'data' => $com
        ], 200);
    }
}
