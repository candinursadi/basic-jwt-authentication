<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TransactionService;

class TransactionController extends Controller
{
    public function index(Request $request){
        try {
            $transaction = new TransactionService;
            $data = array(
                'url' => '/transactions',
                'user_id' => Auth::id(),
                'page' => $request->page
            );
            $result = $transaction->get_response($data);

            return response()->json($result);
        } catch (Exception $e) {

            return response()->json(['code' => "50", 'message' => 'Failed'], 200, array(), JSON_PRETTY_PRINT);
        }
    }

    public function detail(Request $request, $id=null){
        try {
            $transaction = new TransactionService;
            $data = array(
                'url' => '/transactions/'.$id,
                'user_id' => Auth::id()
            );
            $result = $transaction->get_response($data);

            return response()->json($result);
        } catch (Exception $e) {

            return response()->json(['code' => "50", 'message' => 'Failed'], 200, array(), JSON_PRETTY_PRINT);
        }
    }

    public function store(Request $request){
        try {
            $transaction = new TransactionService;
            $data = array(
                'url' => '/transactions',
                'user_id' => Auth::id()
            );
            $data = $data + $request->all();
            $result = $transaction->post_response($data);

            return response()->json($result);
        } catch (Exception $e) {

            return response()->json(['code' => "50", 'message' => 'Failed'], 200, array(), JSON_PRETTY_PRINT);
        }
    }

    public function update(Request $request, $id=null){
        try {
            $transaction = new TransactionService;
            $data = array(
                'url' => '/transactions/'.$id,
                'user_id' => Auth::id()
            );
            $data = $data + $request->all();
            $result = $transaction->put_response($data);

            return response()->json($result);
        } catch (Exception $e) {

            return response()->json(['code' => "50", 'message' => 'Failed'], 200, array(), JSON_PRETTY_PRINT);
        }
    }

    public function destroy(Request $request, $id=null){
        try {
            $transaction = new TransactionService;
            $data = array(
                'url' => '/transactions/'.$id,
                'user_id' => Auth::id()
            );
            $result = $transaction->delete_response($data);

            return response()->json($result);
        } catch (Exception $e) {

            return response()->json(['code' => "50", 'message' => 'Failed'], 200, array(), JSON_PRETTY_PRINT);
        }
    }
}
