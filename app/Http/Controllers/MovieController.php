<?php
    namespace App\Http\Controllers;

    use App\Models\Movie;
    use Illuminate\Http\Request;

    class MovieController extends Controller
    {
        public function index()
        {
            $movies = Movie::all();
            return response()->json($movies);
        }

        public function search(Request $request)
        {
            $this->validate($request, [
                'name' => 'string|max:255',
            ]);
            $name = $request->query('name');

            $movies = Movie::where('name', 'LIKE', '%' . $name . '%')
                            ->orderBy('created_at', 'desc') 
                            ->take(30)
                            ->get();

            return response()->json($movies);
        }
    }
