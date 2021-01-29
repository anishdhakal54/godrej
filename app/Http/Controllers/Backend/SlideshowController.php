<?php

namespace App\Http\Controllers\Backend;

//use App\Http\Requests\SlideshowRequest;
//use App\Repositories\Slideshow\SlideshowRepository;
use App\Models\Slideshow;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SlideshowController extends Controller
{
//	/**
//	 * @var SlideshowRepository
//	 */
//	private $slideshow;

//	public function __construct(SlideshowRepository $slideshow) {
//		$this->slideshow = $slideshow;
//	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slideshows = Slideshow::get();

        return view('backend.slideshows.index', compact('slideshows'));
//        return view( 'backend.slideshows.index', compact( 'slideshowsCount' ) );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slideshows.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SlideshowRequest|Request $request
     *
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function store(Request $request)
    {

//        $path = Storage::put('slideshows', $request->featured_image);


        $path = Storage::put('public/slideshows', $request->featured_image);
        // Get stored file name
        $fileName = explode('public/', $path);
//        dd($fileName);
        Slideshow::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'link' => $request->link,
            'slug' => $request->slug,
            'caption' => $request->caption,
            'priority' => $request->priority,
            'active' => $request->active,
            'featured_image' => $fileName[1]

        ]);

        return redirect()->back()->with('success', 'Slideshow successfully created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slideshow = Slideshow::find($id);
        return view('backend.slideshows.edit', compact('slideshow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SlideshowRequest|Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function update(Request $request)
    {
//        dd($request->id);
        $slideshow = Slideshow::find($request->id);
//        dd($slideshow);
        if ($request->hasFile('featured_image')) {
//            dd('here');
            Storage::delete('public/slideshows',$slideshow->featured_image);
//            dd('here');
            $path = Storage::put('public/slideshows', $request->featured_image);
            // Get stored file name
            $fileName = explode('public/', $path);
            $slideshow->featured_image = $fileName[1];
        }

        $slideshow->name = $request->name;
        $slideshow->link = $request->link;
        $slideshow->slug=$request->slug;
        $slideshow->caption = $request->caption;
        $slideshow->priority = $request->priority;
        $slideshow->active = $request->active;

        $slideshow->save();
        return redirect()->back()->with('success', 'Slideshow successfully updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->slideshow->delete($id);

        return redirect()->back()->with('success', 'Slideshow successfully deleted!!');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSlideshowsJson(Request $request)
    {
        $slideshows = $this->slideshow->getAll();

        foreach ($slideshows as $slideshow) {
            $slideshow->author = $slideshow->user->full_name;
            $image = null !== $slideshow->getImage() ? $slideshow->getImage()->smallUrl : $slideshow->getDefaultImage()->smallUrl;
            $slideshow->featured_image = $image;
        }

        return datatables($slideshows)->toJson();
    }
}
