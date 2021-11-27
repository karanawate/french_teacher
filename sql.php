$query = DB::table('mytable')
        ->where('', $id)
        ->update([
            'key' =>$request->value,
            'key' =>$request->value,
            'key' =>$request->value,
            'key' =>$request->value,
            'key' =>$request->value,
            'key' =>$request->value,
        ]);

        return redirect()->back()->with('msg key', 'msg value');



        $query =Login::update([
            'key'=>$request->value;
        ]);
        

        return redirect::to('my-login');

        







