<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

/*        Collection::macro('toUpper', function () {
            return $this->map(function ($value) {
                return Str::upper($value);
            });
        });

        $collection = collect(['second','first', 'third', 'forth']);

        $upper = $collection->toUpper();

        dd($upper);*/

    /*    $collection = collect([1, 2, 3]);

        return view('index')->with(['collections'=> $collection]);*/


      /*  $user = User::find(1);
        //dd($user->id);

        return view('welcome', [
            'user' => Redis::get('user:profile:'.$user->id)
        ]);*/

        //$collection = collect([1, 2, 3, 4, 5, 6, 7]);

      /*  $collection = collect(str_split('AABBCCCD'));

        $chunks = $collection->chunkWhile(function ($value, $key, $chunk) {
            return $value === $chunk->last();
        });

        $args = $chunks->all();*/

       /* $collection = collect(['John Doe']);

        $concatenated = $collection->concat(['Jane Doe'])->concat(['name' => 'Johnny Doe']);

        $args =  $concatenated->all();*/

    /*    $collection = collect([1, 2, 3, 4, 5]);

        $collection->contains(function ($value, $key) {
            return $value > 5;
        });*/

/*        $collection = collect([1, 2, 3, 4, 5]);

        $args =  $collection->contains('3');*/

/*        $collection = collect([1, 2, 2, 2, 3]);

        $counted = $collection->countBy();

        $args = $counted->all();*/

       /* $collection = collect(['alice@gmail.com', 'bob@yahoo.com', 'carlos@gmail.com']);

        $counted = $collection->countBy(function ($email) {
            return substr(strrchr($email, "@"), 1);
        });

        $args = $counted->all();*/

//        $args = substr(strrchr('alice@gmail.com', "@"), 1);
       /* $collection = collect(['product_id' => 1, 'price' => 100, 'discount' => false]);

        $filtered = $collection->except(['price', 'discount']);

        $args = $filtered->all();*/
      /*  $collection = collect([
            ['name' => 'Regena', 'age' => null],
            ['name' => 'Linda', 'age' => 14],
            ['name' => 'Linda', 'age' => 45],
            ['name' => 'Diego', 'age' => 23],
            ['name' => 'Linda', 'age' => 84],
        ]);

        $args = $collection->firstWhere('name', 'Linda');*/

        $collection = collect([
            [
                'id' => '1',
                'name' => 'John',
                'department' => 'Sales',
                'email' => 'john@example.com',
            ],
            [
                'id' => '2',
                'name' => 'Jane',
                'department' => 'Marketing',
                'email' => 'jane@example.com',
            ]
        ]);

        $keyed = $collection->mapWithKeys(function ($item, $key) {
            return [$item['id'] => $item['name']];
        });

        $args = $keyed->all();
dd($args);
        //return view('index')->with(['collections'=> $collection]);
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
    public function show()
    {
        //
        return view('index');
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
