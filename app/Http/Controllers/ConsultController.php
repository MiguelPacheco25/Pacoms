<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$sunatRuc = new Tecactus\Sunat\RUC('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOWQyMWFlNjVmNmI3ZTFlODMxZDRjMWY0YzFiMWRjOGE0NDU2NTY5ZGYzMmI1OWY3MTRkYTFmMGY5MjM4ZjNkNTNhMDM5NTE3M2RjYzRhZTYiLCJpYXQiOjE2MzQ1MzMyMjQuNjA3MTkyLCJuYmYiOjE2MzQ1MzMyMjQuNjA3MTk2LCJleHAiOjE2NjYwNjkyMjQuNTg1NjA5LCJzdWIiOiI4MTYwIiwic2NvcGVzIjpbInVzZS1yZW5pZWMiXX0.HxF_1FyzWGdxwF9MnZwgCpH_uC2Ot7A9BFvMxfF_0j990RLnPU2Ch2Koy-vrgxSBIu7yg_9WD14U75zj3l7f77yeGTiFcW1Ic441KTcnR7wrN7LOGuzl2tsTsxKW-a0zg4Z9OFGD_Q_yyPY0JH79NE5683vYDGUnT-GtsdJJWL18kJklYJZ3CIHYFKIITT2JYpl5WW30aHrc0uuiO9rUeS3WisO7W4C5yxXu8PHczCJlRh_jmvwdY-wZV9nfjakGbL2z89tWuj8pw1hXZ4_fc2GRiHjWDss72TcJpNv-uD9mMdUyHUH9R-UIQ4Sw-Vi6q7JsceANlh--T7E7BE7Px_Dhc7P7AvF0-ViKAFjfob1PtAISh-9W0F_vZqffAKlGe1V03lbdDgRX7lE-94xiajYWrSZTKEacGKgU8PzQw075QccITYhemtmjsCP8ygmYI3jSql0nHXU9QHs7rnEef6FtSKirxvChElLbg_5sCb3oEVxkDM3Nez6bPVhILMcXk4bxsODQJSSOzIxYeDFqW9s1KrbQkL5BvAaGp1ZAhEKHRsokYJJnMqH1W0mWCSkJH_c9ouGtk7ytgjQgIEShZBkSqzkNtv0hOPD3r1W3gzf_wugidN7HQGIpET6pDRnKsLAEjx8F0gQPZ2MAErOgfSUNmC6Aw7mTudUmOFIf9BE');

        dd($sunatRuc->getByRuc('12345678901'));*/
        

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ruc)
    {

        $url = file_get_contents('https://dniruc.apisperu.com/api/v1/ruc/'.$ruc.'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Im1hcmxvbi5zYW5jaGV6LmNoYXZlekBnbWFpbC5jb20ifQ.PYMu7nXFp8anSN7cw340zlUPCw0asP6pti7hST6lawQ');

         
        //print_r($url);
        return view('consult');
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
