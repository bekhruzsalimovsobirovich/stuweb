<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Message\Actions\StoreMessageAction;
use App\Domain\Message\DTO\StoreMessageDTO;
use App\Domain\Message\Models\Message;
use App\Domain\Message\Requests\StoreMessageRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $new_messages = Message::where('view_message','=',0)->orderBy('id','desc')->get();
        return view('admin.messages.new_messages', compact('new_messages'));
    }

    public function oldmessage()
    {
        $old_messages = Message::where('view_message','=',1)->orderBy('id','desc')->get();
        return view('admin.messages.old_messages', compact('old_messages'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StoreMessageRequest $request, StoreMessageAction $storeMessageAction)
    {
        try {
            $dto = StoreMessageDTO::fromArray($request->all());
            $storeMessageAction->execute($dto);
        }catch (\Exception $exception)
        {
            return redirect()->back();
        }
        Alert::success('Xabar muvofaqqiyatli uzatildi', 'Siz jo\'natgan xabar Sanoat texnika universal tashkiloti administratsiyasiga uzatildi. Javobni pochta manzilingiz orqali tez orada qabul qilib olasiz. Xabar qoldirganingiz uchun rahmat!')->autoClose(20000);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $get_one_message = Message::where('id','=',$id)->first();
        DB::select('update messages set view_message=? where id=?',[1,$id]);
        return view('admin.messages.show_new_message', compact('get_one_message'));
    }

    public function old_show($id)
    {
        $get_one_message = Message::where('id','=',$id)->first();
        return view('admin.messages.show_new_message', compact('get_one_message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
