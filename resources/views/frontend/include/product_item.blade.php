
<div class="single-product-item" style=" padding: 5px;border: 1px solid #80808021;height: 290px;">
    <div class="product-image">
        <a href="{{ route('get.ProductDetail', $item->pro_slug.'-'.$item->id )}}"><img class="img-fluid" style="width: 100%; height: 180px;" src="{{ asset($item->pro_image)}}" alt="{{ $item->pro_name }}" /></a>
        @if( $item->pro_sale)
        <a href="{{ route('get.ProductDetail', $item->pro_slug.'-'.$item->id )}}" class="new-mark-box" style="font-size: 13px;">-{{ $item->pro_sale}}%</a>
        @endif
        <div class="overlay-content">
            <ul>
                <li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
                <li><a href="{{ route('get.ShoppingCart', $item->id) }}" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="product-info text-center" style="margin-top: 10px;">
        <a href="{{ route('get.ProductDetail', $item->pro_slug.'-'.$item->id )}}" style="font-size: 12px">{{ $item->pro_name }}</a>
        <div class="price-box">
            @if($item->pro_price)
            @if( $item->pro_sale)
            <span class="price" style="color: blue; font-size: 15px;">{{ number_format(($item->pro_price*(100-$item->pro_sale))/100) }}đ</span>
            <span class="price" style="color: red; font-size: 15px;"><del>{{ number_format($item->pro_price) }}đ</del></span>
            @else
            <span class="price" style="color: blue; font-size: 15px;">{{ number_format($item->pro_price) }}đ</span>
            @endif
            @else
            <span class="price" style="color: blue;font-size: 15px;">Liên hệ</span>
            @endif
        </div>
    </div>
</div>
