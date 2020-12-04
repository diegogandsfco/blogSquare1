
<div class="kc_fab_wrapper">
</div>

<div class="w-100"></div>
@if (!empty($parametro))
    <?php
        $ruta = url($urlCrear) . '/' . $parametro;
    ?>
    <script>
            $(document).ready(function(){
                var links = [
                    {
                        "bgcolor":"#03A9F4",
                        "icon":"+",
                        "url":"{{ $ruta }}"


                    }
                ]
                $('.kc_fab_wrapper').kc_fab(links);
            })
    </script>
@else
    <script>
        $(document).ready(function(){
            var links = [
                {
                    "bgcolor":"#03A9F4",
                    "icon":"+",
                    "url":"{{ route($urlCrear) }}"
                }
            ]
            $('.kc_fab_wrapper').kc_fab(links);
        })
    </script>
@endif