<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConcertResource;
use App\Models\Concert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class ConcertController extends Controller
{
    public function index(Request $request){
        $x['title']         = 'Concert';
        $x['data']        = Concert::get();
        return view('admin.concert', $x);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => ['required', 'string', 'max:255'],
            'concert_date' => ['required'],
            'venue' => ['required', 'string', 'max:255'],
            'maximum_site' => ['required', 'string', 'max:4'],
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $concert = Concert::create([
                'name'      => $request->name,
                'concert_date'     => $request->concert_date,
                'venue'      => $request->venue,
                'maximum_site'      => $request->maximum_site,
            ]);
            DB::commit();
            Alert::success('Pemberitahuan', 'Data <b>' . $concert->name . '</b> berhasil dibuat')->toToast()->toHtml();
        } catch (\Throwable $th) {
            DB::rollback();
            Alert::error('Pemberitahuan', 'Data <b> </b> gagal dibuat : ' . $th->getMessage())->toToast()->toHtml();
        }
        return back();
    }

    public function show(Request $request)
    {
        $concert = ConcertResource::collection(Concert::where(['id' => $request->id])->get());
        return response()->json([
            'status'    => Response::HTTP_OK,
            'message'   => 'Data concert by id',
            'data'      => $concert[0]
        ], Response::HTTP_OK);
    }

    public function update(Request $request)
    {
        $rules = [
            'name'      => ['required', 'string', 'max:255'],
            'concert_date' => ['required'],
            'venue' => ['required', 'string', 'max:255'],
            'maximum_site' => ['required', 'string', 'max:4'],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)
                ->withInput();
        }
        $data = [
            'name'      => $request->name,
            'concert_date'   => $request->concert_date,
            'venue'      => $request->venue,
            'maximum_site'      => $request->maximum_site,
        ];

        DB::beginTransaction();
        try {
            $concert = Concert::with('concerts')->findOrFail($request->id);
            $concert->update($data);
            DB::commit();
            Alert::success('Pemberitahuan', 'Data <b>' . $concert->name . '</b> berhasil disimpan')->toToast()->toHtml();
        } catch (\Throwable $th) {
            DB::rollback();
            Alert::error('Pemberitahuan', 'Data <b> </b> gagal disimpan : ' . $th->getMessage())->toToast()->toHtml();
        }
        return back();
        
    }

    public function destroy(Request $request)
    {
        try {
            $concert = Concert::find($request->id);
            $concert->delete();
            Alert::success('Pemberitahuan', 'Data <b>' . $concert->name . '</b> berhasil dihapus')->toToast()->toHtml();
        } catch (\Throwable $th) {
            Alert::error('Pemberitahuan', 'Data <b>' . $concert->name . '</b> gagal dihapus : ' . $th->getMessage())->toToast()->toHtml();
        }
        return back();
    }
}
