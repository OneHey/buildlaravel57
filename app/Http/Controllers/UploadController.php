<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostDetails;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload_form');
    }

    public function uploadSubmit(Request $request)
    {
        // Thiết lập required cho cả 2 mục input
        $this->validate($request, [
                'name' => 'required',
                'photos' => 'required',]
        );
        // kiểm tra có files sẽ xử lý
        if ($request->hasFile('photos')) {
            $allowedfileExtension = ['jpg', 'png'];
            $files = $request->file('photos');
            // flag xem có thực hiện lưu DB không. Mặc định là có
            $exe_flg = true;
            // kiểm tra tất cả các files xem có đuôi mở rộng đúng không
            foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);

                if (!$check) {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
                    $exe_flg = false;
                    break;
                }
            }
            // nếu không có file nào vi phạm validate thì tiến hành lưu DB
            if ($exe_flg) {
                // lưu product
                $post = Post::create($request->all());
//                dd($post);
                // duyệt từng ảnh và thực hiện lưu
                foreach ($request->photos as $photo) {
                    $filename = $photo->store('photos');
                    PostDetails::create([
                        'post_id' => $post->id,
                        'filename' => $filename,
                    ]);
                }
                echo "Upload successfully";
            } else {
                echo "Falied to upload. Only accept jpg, png photos.";
            }
        }
    }
}
