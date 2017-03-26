<?php
namespace Market\Http\Controllers\Producto;
use Illuminate\Http\Request;
use Market\Http\Requests;
use Market\Http\Controllers\Controller;
use Market\Models\Product\Product;
use Market\Models\Product\Mark;
use redirect;
class ProductController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::select('products.id','products.name as product', 'price','marks.name as mark')
                           ->join('marks','marks.id','=','products.marks_id')->paginate(2); //me pagina de 2 en 2
        return view('product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marks=Mark::lists('name','id')->prepend('Seleecione Mark');
        return view('product.create')->with('marks',$marks);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request ->all());
        return  redirect()->route('product.index');
     }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $products=Product::FindOrFail($id);
            return view('product.show')->with('products',$products);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $marks=Mark::lists('name','id')->prepend('Seleecione Mark');
            $products=Product::FindOrFail($id);
            return view('product.edit',array('products'=>$products,'marks'=>$marks));

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
            $products=Product::FindOrFail($id);
            $input=$request->all();
            $products->fill($input)->save();
            return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products=Product::FindOrFail($id);
        $products->delete();
        return redirect()->route('product.index');
    }
}
