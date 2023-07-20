<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;

class ClientController extends Controller
{
    public function HomePage()
    {
        // Lấy danh sách sản phẩm từ bảng "Product"
        $products = Product::all();

        // Tạo một mảng để chứa thông tin sản phẩm và hình ảnh tương ứng
        $productsWithImages = [];

        // Duyệt qua danh sách sản phẩm
        foreach ($products as $product) {
            // Lấy hình ảnh của sản phẩm từ bảng "Image" dựa vào trường "product_id"
            $images = Image::where('product_id', $product->id)->take(2)->pluck('url');
            // Thêm thông tin sản phẩm và hình ảnh vào mảng
            $productsWithImages[] = [
                'product' => $product,
                'image1' => $images[0],
                'image2' => $images[1],
            ];
        }

        // Trả về view "homepage" và truyền mảng chứa thông tin sản phẩm và hình ảnh
        return view('client_view/homepage', compact('productsWithImages'));
    }
}

