<section class="full-container chainGrid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="chainGridBox">
                    <li><a href="#"><i class="fa fa-home"></i></a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#" class="active">Smartphones & Tablets</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#" class="active">Smartphones </a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#">Smartphones Shop</a></li>
                </ul>
            </div>
        </div><!-- row -->
    </div>
</section><!-- container -->

<section class="full-container midSection margin_bottom_20">
    <div class="container">
        <div class="row">
            @if(!empty($sideFilter))
            <div class="col-md-3 sectionLeft">
                <div class="lists">
                    @if(!empty($sideFilter['cat_list']))
                    <div class="catList">
                        <div class="headdingBox">
                            <h3 class="headdingLine">Categories</h3>
                        </div>
                        <ul class="listbox">
                            @foreach($sideFilter['cat_list'] as $key=>$cat)
                            <li>
                                <input type="checkbox" name="choosenCategory[]" onClick="filterItem()"
                                    value='{{  $cat->categories_id }}' />
                                <a href="#">
                                    {{ $cat->category_name ?? 'Test cat' }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div><!-- catList -->
                    @endif

                    <!-- product option attribute -->
                    @if(isset($sideFilter['cat_details']->options) && !empty($sideFilter['cat_details']->options))
                    @foreach ($sideFilter['cat_details']->options as $option)

                    <div class="catList">
                        <div class="headdingBox">
                            <h3 class="headdingLine">{{ $option->products_options_name ?? '' }}</h3>
                        </div>

                        @if (!empty($option->products_options_values))
                        <ul class="listbox pricelist">
                            @foreach ($option->products_options_values as $optionValue)

                            <li>
                                <label>
                                    <input type="checkbox" name="option[]" onClick="filterItem()"
                                        value="{{  $optionValue->products_options_values_id }}" />
                                    {{ $optionValue->products_options_values_name ?? '' }}
                                </label>
                            </li>

                            @endforeach
                        </ul>
                        @endif
                    </div><!-- catList -->

                    @endforeach
                    @endif
                    <!-- end product option attribute -->

                </div><!-- lists -->
            </div><!-- sectionLeft -->
            @endif

            <div class="col-md-9 sectionright">
                <div class="headdingBox">
                    <h3 class="headdingLine">Smartphones Shop</h3><span class="showResult">Showing 20 of 127
                        results</span>
                </div>

                <div class="pageGrid">
                    <div class="dropSection">
                        <select class="dropdownhead form-control" data-toggle="dropdown">
                            <option selected="selected">Popularity</option>
                            <option>Popularity</option>
                            <option>Popularity</option>
                            <option>Popularity</option>
                            <option>Popularity</option>
                        </select>
                        <select class="dropdownhead form-control" data-toggle="dropdown">
                            <option selected="selected">show 20</option>
                            <option>Popularity</option>
                            <option>Popularity</option>
                            <option>Popularity</option>
                            <option>Popularity</option>
                        </select>
                    </div><!-- dropSection -->
                    <div class="float-right">
                        <div class="pageSection">
                            <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
                            <span class="numPage">02 of 25</span>
                            <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div><!-- pageSection -->
                </div><!-- pageGrid -->
                <div class="productDetail proList">

                    @if(!empty($products))
                    @foreach($products as $product)
                    <x-theme1.shared-component.product viewtype="grid" :data="$product" />
                    @endforeach
                    @endif
                </div>

                <div class="pageingBox">
                    <select class="dropdownhead form-control" data-toggle="dropdown">
                        <option selected="selected">show 20</option>
                        <option>Popularity</option>
                        <option>Popularity</option>
                        <option>Popularity</option>
                        <option>Popularity</option>
                    </select>
                    <span class="showResult">Showing 20 of 127 results</span>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div> <!-- pageingBox -->
            </div><!-- sectionRight -->

        </div><!-- row -->
    </div>
</section><!-- container -->


@push('scripts')
<script>
function filterItem() {

    // attaching category to  filter 
    let category = [];
    let catHtml = $('input[name="choosenCategory[]"]:checked');
    if (catHtml.length > 0) {
        catHtml.each((label, data) => {
            category.push(data.value);
        });
    }

    // ataching option to filter
    let options = [];
    let optionHtml = $('input[name="option[]"]:checked');
    if (optionHtml.length > 0) {
        optionHtml.each((label, data) => {
            options.push(data.value);
        });
    }

    console.log('category', category);
    console.log('options', options);


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '{{ route("filterItem") }}',
        method: 'POST',
        data: {
            category: category,
            options: options,
        },
        success: function(response) {
            $('.count-cart-total').html(response.header_html);
            $('#cart-table').html(response.table_html);
            var msg = type === 'del' ? 'Item Removed From Cart !' : 'Item Qty Updated To Cart !';
            Notify(msg, true);
        },
        error: function(error) {
            Notify(error.responseText, false);
        }
    });

}
</script>
@endpush