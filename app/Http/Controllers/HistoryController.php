<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use Bulkly\BufferPosting;
use Bulkly\SocialAccounts;
use Bulkly\SocialPostGroups;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list_data = BufferPosting::join('social_post_groups','social_post_groups.id','=','buffer_postings.group_id')
        ->join('social_accounts','social_accounts.id','=','buffer_postings.account_id')
        ->join('social_posts','social_posts.id','=','buffer_postings.post_id')
        ->select('social_post_groups.name as group_name','social_post_groups.type','social_accounts.name as account_name','social_posts.text','social_posts.created_at')
        ->paginate(50);
       // ->get();
       // dd($list_data);
        $group_list = SocialPostGroups::select(\DB::raw('GROUP_CONCAT(DISTINCT(type)) AS type_name'))->groupBy('type')->get();
        $data = [
            'list_data' => $list_data,
            'group_list' => $group_list
        ];

       
        return view('history_list.list',$data);
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
