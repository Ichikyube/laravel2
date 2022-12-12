  public function storeImage(Request $request){
        $data= new Postimage();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->route('images.view');


        public function show($name)
{
    $extension = File::extension($name);
        $path = public_path('storage/' . $name);
        if (!File::exists($path)) {abort(404);}
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;



        use Input;
use Image;

$file = Input::file('Picture');
$imageName = $file->getClientOriginalName();

$imgUpload = Image::make($file)->save(public_path('img/' . $imageName));

<img src="{{ asset('img/'.$imageName) }}">


$path = '';

if ($request->hasFile('Picture')) {
    $file = $request->file('Picture');
    $path = $file->storeAs(public_path('img'), $imageName);

    //or
    if (file_put_contents(public_path(img) . $imageName, $file)) {
        $path = public_path(img) . $imageName;
    }
}

return view('your-view', ['img_path' => $path]);;


$file = $request->file('Picture');
$destinationPath = 'public/img/';
$originalFile = $file->getClientOriginalName();
$file->move($destinationPath, $originalFile);


use Input;
use Image;

$file = Input::file('Picture');
$imageName = $file->getClientOriginalName();

$imgUpload = Image::make($file)->save(public_path('img/' . $imageName));

<img src="{{ asset('img/'.$imageName) }}">
