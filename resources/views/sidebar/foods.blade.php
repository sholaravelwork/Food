<x-layout>

    <?php
    $data=$_GET["data"];
    ?>

    <div style="width: 100%;">



        <section>

            <div class="heading_cooking">
                <p>
                    <?=$data?>メニュー
                </p>
            </div>

            <div class="menu-list">
                @forelse($menus as $menu)
                @if($menu->genre == $data)
                <div class="card">
                    <ul>
                        <li>
                            <div>
                                <img src="{{ url('uploads/images/'.$menu->img)}}" alt="">
                                @if( $data === 'パスタ')
                                <div class="pasutamenu-des">
                                    <h2> {{ $menu->name }}</h2>
                                    <p class="menu_price">{{ $menu->price }}円(税込)</p>
                                    <p>{!! nl2br(e($menu->expla)) !!}</p>
                                </div>
                                @elseif( $data === 'コース' || $data === 'ランチ')
                                <div class="coursemenu-des">
                                    <h2> {{ $menu->name }}</h2>
                                    <p class="menu_price">{{ $menu->price }}円(税込)</p>
                                    <p>{!! nl2br(e($menu->expla)) !!}</p>
                                </div>
                                @else
                                <div class="menu-des">
                                    <h2> {{ $menu->name }}</h2>
                                    <p class="menu_price">{{ $menu->price }}円(税込)</p>
                                    <p>{!! nl2br(e($menu->expla)) !!}</p>
                                </div>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
                @endif

                @empty

                @endforelse

            </div>

        </section>

    </div>
</x-layout>

<script>
    const open = document.getElementById('open');
const overlay = document.querySelector('.overlay');

open.addEventListener('click', () => {
    overlay.classList.add('show');
    open.classList.add('hide');
});

const close = document.getElementById('close');
close.addEventListener('click', () => {
    overlay.classList.remove('show');
    open.classList.remove('hide');
});
</script>
