@if (!empty($product))
<!-- Product Single Item -->
@foreach ($product as $product )
<x-theme1.shared-component.product viewtype="grid" :data="$product" />
@endforeach
@endif