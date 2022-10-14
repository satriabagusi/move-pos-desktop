@section('page-title', 'Home Co')
@section('page-subtitle', 'Daftar Kategori Produk')
@section('home', 'active')


<div>

    {{-- @foreach ($product_stock_warn as $item)
    <div class="alert alert-light-warning alert-dismissible show fade">
        {{"Produk ".$item->name." stocknya dibawah 20 ! Harap segera Restock produk kembali"}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endforeach --}}

    <div class="card">

        <div class="card-header">
            Kategori Produk fsfasdasfas
        </div>
        <div class="card-body">

        </div>
        <div class="card-footer">
            <p>Oke</p>
        </div>
    </div>

</div>


@push('script')

    @foreach ($product_stock_warn as $item)
        <script>
            Toastify({
                text: '{{$item->name." stock menipis. Harap segera Restock produk kembali"}}',
                duration: 5000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                style: {
                    background: "#fffdd8",
                    color: "black",
                    "border-radius": "5px",
                    "font-size": "12px",
                }
            }).showToast();
        </script>
    @endforeach
    <script>

        window.addEventListener('message', e => {
                if(e.detail.status == 200){
                    Toastify({
                        text: e.detail.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        style: {
                            background: "#00b09b",
                        }
                    }).showToast();
                }else if(e.detail.status == 100){
                    Toastify({
                        text: e.detail.message,
                        duration: 3000,
                        newWindow: true,
                        close: true,
                        gravity: "top",
                        position: "right",
                        style: {
                            background: "#DC3545",
                        }
                    }).showToast();
                }
            })

        $(document).ready(function(){
            $('#shop_phone').mask('+62 000 0000 0000');
            $('#tax').mask('###', {reverse: true});
        })
    </script>

    @if (session()->has('message'))
        <script>
            Toastify({
                text: "{{session('message')}}",
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                style: {
                    background: "#00b09b",
                }
            }).showToast();
        </script>
    @endif
@endpush
