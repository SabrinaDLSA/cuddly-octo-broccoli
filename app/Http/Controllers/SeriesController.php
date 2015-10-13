<?php
namespace series\Http\Controllers;
use Illuminate\Http\Request;
use series\Http\Requests\StoreSeriesCreateRequest;
use series\Http\Requests;
use series\Http\Controllers\Controller;
use Illuminate\Validation\Factory;
use series\Genre;
use series\Series;
use series\Series_info;
use Redirect;
use IsAdmin;
class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('list.series');
    }

        public function __construct()
      {
        $this->middleware('auth',['except' => array('show')]);
        $this->middleware('is_admin', ['except' => array('show')]);
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::lists('name', 'id');
        if (!$genre->isEmpty()) {
          return view('create.serie')->with('genre', $genre);
        }
        \Session::flash('alert', 'You must add a Genre before creating a new serie');
        return Redirect::back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeriesCreateRequest $request)
    {
      $file = $request->file('file');
       //obtenemos el nombre del archivo
      $nombre = $file->getClientOriginalExtension();
      $snake = $request->name;
      $snake = snake_case($snake);
         //indicamos que queremos guardar un nuevo archivo en el disco local
      \Storage::disk('local')->put($snake.'.'.$nombre,  \File::get($file));
      $serie = new Series;
      $serie->name = $request->name;
      $serie->photo = $snake.'.'.$nombre;
      $serie_info = new Series_info;
      $serie_info->description = $request->description;
      $serie_info->genre = $request->genre;
      $serie_info->start = $request->start;
      $serie_info->finish = $request->finish;
      $serie->save();
      $s =  \DB::table('series')->max('id');
      $serie_info->series_id = $s;
      $serie_info->save();
      return Redirect::to('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serie = \DB::table('series')->where('id', $id)->first();
        $serie_info = \DB::table('series_infos')->where('series_id', $id)->first();
        return view('show.serie')->with('serie', $serie)->with('serie_info', $serie_info);
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
